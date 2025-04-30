<?php include 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alerts | Asset Compass</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/main.js"></script>
</head>
<body>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>Alerts</h1>
  <div class="alerts-card">
    <div class="alerts-card-header">
      <input type="text" class="alerts-search" placeholder="Search alerts...">
      <div class="alerts-controls">
        <select class="alerts-filter"><option>All Types</option><option>Warning</option><option>Critical</option><option>Info</option></select>
        <select class="alerts-filter"><option>All Assets</option><option>XC-2000</option><option>BD-450</option><option>CR-800</option></select>
      </div>
    </div>
    <div class="alerts-table-wrap">
      <table class="alerts-table">
        <thead>
          <tr>
            <th>Date/Time</th>
            <th>Type</th>
            <th>Message</th>
            <th>Asset</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-04-29 09:45</td>
            <td><span class="alert-type warning">Warning</span></td>
            <td>Asset CR-800 due for maintenance soon.</td>
            <td>Crane CR-800</td>
            <td><span class="alert-status open">Open</span></td>
            <td><button class="action-btn">Acknowledge</button></td>
          </tr>
          <tr>
            <td>2025-04-29 09:30</td>
            <td><span class="alert-type critical">Critical</span></td>
            <td>Failed to sync with remote server.</td>
            <td>-</td>
            <td><span class="alert-status open">Open</span></td>
            <td><button class="action-btn">Acknowledge</button></td>
          </tr>
          <tr>
            <td>2025-04-28 16:10</td>
            <td><span class="alert-type warning">Warning</span></td>
            <td>Low stock alert for Cement.</td>
            <td>-</td>
            <td><span class="alert-status closed">Closed</span></td>
            <td><button class="action-btn" disabled>Closed</button></td>
          </tr>
          <tr>
            <td>2025-04-28 14:50</td>
            <td><span class="alert-type critical">Critical</span></td>
            <td>Asset BD-450 failed to report status.</td>
            <td>Bulldozer BD-450</td>
            <td><span class="alert-status open">Open</span></td>
            <td><button class="action-btn">Acknowledge</button></td>
          </tr>
          <tr>
            <td>2025-04-28 11:20</td>
            <td><span class="alert-type info">Info</span></td>
            <td>Operator assigned to asset FL-200.</td>
            <td>Forklift FL-200</td>
            <td><span class="alert-status closed">Closed</span></td>
            <td><button class="action-btn" disabled>Closed</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>