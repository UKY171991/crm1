<?php
// include/ajax_add_asset.php
include '../inc/config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['asset_id'];
    $name = $_POST['asset_name'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $operator = $_POST['operator'];
    $utilization = $_POST['utilization'];
    $stmt = $pdo->prepare('INSERT INTO assets (asset_id, asset_name, type, location, status, operator, utilization) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $ok = $stmt->execute([$id, $name, $type, $location, $status, $operator, $utilization]);
    echo json_encode(['success' => $ok]);
    exit;
}
echo json_encode(['success' => false, 'error' => 'Invalid request']);
