<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | Asset Compass</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/main.js"></script>
</head>
<body>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>Inventory Management</h1>
  <div class="inventory-card">
    <div class="inventory-card-header">
      <input type="text" class="inventory-search" placeholder="Search inventory...">
      <div class="inventory-controls">
        <button class="inventory-filter-btn" title="Filter"><svg width="18" height="18" fill="none" stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="8" r="7"/><path d="M8 5v6l4 2"/></svg> Filter</button>
        <button class="inventory-add-btn">+ Add Item</button>
      </div>
    </div>
    <div class="inventory-table-wrap">
      <table class="inventory-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Received Date</th>
            <th>Location</th>
            <th>Supplier</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>INV-001</td>
            <td>Diesel Fuel</td>
            <td><span class="inv-cat-badge fuel">Fuel</span></td>
            <td>2500 liters</td>
            <td><span class="inv-status in-stock">● In Stock</span></td>
            <td>2025-04-25</td>
            <td>Main Warehouse</td>
            <td>Petrox Fuels</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td>INV-002</td>
            <td>Granite Boulders</td>
            <td><span class="inv-cat-badge materials">Construction Materials</span></td>
            <td>450 tons</td>
            <td><span class="inv-status in-stock">● In Stock</span></td>
            <td>2025-04-22</td>
            <td>Site B Storage</td>
            <td>Rocky Mountain Quarry</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td>INV-003</td>
            <td>Cement</td>
            <td><span class="inv-cat-badge materials">Construction Materials</span></td>
            <td>350 bags</td>
            <td><span class="inv-status low-stock">● Low Stock</span></td>
            <td>2025-04-18</td>
            <td>Main Warehouse</td>
            <td>BuildWell Supplies</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td>INV-004</td>
            <td>Hydraulic Oil</td>
            <td><span class="inv-cat-badge supplies">Maintenance Supplies</span></td>
            <td>200 liters</td>
            <td><span class="inv-status in-stock">● In Stock</span></td>
            <td>2025-04-15</td>
            <td>Maintenance Shop</td>
            <td>LubeMax Industrial</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td>INV-005</td>
            <td>Steel Reinforcement</td>
            <td><span class="inv-cat-badge materials">Construction Materials</span></td>
            <td>120 rods</td>
            <td><span class="inv-status out-stock">● Out of Stock</span></td>
            <td>2025-04-10</td>
            <td>Site A Storage</td>
            <td>MetalWorks Inc.</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td>INV-006</td>
            <td>Safety Helmets</td>
            <td><span class="inv-cat-badge equipment">Safety Equipment</span></td>
            <td>75 pieces</td>
            <td><span class="inv-status in-stock">● In Stock</span></td>
            <td>2025-04-05</td>
            <td>Equipment Room</td>
            <td>SafeGuard Supplies</td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>