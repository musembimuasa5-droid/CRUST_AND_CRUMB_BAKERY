<?php
declare(strict_types=1);
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../includes/response.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') jsonResponse(false, 'Method not allowed.', null, 405);
$input = json_decode(file_get_contents('php://input'), true) ?: [];
$email = filter_var($input['email'] ?? '', FILTER_VALIDATE_EMAIL);
$password = (string)($input['password'] ?? '');
if (!$email || strlen($password) < 8) jsonResponse(false, 'Enter a valid email and password.', null, 422);
try {
    $statement = database()->prepare('SELECT id, name, email, password_hash, role FROM users WHERE email = :email AND is_active = 1 LIMIT 1');
    $statement->execute(['email' => $email]); $user = $statement->fetch();
    if (!$user || !password_verify($password, $user['password_hash'])) jsonResponse(false, 'Invalid email or password.', null, 401);
    session_start(['cookie_httponly' => true, 'cookie_samesite' => 'Lax']);
    $_SESSION['user_id'] = $user['id']; $_SESSION['role'] = $user['role'];
    unset($user['password_hash']); jsonResponse(true, 'Signed in successfully.', $user);
} catch (Throwable $error) { jsonResponse(false, 'Unable to sign in.', null, 500); }
