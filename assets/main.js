// Chart.js for dashboard
window.addEventListener('DOMContentLoaded', function() {
  // Only initialize charts if the canvas exists
  var ctx1El = document.getElementById('assetUtilizationChart');
  if (ctx1El) {
    var ctx1 = ctx1El.getContext('2d');
    new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Excavator', 'Bulldozer', 'Loader L-3', 'Concrete M.', 'Forklift F.'],
        datasets: [{
          label: 'Utilization',
          data: [75, 55, 90, 85, 20],
          backgroundColor: '#a78bfa',
          borderRadius: 8,
          borderSkipped: false,
          barThickness: 22
        }]
      },
      options: {
        indexAxis: 'y',
        plugins: { legend: { display: false } },
        scales: {
          x: { min: 0, max: 100, ticks: { callback: v => v + '%' } },
          y: { grid: { display: false } }
        }
      }
    });
  }

  var ctx2El = document.getElementById('downtimeTrendsChart');
  if (ctx2El) {
    var ctx2 = ctx2El.getContext('2d');
    new Chart(ctx2, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          label: 'Downtime (hrs)',
          data: [4, 3, 5, 2, 6, 4, 1],
          borderColor: '#38bdf8',
          backgroundColor: 'rgba(56,189,248,0.1)',
          tension: 0.4,
          pointRadius: 4,
          fill: false
        }]
      },
      options: {
        plugins: { legend: { display: false } },
        scales: {
          y: { min: 0, max: 8, ticks: { stepSize: 2 } }
        }
      }
    });
  }

  var ctx3El = document.getElementById('fuelUsageChart');
  if (ctx3El) {
    var ctx3 = ctx3El.getContext('2d');
    new Chart(ctx3, {
      type: 'pie',
      data: {
        labels: ['Excavators', 'Bulldozers', 'Cranes', 'Loaders', 'Mixers', 'Oil'],
        datasets: [{
          data: [30, 20, 10, 18, 12, 10],
          backgroundColor: [
            '#a78bfa', '#38bdf8', '#fbbf24', '#f472b6', '#34d399', '#f87171'
          ]
        }]
      },
      options: {
        plugins: {
          legend: {
            position: 'right',
            labels: { boxWidth: 16, font: { size: 14 } }
          }
        }
      }
    });
  }

  // Modal logic for audit trail
  var modal = document.getElementById('auditModal');
  var closeBtn = document.getElementById('closeAuditModal');
  // Open modal on any History (clock) button
  document.querySelectorAll('.action-btn[title="History"]').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      if (modal) modal.style.display = 'flex';
    });
  });
  // Close modal on close button or overlay click
  if (closeBtn) closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
  });
  if (modal) modal.addEventListener('click', function(e) {
    if (e.target === modal) modal.style.display = 'none';
  });

  // Add Asset modal logic
  var addAssetModal = document.getElementById('addAssetModal');
  var openAddAssetBtn = document.getElementById('openAddAssetModal');
  var closeAddAssetBtn = document.getElementById('closeAddAssetModal');
  if (openAddAssetBtn && addAssetModal) {
    openAddAssetBtn.addEventListener('click', function(e) {
      e.preventDefault();
      addAssetModal.style.display = 'flex';
    });
  }
  if (closeAddAssetBtn && addAssetModal) {
    closeAddAssetBtn.addEventListener('click', function() {
      addAssetModal.style.display = 'none';
    });
  }
  if (addAssetModal) {
    addAssetModal.addEventListener('click', function(e) {
      if (e.target === addAssetModal) addAssetModal.style.display = 'none';
    });
  }

  // Action menu logic
  document.querySelectorAll('.more-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      closeAllActionMenus();
      var menu = btn.parentElement.querySelector('.action-menu-popup');
      if (menu) menu.style.display = 'flex';
    });
  });
  document.addEventListener('click', function(e) {
    closeAllActionMenus();
  });
  document.querySelectorAll('.action-menu-popup').forEach(function(menu) {
    menu.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  });

  // Load assets via AJAX
  function renderStatusBadge(status) {
    if (status === 'Active') return '<span class="badge badge-active">● Active</span>';
    if (status === 'Idle') return '<span class="badge badge-idle">● Idle</span>';
    if (status === 'Maintenance') return '<span class="badge badge-maintenance">● Maintenance</span>';
    return status;
  }
  function renderUtilBar(util) {
    let color = 'gray';
    if (util >= 80) color = 'green';
    else if (util >= 50) color = 'red';
    return `<div class="util-bar ${color}"><div style="width:${util}%"></div></div> ${util}%`;
  }
  function renderAssetRow(asset) {
    return `<tr>
      <td><span class="asset-chip">${asset.asset_id}</span> <div class="asset-main">${asset.asset_name} <div class="asset-id">${asset.asset_id}</div></div></td>
      <td>${asset.type}</td>
      <td>${asset.location}</td>
      <td>${renderStatusBadge(asset.status)}</td>
      <td>${asset.operator || 'Unassigned'}</td>
      <td>${renderUtilBar(asset.utilization || 0)}</td>
      <td>
        <button class="action-btn" title="History">...</button>
        <button class="action-btn more-btn" title="More">...</button>
        <div class="action-menu-popup" style="display:none;">
          <button class="action-menu-item">Edit</button>
          <button class="action-menu-item">Delete</button>
        </div>
      </td>
    </tr>`;
  }
  function loadAssets() {
    fetch('include/ajax_assets.php')
      .then(res => res.json())
      .then(data => {
        const tbody = document.getElementById('assets-tbody');
        tbody.innerHTML = data.map(renderAssetRow).join('');
      });
  }
  loadAssets();
});

// Action menu popup for assets table
function closeAllActionMenus() {
  document.querySelectorAll('.action-menu-popup').forEach(function(menu) {
    menu.style.display = 'none';
  });
}
