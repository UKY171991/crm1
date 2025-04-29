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
        <tbody>
          <tr>
            <td><span class="asset-chip">XC-2000</span> <div class="asset-main">Excavator XC-2000 <div class="asset-id">A001</div></div></td>
            <td>Excavator</td>
            <td>Site A</td>
            <td><span class="badge badge-active">● Active</span></td>
            <td>John Smith</td>
            <td><div class="util-bar green"><div style="width:78%"></div></div> 78%</td>
            <td>
              <button class="action-btn" title="History"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button>
              <button class="action-btn more-btn" title="More"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="5" r="1.2"/><circle cx="10" cy="10" r="1.2"/><circle cx="10" cy="15" r="1.2"/></svg></button>
              <div class="action-menu-popup" style="display:none;">
                <button class="action-menu-item">Edit</button>
                <button class="action-menu-item">Delete</button>
              </div>
            </td>
          </tr>
          <tr>
            <td><span class="asset-chip">BD-450</span> <div class="asset-main">Bulldozer BD-450 <div class="asset-id">A002</div></div></td>
            <td>Bulldozer</td>
            <td>Site B</td>
            <td><span class="badge badge-idle">● Idle</span></td>
            <td>Mike Johnson</td>
            <td><div class="util-bar red"><div style="width:45%"></div></div> 45%</td>
            <td>
              <button class="action-btn" title="History"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button>
              <button class="action-btn more-btn" title="More"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="5" r="1.2"/><circle cx="10" cy="10" r="1.2"/><circle cx="10" cy="15" r="1.2"/></svg></button>
              <div class="action-menu-popup" style="display:none;">
                <button class="action-menu-item">Edit</button>
                <button class="action-menu-item">Delete</button>
              </div>
            </td>
          </tr>
          <tr>
            <td><span class="asset-chip">CR-800</span> <div class="asset-main">Crane CR-800 <div class="asset-id">A003</div></div></td>
            <td>Crane</td>
            <td>Site A</td>
            <td><span class="badge badge-maintenance">● Maintenance</span></td>
            <td>Sarah Davis</td>
            <td><div class="util-bar gray"><div style="width:0%"></div></div> 0%</td>
            <td>
              <button class="action-btn" title="History"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button>
              <button class="action-btn more-btn" title="More"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="5" r="1.2"/><circle cx="10" cy="10" r="1.2"/><circle cx="10" cy="15" r="1.2"/></svg></button>
              <div class="action-menu-popup" style="display:none;">
                <button class="action-menu-item">Edit</button>
                <button class="action-menu-item">Delete</button>
              </div>
            </td>
          </tr>
          <tr>
            <td><span class="asset-chip">L-340</span> <div class="asset-main">Loader L-340 <div class="asset-id">A004</div></div></td>
            <td>Loader</td>
            <td>Site C</td>
            <td><span class="badge badge-active">● Active</span></td>
            <td>Robert Brown</td>
            <td><div class="util-bar green"><div style="width:85%"></div></div> 85%</td>
            <td>
              <button class="action-btn" title="History"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button>
              <button class="action-btn more-btn" title="More"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="5" r="1.2"/><circle cx="10" cy="10" r="1.2"/><circle cx="10" cy="15" r="1.2"/></svg></button>
              <div class="action-menu-popup" style="display:none;">
                <button class="action-menu-item">Edit</button>
                <button class="action-menu-item">Delete</button>
              </div>
            </td>
          </tr>
          <tr>
            <td><span class="asset-chip">CM-100</span> <div class="asset-main">Concrete Mixer CM-100 <div class="asset-id">A005</div></div></td>
            <td>Mixer</td>
            <td>Site B</td>
            <td><span class="badge badge-active">● Active</span></td>
            <td>Emily Wilson</td>
            <td><div class="util-bar green"><div style="width:92%"></div></div> 92%</td>
            <td>
              <button class="action-btn" title="History"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button>
              <button class="action-btn more-btn" title="More"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="5" r="1.2"/><circle cx="10" cy="10" r="1.2"/><circle cx="10" cy="15" r="1.2"/></svg></button>
              <div class="action-menu-popup" style="display:none;">
                <button class="action-menu-item">Edit</button>
                <button class="action-menu-item">Delete</button>
              </div>
            </td>
          </tr>
          <tr>
            <td><span class="asset-chip">FL-200</span> <div class="asset-main">Forklift FL-200 <div class="asset-id">A006</div></div></td>
            <td>Forklift</td>
            <td>Site A</td>
            <td><span class="badge badge-idle">● Idle</span></td>
            <td>Unassigned</td>
            <td><div class="util-bar red"><div style="width:30%"></div></div> 30%</td>
            <td>
              <button class="action-btn" title="History"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button>
              <button class="action-btn more-btn" title="More"><svg width="20" height="20" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="5" r="1.2"/><circle cx="10" cy="10" r="1.2"/><circle cx="10" cy="15" r="1.2"/></svg></button>
              <div class="action-menu-popup" style="display:none;">
                <button class="action-menu-item">Edit</button>
                <button class="action-menu-item">Delete</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div id="auditModal" class="modal-overlay" style="display:none;">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Audit Trail - Excavator XC-2000</div>
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
      <tbody>
        <tr>
          <td>2025-04-29 11:34</td>
          <td><span class="badge badge-active">Created</span></td>
          <td>John Smith</td>
          <td>Asset created</td>
        </tr>
        <tr>
          <td>2025-04-26 11:34</td>
          <td><span class="badge badge-maintenance">Updated</span></td>
          <td>Sarah Johnson</td>
          <td>Status changed from 'idle' to 'active'</td>
        </tr>
        <tr>
          <td>2025-04-23 11:34</td>
          <td><span class="badge badge-maintenance">Updated</span></td>
          <td>Michael Brown</td>
          <td>Location updated from 'Site A' to 'Site B'</td>
        </tr>
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
<?php include 'inc/footer.php'; ?>
</body>
</html>