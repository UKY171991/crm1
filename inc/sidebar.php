<div class="sidebar">
  <div class="sidebar-header">
    <span class="sidebar-logo">
      <!-- Truck SVG icon -->
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="7" width="15" height="13" rx="2"/><path d="M16 16h2a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2h-2"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
    </span>
    <span class="sidebar-title">Asset Compass</span>
  </div>
  <ul class="sidebar-menu">
    <li><a href="index.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='dashboard.php') echo ' active'; ?>"><span class="sidebar-icon"> 
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 13h4v4H3zM3 7h4v4H3zM9 7h4v10H9zM15 11h4v6h-4z"/></svg>
    </span>Dashboard</a></li>
    <li><a href="assets.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='assets.php') echo ' active'; ?>"><span class="sidebar-icon">
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="14" height="10" rx="2"/><path d="M7 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/></svg>
    </span>Assets</a></li>
    <li><a href="operators.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='operators.php') echo ' active'; ?>"><span class="sidebar-icon">
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="7" r="4"/><path d="M2 21v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2"/></svg>
    </span>Operators</a></li>
    <li><a href="inventory.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='inventory.php') echo ' active'; ?>"><span class="sidebar-icon">
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="14" height="16" rx="2"/><path d="M7 4v16M17 8H3"/></svg>
    </span>Inventory</a></li>
    <li><a href="logs.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='logs.php') echo ' active'; ?>"><span class="sidebar-icon">
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="14" height="16" rx="2"/><path d="M7 4v16M17 8H3"/></svg>
    </span>Logs</a></li>
    <li><a href="reports.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='reports.php') echo ' active'; ?>"><span class="sidebar-icon">
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="14" height="16" rx="2"/><path d="M7 4v16M17 8H3"/></svg>
    </span>Reports</a></li>
    <li><a href="alerts.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='alerts.php') echo ' active'; ?>"><span class="sidebar-icon">
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
    </span>Alerts</a></li>
    <li><a href="settings.php" class="sidebar-link<?php if(basename($_SERVER['PHP_SELF'])=='settings.php') echo ' active'; ?>"><span class="sidebar-icon">
      <svg width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33h.09a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51h.09a1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06-.06a1.65 1.65 0 0 0-.33 1.82v.09a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
    </span>Settings</a></li>
  </ul>
</div>