<?php include 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings | Asset Compass</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/main.js"></script>
</head>
<body>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/topbar.php'; ?>
<div class="main-content">
  <h1>Settings</h1>
  <div class="settings-card">
    <div class="settings-section">
      <h2>Profile</h2>
      <form class="settings-form">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-input" value="Admin User" />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-input" value="admin@assetcompass.com" />
        </div>
        <div class="form-actions">
          <button type="submit" class="settings-save-btn">Save Profile</button>
        </div>
      </form>
    </div>
    <div class="settings-section">
      <h2>System Preferences</h2>
      <form class="settings-form">
        <div class="form-group">
          <label>Default Language</label>
          <select class="form-input">
            <option>English</option>
            <option>Spanish</option>
            <option>French</option>
          </select>
        </div>
        <div class="form-group">
          <label>Timezone</label>
          <select class="form-input">
            <option>UTC</option>
            <option>America/New_York</option>
            <option>Europe/London</option>
            <option>Asia/Kolkata</option>
          </select>
        </div>
        <div class="form-actions">
          <button type="submit" class="settings-save-btn">Save Preferences</button>
        </div>
      </form>
    </div>
    <div class="settings-section">
      <h2>Users</h2>
      <div class="settings-table-wrap">
        <table class="settings-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Admin User</td>
              <td>admin@assetcompass.com</td>
              <td>Administrator</td>
              <td><span class="user-status active">Active</span></td>
              <td><button class="action-btn" disabled>Current</button></td>
            </tr>
            <tr>
              <td>Sarah Davis</td>
              <td>sarah@assetcompass.com</td>
              <td>Manager</td>
              <td><span class="user-status active">Active</span></td>
              <td><button class="action-btn">Remove</button></td>
            </tr>
            <tr>
              <td>Mike Johnson</td>
              <td>mike@assetcompass.com</td>
              <td>Operator</td>
              <td><span class="user-status inactive">Inactive</span></td>
              <td><button class="action-btn">Activate</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>