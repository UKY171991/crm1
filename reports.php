<?php include 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reports | Asset Compass</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/main.js"></script>
</head>
<body>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>Reports</h1>
  <div class="reports-card">
    <div class="reports-card-header">
      <h2>Asset Utilization Report</h2>
      <div class="reports-controls">
        <input type="date" class="reports-date">
        <select class="reports-filter">
          <option>This Week</option>
          <option>This Month</option>
          <option>Last Month</option>
          <option>This Year</option>
        </select>
        <button class="reports-export-btn">Export CSV</button>
      </div>
    </div>
    <div class="reports-table-wrap">
      <table class="reports-table">
        <thead>
          <tr>
            <th>Asset</th>
            <th>Type</th>
            <th>Utilization (%)</th>
            <th>Downtime (hrs)</th>
            <th>Fuel Used (L)</th>
            <th>Distance (km)</th>
            <th>Operator</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Excavator XC-2000</td>
            <td>Excavator</td>
            <td>78%</td>
            <td>3.2</td>
            <td>120</td>
            <td>18</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>Bulldozer BD-450</td>
            <td>Bulldozer</td>
            <td>45%</td>
            <td>6.1</td>
            <td>98</td>
            <td>12</td>
            <td>Mike Johnson</td>
          </tr>
          <tr>
            <td>Crane CR-800</td>
            <td>Crane</td>
            <td>0%</td>
            <td>8.0</td>
            <td>0</td>
            <td>0</td>
            <td>Sarah Davis</td>
          </tr>
          <tr>
            <td>Loader L-340</td>
            <td>Loader</td>
            <td>85%</td>
            <td>1.5</td>
            <td>110</td>
            <td>22</td>
            <td>Robert Brown</td>
          </tr>
          <tr>
            <td>Concrete Mixer CM-100</td>
            <td>Mixer</td>
            <td>92%</td>
            <td>0.8</td>
            <td>140</td>
            <td>15</td>
            <td>Emily Wilson</td>
          </tr>
          <tr>
            <td>Forklift FL-200</td>
            <td>Forklift</td>
            <td>30%</td>
            <td>4.2</td>
            <td>60</td>
            <td>7</td>
            <td>Unassigned</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>