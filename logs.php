<?php include 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logs | Asset Compass</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/main.js"></script>
</head>
<body>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>System Logs</h1>
  <div class="logs-card">
    <div class="logs-card-header">
      <input type="text" class="logs-search" placeholder="Search logs...">
      <div class="logs-controls">
        <select class="logs-filter"><option>All Types</option><option>Info</option><option>Warning</option><option>Error</option></select>
        <select class="logs-filter"><option>All Users</option><option>John Smith</option><option>Sarah Davis</option><option>System</option></select>
      </div>
    </div>
    <div class="logs-table-wrap">
      <table class="logs-table">
        <thead>
          <tr>
            <th>Date/Time</th>
            <th>Type</th>
            <th>User</th>
            <th>Message</th>
            <th>Asset</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-04-29 10:12</td>
            <td><span class="log-type info">Info</span></td>
            <td>System</td>
            <td>Scheduled backup completed successfully.</td>
            <td>-</td>
          </tr>
          <tr>
            <td>2025-04-29 09:45</td>
            <td><span class="log-type warning">Warning</span></td>
            <td>Sarah Davis</td>
            <td>Asset CR-800 due for maintenance soon.</td>
            <td>Crane CR-800</td>
          </tr>
          <tr>
            <td>2025-04-29 09:30</td>
            <td><span class="log-type error">Error</span></td>
            <td>System</td>
            <td>Failed to sync with remote server.</td>
            <td>-</td>
          </tr>
          <tr>
            <td>2025-04-28 17:22</td>
            <td><span class="log-type info">Info</span></td>
            <td>John Smith</td>
            <td>Asset XC-2000 status updated to 'Active'.</td>
            <td>Excavator XC-2000</td>
          </tr>
          <tr>
            <td>2025-04-28 16:10</td>
            <td><span class="log-type warning">Warning</span></td>
            <td>System</td>
            <td>Low stock alert for Cement.</td>
            <td>-</td>
          </tr>
          <tr>
            <td>2025-04-28 15:05</td>
            <td><span class="log-type info">Info</span></td>
            <td>Sarah Davis</td>
            <td>Operator assigned to asset FL-200.</td>
            <td>Forklift FL-200</td>
          </tr>
          <tr>
            <td>2025-04-28 14:50</td>
            <td><span class="log-type error">Error</span></td>
            <td>System</td>
            <td>Asset BD-450 failed to report status.</td>
            <td>Bulldozer BD-450</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>