<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>Dashboard</h1>
  <div class="dashboard-cards">
    <div class="card">
      <div class="card-title">Assets</div>
      <div class="card-value">18/24</div>
    </div>
    <div class="card">
      <div class="card-title">Avg. Utilization</div>
      <div class="card-value">76%</div>
      <div class="card-sub">↑ 3.2% vs last week</div>
    </div>
    <div class="card">
      <div class="card-title">Fuel Efficiency</div>
      <div class="card-value">82%</div>
      <div class="card-sub">↑ 1.8% vs last week</div>
    </div>
    <div class="card">
      <div class="card-title">Operator Productivity</div>
      <div class="card-value">79%</div>
      <div class="card-sub down">↓ 0.5% vs last week</div>
    </div>
  </div>
  <div class="dashboard-stats">
    <div class="stat">
      <div class="stat-title">Downtime Today</div>
      <div class="stat-value">3 hrs</div>
    </div>
    <div class="stat">
      <div class="stat-title">Downtime This Week</div>
      <div class="stat-value">16 hrs</div>
    </div>
  </div>
  <div class="dashboard-charts">
    <div class="chart-card">
      <div class="chart-title">Asset Utilization</div>
      <canvas id="assetUtilizationChart" height="180"></canvas>
    </div>
    <div class="chart-card">
      <div class="chart-title">Downtime Trends</div>
      <canvas id="downtimeTrendsChart" height="180"></canvas>
    </div>
  </div>
  <div class="dashboard-charts">
    <div class="chart-card" style="max-width: 480px;">
      <div class="chart-title">Fuel Usage Distribution</div>
      <canvas id="fuelUsageChart" height="220"></canvas>
    </div>
  </div>
  <div class="dashboard-maint-card">
    <div class="dashboard-maint-title">Upcoming Maintenance</div>
    <div class="dashboard-maint-table-wrap">
      <table class="dashboard-maint-table">
        <thead>
          <tr>
            <th>Asset</th>
            <th>Due Date</th>
            <th>Type</th>
            <th>Priority</th>
            <th>Assigned To</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Excavator XC-2000 <div class="maint-id">A001</div></td>
            <td>May 15, 2025</td>
            <td>Routine</td>
            <td><span class="priority medium">Medium</span></td>
            <td>Maintenance Team A</td>
          </tr>
          <tr>
            <td>Crane CR-800 <div class="maint-id">A003</div></td>
            <td>Apr 25, 2025</td>
            <td>Repair</td>
            <td><span class="priority high">High</span></td>
            <td>Maintenance Team B</td>
          </tr>
          <tr>
            <td>Bulldozer BD-450 <div class="maint-id">A002</div></td>
            <td>Jun 1, 2025</td>
            <td>Routine</td>
            <td><span class="priority low">Low</span></td>
            <td>Maintenance Team A</td>
          </tr>
          <tr>
            <td>Loader L-340 <div class="maint-id">A004</div></td>
            <td>May 20, 2025</td>
            <td>Inspection</td>
            <td><span class="priority medium">Medium</span></td>
            <td>Quality Team</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>