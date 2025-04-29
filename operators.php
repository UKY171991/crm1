<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators | Asset Compass</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/main.js"></script>
</head>
<body>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>Operators</h1>
  <div class="operators-card">
    <div class="operators-card-header">
      <h2><svg width="22" height="22" fill="none" stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:8px;"><circle cx="10" cy="7" r="4"/><path d="M2 21v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2"/></svg> Operators Management</h2>
      <div class="operators-controls">
        <input type="text" class="operators-search" placeholder="Search operators...">
        <select class="operators-filter"><option>All Shifts</option><option>Morning</option><option>Evening</option></select>
        <select class="operators-filter"><option>All Sites</option><option>Site A</option><option>Site B</option><option>Site C</option></select>
      </div>
    </div>
    <div class="operators-table-wrap">
      <table class="operators-table">
        <thead>
          <tr>
            <th>Operator</th>
            <th>ID</th>
            <th>Assigned Asset</th>
            <th>Efficiency</th>
            <th>Shift</th>
            <th>Site</th>
            <th>Downtime (hrs)</th>
            <th>Safety Flags</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="avatar">JS</span> John Smith</td>
            <td>OP001</td>
            <td>Excavator XC-2000</td>
            <td><span class="eff-badge good">87% Good</span></td>
            <td>Morning</td>
            <td>Site A</td>
            <td>12</td>
            <td><span class="flag-badge green">0</span></td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="avatar">SD</span> Sarah Davis</td>
            <td>OP002</td>
            <td>Crane CR-800</td>
            <td><span class="eff-badge excellent">92% Excellent</span></td>
            <td>Morning</td>
            <td>Site A</td>
            <td>8</td>
            <td><span class="flag-badge yellow">1</span></td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="avatar">MJ</span> Mike Johnson</td>
            <td>OP003</td>
            <td>Bulldozer BD-450</td>
            <td><span class="eff-badge good">78% Good</span></td>
            <td>Evening</td>
            <td>Site B</td>
            <td>18</td>
            <td><span class="flag-badge red">2</span></td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="avatar">EW</span> Emily Wilson</td>
            <td>OP004</td>
            <td>Concrete Mixer CM-100</td>
            <td><span class="eff-badge excellent">94% Excellent</span></td>
            <td>Morning</td>
            <td>Site B</td>
            <td>5</td>
            <td><span class="flag-badge green">0</span></td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="avatar">RB</span> Robert Brown</td>
            <td>OP005</td>
            <td>Loader L-340</td>
            <td><span class="eff-badge good">83% Good</span></td>
            <td>Evening</td>
            <td>Site C</td>
            <td>14</td>
            <td><span class="flag-badge yellow">1</span></td>
            <td><button class="action-btn" title="History"><svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-7.7"/><polyline points="3 8 3 12 7 12"/></svg></button></td>
          </tr>
          <tr>
            <td><span class="avatar">LC</span> Lisa Chen</td>
            <td>OP006</td>
            <td>Unassigned</td>
            <td><span class="eff-badge inactive">Inactive</span></td>
            <td>Morning</td>
            <td>Site A</td>
            <td>0</td>
            <td><span class="flag-badge green">0</span></td>
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