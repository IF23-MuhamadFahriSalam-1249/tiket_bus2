<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/ikan.png">
    <title>Jadwal & Rute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/style3.css">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-1 bg-nav shadow-sm fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="">
                <img src="../image/logo-buss.png" alt="Buss Lightyear" width="42" height="42"
                    class="d-inline-block mt--2 me-2" />
                <span class="text-custom fs-4 fw-bolder">Busking</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-3 py-lg-1" id="navbarSupportedContent">
                <!-- Menu -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="jadwal&rute.php">Jadwal & Rute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="tiket.php">Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="tiket_saya.php">Tiket Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--informasi bus-->
    <div class="container mt-4">
        <h2 class="text-center mb-4 pt-5 fw-bold">Informasi Keberangkatan Bus</h2>

        <!-- Tabel Keberangkatan Bus -->
        <div class="table-container">
            <table class="table table-striped table-hover fixed-table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Rute</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Keberangkatan</th>
                        <th scope="col">Jam Kedatangan</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data lebih dari 10 baris -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Jakarta - Bandung</td>
                        <td>2024-10-30</td>
                        <td>08:00</td>
                        <td>12:00</td>
                        <td>Rp 100,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Bandung - Surabaya</td>
                        <td>2024-10-31</td>
                        <td>07:00</td>
                        <td>15:00</td>
                        <td>Rp 200,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jakarta - Yogyakarta</td>
                        <td>2024-11-01</td>
                        <td>09:00</td>
                        <td>19:00</td>
                        <td>Rp 150,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Surabaya - Bali</td>
                        <td>2024-11-02</td>
                        <td>06:00</td>
                        <td>14:00</td>
                        <td>Rp 250,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Bali - Jakarta</td>
                        <td>2024-11-03</td>
                        <td>05:00</td>
                        <td>22:00</td>
                        <td>Rp 300,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Jakarta - Semarang</td>
                        <td>2024-11-04</td>
                        <td>10:00</td>
                        <td>18:00</td>
                        <td>Rp 180,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Bandung - Malang</td>
                        <td>2024-11-05</td>
                        <td>07:30</td>
                        <td>19:30</td>
                        <td>Rp 220,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Semarang - Bali</td>
                        <td>2024-11-06</td>
                        <td>04:00</td>
                        <td>16:00</td>
                        <td>Rp 270,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Yogyakarta - Surabaya</td>
                        <td>2024-11-07</td>
                        <td>06:00</td>
                        <td>12:00</td>
                        <td>Rp 160,000</td>
                        <td>Tersedia</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Jakarta - Bogor</td>
                        <td>2024-11-08</td>
                        <td>08:30</td>
                        <td>09:30</td>
                        <td>Rp 50,000</td>
                        <td>Tersedia</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Informasi Supir dan Bus -->
        <div class="row mt-3">
            <!-- Daftar Supir -->
            <div class="col-md-6">
                <h5 class="text-center mb-4 pt-5 fw-bold">Daftar Supir yang Siap Berangkat</h5>
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama Supir</th>
                            <th scope="col">Kontak</th>
                            <th scope="col">Pengalaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Budi Santoso</td>
                            <td>+62 812 3456 7890</td>
                            <td>10 tahun</td>
                        </tr>
                        <tr>
                            <td>Andi Wijaya</td>
                            <td>+62 813 4567 8910</td>
                            <td>8 tahun</td>
                        </tr>
                        <tr>
                            <td>Surya Pratama</td>
                            <td>+62 814 5678 9101</td>
                            <td>5 tahun</td>
                        </tr>
                        <tr>
                            <td>Rudi Hartono</td>
                            <td>+62 815 6789 0123</td>
                            <td>12 tahun</td>
                        </tr>
                        <tr>
                            <td>Dewi Lestari</td>
                            <td>+62 816 7890 1234</td>
                            <td>6 tahun</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Informasi Bus -->
            <div class="col-md-6">
                <h5 class="text-center mb-4 pt-5 fw-bold">Informasi Bus</h5>
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Jenis Bus</th>
                            <th scope="col">Kapasitas</th>
                            <th scope="col">Kursi Kosong</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B 1234 XYZ</td>
                            <td>Eksekutif</td>
                            <td>10 kursi</td>
                        </tr>
                        <tr>
                            <td>D 4567 ABC</td>
                            <td>Bisnis</td>
                            <td>15 kursi</td>
                        </tr>
                        <tr>
                            <td>E 8910 DEF</td>
                            <td>Ekonomi</td>
                            <td>20 kursi</td>
                        </tr>
                        <tr>
                            <td>F 2345 GHI</td>
                            <td>Eksekutif</td>
                            <td>5 kursi</td>
                        </tr>
                        <tr>
                            <td>G 6789 JKL</td>
                            <td>Bisnis</td>
                            <td>12 kursi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>