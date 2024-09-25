<div class="bg-dark border-right d-flex flex-column" id="sidebar-wrapper">
    <div class="sidebar-heading text-white text-center">
        <i class="fas fa-user-circle fa-2x"></i>
        <div class="sidebar-logo-text">BIDSPIRIT Admin</div>
    </div>
    <div class="list-group list-group-flush flex-grow-1">
        <a href="dashboard.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-tachometer-alt"></i>
            <span class="sidebar-text">Dash board</span>
        </a>
        <a href="user_management.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-users"></i>
            <span class="sidebar-text">Users</span>
        </a>
        <a href="product_management.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-shopping-bag"></i>
            <span class="sidebar-text">Categories</span>
        </a>
        <a href="orders.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-receipt"></i>
            <span class="sidebar-text">Products</span>
        </a>
        <a href="reports.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-chart-line"></i>
            <span class="sidebar-text">Report</span>
        </a>
        <a href="settings.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-cog"></i>
            <span class="sidebar-text">Setting</span>
        </a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-sign-out-alt"></i>
            <span class="sidebar-text">Log out</span>
        </a>
    </div>

    <button class="btn btn-primary m-2 w-100" id="menu-toggle">
        <i class="fas fa-angle-left"></i>
    </button>
</div>

<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        const sidebar = document.getElementById("sidebar-wrapper");
        sidebar.classList.toggle("collapsed");
    });
</script>