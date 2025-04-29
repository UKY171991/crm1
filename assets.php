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
        <button class="assets-add-btn">+ Add Asset</button>
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
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button> <button class="action-btn" title="More"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="5" r="1.5"/><circle cx="9" cy="9" r="1.5"/><circle cx="9" cy="13" r="1.5"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="asset-chip">BD-450</span> <div class="asset-main">Bulldozer BD-450 <div class="asset-id">A002</div></div></td>
            <td>Bulldozer</td>
            <td>Site B</td>
            <td><span class="badge badge-idle">● Idle</span></td>
            <td>Mike Johnson</td>
            <td><div class="util-bar red"><div style="width:45%"></div></div> 45%</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button> <button class="action-btn" title="More"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="5" r="1.5"/><circle cx="9" cy="9" r="1.5"/><circle cx="9" cy="13" r="1.5"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="asset-chip">CR-800</span> <div class="asset-main">Crane CR-800 <div class="asset-id">A003</div></div></td>
            <td>Crane</td>
            <td>Site A</td>
            <td><span class="badge badge-maintenance">● Maintenance</span></td>
            <td>Sarah Davis</td>
            <td><div class="util-bar gray"><div style="width:0%"></div></div> 0%</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button> <button class="action-btn" title="More"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="5" r="1.5"/><circle cx="9" cy="9" r="1.5"/><circle cx="9" cy="13" r="1.5"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="asset-chip">L-340</span> <div class="asset-main">Loader L-340 <div class="asset-id">A004</div></div></td>
            <td>Loader</td>
            <td>Site C</td>
            <td><span class="badge badge-active">● Active</span></td>
            <td>Robert Brown</td>
            <td><div class="util-bar green"><div style="width:85%"></div></div> 85%</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button> <button class="action-btn" title="More"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="5" r="1.5"/><circle cx="9" cy="9" r="1.5"/><circle cx="9" cy="13" r="1.5"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="asset-chip">CM-100</span> <div class="asset-main">Concrete Mixer CM-100 <div class="asset-id">A005</div></div></td>
            <td>Mixer</td>
            <td>Site B</td>
            <td><span class="badge badge-active">● Active</span></td>
            <td>Emily Wilson</td>
            <td><div class="util-bar green"><div style="width:92%"></div></div> 92%</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button> <button class="action-btn" title="More"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="5" r="1.5"/><circle cx="9" cy="9" r="1.5"/><circle cx="9" cy="13" r="1.5"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="asset-chip">FL-200</span> <div class="asset-main">Forklift FL-200 <div class="asset-id">A006</div></div></td>
            <td>Forklift</td>
            <td>Site A</td>
            <td><span class="badge badge-idle">● Idle</span></td>
            <td>Unassigned</td>
            <td><div class="util-bar red"><div style="width:30%"></div></div> 30%</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button> <button class="action-btn" title="More"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="5" r="1.5"/><circle cx="9" cy="9" r="1.5"/><circle cx="9" cy="13" r="1.5"/></svg></button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>