<?php
declare(strict_types=1);
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../includes/response.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') jsonResponse(false, 'Method not allowed.', null, 405);
$input = json_decode(file_get_contents('php://input'), true) ?: [];
$name = trim((string)($input['name'] ?? ''));
$email = filter_var($input['email'] ?? '', FILTER_VALIDATE_EMAIL);
$password = (string)($input['password'] ?? '');
if (strlen($name) < 2 || !$email || strlen($password) < 8) jsonResponse(false, 'Name, valid email, and an 8-character password are required.', null, 422);
try {
    $pdo = database();
    $role = $pdo->query("SELECT id FROM roles WHERE name = 'customer' LIMIT 1")->fetchColumn();
    $statement = $pdo->prepare('INSERT INTO users (role_id, name, email, password_hash) VALUES (:role_id, :name, :email, :password_hash)');
    $statement->execute(['role_id' => $role, 'name' => $name, 'email' => $email, 'password_hash' => password_hash($password, PASSWORD_DEFAULT)]);
    jsonResponse(true, 'Account created successfully.', ['user_id' => (int)$pdo->lastInsertId()], 201);
} catch (PDOException $error) {
    if ((int)$error->errorInfo[1] === 1062) jsonResponse(false, 'An account with that email already exists.', null, 409);
    jsonResponse(false, 'Unable to create account.', null, 500);
} catch (Throwable $error) { jsonResponse(false, 'Unable to create account.', null, 500); }
