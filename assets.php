<?php include 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assets | Asset Compass</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/main.js"></script>
</head>
<body>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>Assets</h1>
  <div class="assets-card">
    <div class="assets-card-header">
      <h2>Asset Inventory</h2>
      <div class="assets-controls">
        <input type="text" class="assets-search" placeholder="Search assets...">
        <button class="assets-filter-btn" title="Filter"><svg width="18" height="18" fill="none" stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="8" r="7"/><path d="M8 5v6l4 2"/></svg></button>
        <button class="assets-add-btn" id="openAddAssetModal">+ Add Asset</button>
      </div>
    </div>
    <div class="assets-table-wrap">
      <table class="assets-table">
        <thead>
          <tr>
            <th>Asset</th>
            <th>Type</th>
            <th>Location</th>
            <th>Status</th>
            <th>Operator</th>
            <th>Utilization</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="assets-tbody">
          <!-- Asset rows will be loaded here by AJAX -->
        </tbody>
      </table>
    </div>
  </div>
</div>
<div id="auditModal" class="modal-overlay" style="display:none;">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title" id="auditModalTitle">Audit Trail</div>
      <button class="modal-close" id="closeAuditModal" title="Close">&times;</button>
    </div>
    <div class="modal-subtitle">View the history of changes made to this asset.</div>
    <table class="modal-table">
      <thead>
        <tr>
          <th>Timestamp</th>
          <th>Action</th>
          <th>User</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody id="auditModalBody">
        <!-- Dynamic audit rows -->
      </tbody>
    </table>
  </div>
</div>
<div id="addAssetModal" class="modal-overlay" style="display:none;">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Add New Asset</div>
      <button class="modal-close" id="closeAddAssetModal" title="Close">&times;</button>
    </div>
    <form class="add-asset-form">
      <div class="form-group">
        <label>Asset Name</label>
        <input type="text" class="form-input" placeholder="e.g. Excavator XC-2000" required />
      </div>
      <div class="form-group">
        <label>Asset ID</label>
        <input type="text" class="form-input" placeholder="e.g. A001" required />
      </div>
      <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-input" placeholder="e.g. Excavator" required />
      </div>
      <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-input" placeholder="e.g. Site A" required />
      </div>
      <div class="form-group">
        <label>Status</label>
        <select class="form-input">
          <option>Active</option>
          <option>Idle</option>
          <option>Maintenance</option>
        </select>
      </div>
      <div class="form-group">
        <label>Operator</label>
        <input type="text" class="form-input" placeholder="e.g. John Smith" />
      </div>
      <div class="form-group">
        <label>Utilization (%)</label>
        <input type="number" class="form-input" placeholder="e.g. 78" min="0" max="100" />
      </div>
      <div class="form-actions">
        <button type="submit" class="assets-add-btn">Add Asset</button>
      </div>
    </form>
  </div>
</div>
<div id="editAssetModal" class="modal-overlay" style="display:none;">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Edit Asset</div>
      <button class="modal-close" id="closeEditAssetModal" title="Close">&times;</button>
    </div>
    <form class="edit-asset-form">
      <input type="hidden" name="asset_id" id="edit-asset-id" />
      <div class="form-group">
        <label>Asset Name</label>
        <input type="text" class="form-input" name="asset_name" id="edit-asset-name" required />
      </div>
      <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-input" name="type" id="edit-asset-type" required />
      </div>
      <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-input" name="location" id="edit-asset-location" required />
      </div>
      <div class="form-group">
        <label>Status</label>
        <select class="form-input" name="status" id="edit-asset-status">
          <option value="Active">Active</option>
          <option value="Idle">Idle</option>
          <option value="Maintenance">Maintenance</option>
        </select>
      </div>
      <div class="form-group">
        <label>Operator</label>
        <input type="text" class="form-input" name="operator" id="edit-asset-operator" />
      </div>
      <div class="form-group">
        <label>Utilization (%)</label>
        <input type="number" class="form-input" name="utilization" id="edit-asset-utilization" min="0" max="100" />
      </div>
      <div class="form-actions">
        <button type="submit" class="assets-add-btn">Save Changes</button>
      </div>
    </form>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>