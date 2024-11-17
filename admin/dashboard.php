<!-- dashboard.php -->
<?php include 'includes/header.php'; ?>

<div class="d-flex">
    <?php include 'includes/sidebar.php'; ?>

    <!-- Konten Utama -->
    <div class="container-fluid p-4">
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded shadow-sm">
            <div class="container-fluid">
                <span class="navbar-brand fw-bold">Admin Dashboard</span>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-bell"></i> Notifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-user-circle"></i> Profil</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Konten Dashboard -->
        <h1>Selamat datang di Dashboard</h1>
        <!-- (Kode konten utama lainnya dapat ditempatkan di sini) -->
    </div>
</div>

<?php include 'includes/footer.php'; ?>
