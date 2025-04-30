<?php
// include/ajax_assets.php
include '../inc/config.php';
header('Content-Type: application/json');

$stmt = $pdo->query('SELECT * FROM assets');
$assets = $stmt->fetchAll();
echo json_encode($assets);
