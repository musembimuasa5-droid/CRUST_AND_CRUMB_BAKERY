<?php
declare(strict_types=1);
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../includes/response.php';
try {
    $category = trim((string)($_GET['category'] ?? ''));
    $search = trim((string)($_GET['search'] ?? ''));
    $sql = "SELECT p.id, p.name, p.slug, p.description, p.price, p.image_url AS image, c.slug AS category, GROUP_CONCAT(DISTINCT a.slug) AS allergen_slugs FROM products p JOIN categories c ON c.id = p.category_id LEFT JOIN product_allergens pa ON pa.product_id = p.id LEFT JOIN allergens a ON a.id = pa.allergen_id WHERE p.is_active = 1";
    $params = [];
    if ($category !== '') { $sql .= ' AND c.slug = :category'; $params['category'] = $category; }
    if ($search !== '') { $sql .= ' AND (p.name LIKE :search OR p.description LIKE :search)'; $params['search'] = "%{$search}%"; }
    $sql .= ' GROUP BY p.id ORDER BY p.is_featured DESC, p.name ASC';
    $statement = database()->prepare($sql); $statement->execute($params);
    $products = $statement->fetchAll();
    foreach ($products as &$product) { $product['price'] = (float)$product['price']; $product['tags'] = ['vegetarian']; }
    jsonResponse(true, 'Products loaded.', $products);
} catch (Throwable $error) { jsonResponse(false, 'Unable to load products.', null, 500); }
