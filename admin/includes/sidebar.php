<!-- includes/sidebar.php -->
<div class="sidebar p-3">
    <h4 class="text-white">Admin Dashboard</h4>
    <ul class="nav flex-column mt-4">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="data_pemesanan.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'data_pemesanan.php' ? 'active' : '' ?>">
                <i class="fas fa-ticket-alt me-2"></i> Data Pemesanan
            </a>
        </li>
        <li class="nav-item">
            <a href="jadwal_rute.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'jadwal_rute.php' ? 'active' : '' ?>">
                <i class="fas fa-route me-2"></i> Jadwal & Rute
            </a>
        </li>
        <li class="nav-item">
            <a href="pengguna.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'pengguna.php' ? 'active' : '' ?>">
                <i class="fas fa-users me-2"></i> Pengguna
            </a>
        </li>
        <li class="nav-item">
            <a href="pengaturan.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'pengaturan.php' ? 'active' : '' ?>">
                <i class="fas fa-cog me-2"></i> Pengaturan
            </a>
        </li>
    </ul>
</div>
