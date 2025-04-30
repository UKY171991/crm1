<?php
// include/ajax_audit_asset.php
header('Content-Type: application/json');
// Simulate audit data for demo. Replace with DB query as needed.
$asset_id = $_GET['asset_id'] ?? '';
$audit = [];
if ($asset_id === 'A001') {
    $audit = [
        ["timestamp" => "2025-04-29 11:34", "action" => "Created", "user" => "John Smith", "details" => "Asset created"],
        ["timestamp" => "2025-04-26 11:34", "action" => "Updated", "user" => "Sarah Johnson", "details" => "Status changed from 'idle' to 'active'"],
        ["timestamp" => "2025-04-23 11:34", "action" => "Updated", "user" => "Michael Brown", "details" => "Location updated from 'Site A' to 'Site B'"],
    ];
} else {
    $audit = [
        ["timestamp" => "2025-04-29 10:00", "action" => "Created", "user" => "System", "details" => "Asset created"],
    ];
}
echo json_encode($audit);
