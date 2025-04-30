<?php
// include/ajax_update_asset.php
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
    $stmt = $pdo->prepare('UPDATE assets SET asset_name=?, type=?, location=?, status=?, operator=?, utilization=? WHERE asset_id=?');
    $ok = $stmt->execute([$name, $type, $location, $status, $operator, $utilization, $id]);
    echo json_encode(['success' => $ok]);
    exit;
}
echo json_encode(['success' => false, 'error' => 'Invalid request']);
