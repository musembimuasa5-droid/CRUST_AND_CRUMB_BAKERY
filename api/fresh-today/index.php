<?php
declare(strict_types=1);
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../includes/response.php';
try {
    $statement = database()->prepare("SELECT f.id, f.batch_time, f.quantity_available, f.special_note, p.id AS product_id, p.name, p.description, p.price, p.image_url AS image FROM fresh_today f JOIN products p ON p.id = f.product_id WHERE f.fresh_date = CURDATE() AND p.is_active = 1 ORDER BY f.batch_time ASC");
    $statement->execute();
    $items = $statement->fetchAll();
    foreach ($items as &$item) { $item['quantity_available'] = (int)$item['quantity_available']; $item['price'] = (float)$item['price']; }
    jsonResponse(true, 'Fresh today loaded.', $items);
} catch (Throwable $error) { jsonResponse(false, 'Unable to load fresh batches.', null, 500); }
