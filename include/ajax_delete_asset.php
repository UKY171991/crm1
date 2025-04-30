<?php
// include/ajax_delete_asset.php
include '../inc/config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['asset_id'];
    $stmt = $pdo->prepare('DELETE FROM assets WHERE asset_id=?');
    $ok = $stmt->execute([$id]);
    echo json_encode(['success' => $ok]);
    exit;
}
echo json_encode(['success' => false, 'error' => 'Invalid request']);
