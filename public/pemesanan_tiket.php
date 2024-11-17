<?php
require '../config/db.php'; // Menyertakan file koneksi

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil dan menyanitasi input form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $kotaAsal = htmlspecialchars($_POST['kotaAsal']);
    $kotaTujuan = htmlspecialchars($_POST['kotaTujuan']);
    $tanggalKeberangkatan = htmlspecialchars($_POST['tanggalKeberangkatan']);
    $jumlahPenumpang = htmlspecialchars($_POST['jumlahPenumpang']);
    $metodePembayaran = htmlspecialchars($_POST['metodePembayaran']);

    // Menggunakan prepared statement untuk keamanan
    $sql = "INSERT INTO tickets (nama, email, telepon, kota_Asal, kota_Tujuan, tanggal_Keberangkatan, jumlah_Penumpang, metode_Pembayaran) 
            VALUES (:nama, :email, :telepon, :kotaAsal, :kotaTujuan, :tanggalKeberangkatan, :jumlahPenumpang, :metodePembayaran)";
    $stmt = $pdo->prepare($sql);

    // Bind parameter
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telepon', $telepon);
    $stmt->bindParam(':kotaAsal', $kotaAsal);
    $stmt->bindParam(':kotaTujuan', $kotaTujuan);
    $stmt->bindParam(':tanggalKeberangkatan', $tanggalKeberangkatan);
    $stmt->bindParam(':jumlahPenumpang', $jumlahPenumpang);
    $stmt->bindParam(':metodePembayaran', $metodePembayaran);

    if ($stmt->execute()) {
        echo "Tiket berhasil dipesan. <a href='tiket_saya.php'>Lihat Tiket Saya</a>";
    } else {
        echo "Error: Tidak dapat memesan tiket.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/ikan.png">
    <title>Pemesanan Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style4.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-1 bg-nav shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="../image/logo-buss.png" alt="Buss Lightyear" width="42" height="42"
                    class="d-inline-block mt--2 me-2" />
                <span class="text-body fs-4 fw-bolder">Busking</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-3 py-lg-1" id="navbarSupportedContent">
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

    <!-- Pemesanan Tiket -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 pt-5 fw-bold">Form Pemesanan Tiket Bus</h2>
        <form id="bookingForm" class="booking-form" method="POST" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon"
                    required>
            </div>
            <div class="mb-3">
                <label for="kotaAsal" class="form-label">Kota Asal</label>
                <input type="text" class="form-control" id="kotaAsal" name="kotaAsal" placeholder="Masukkan kota asal"
                    required>
            </div>
            <div class="mb-3">
                <label for="kotaTujuan" class="form-label">Kota Tujuan</label>
                <input type="text" class="form-control" id="kotaTujuan" name="kotaTujuan"
                    placeholder="Masukkan kota tujuan" required>
            </div>
            <div class="mb-3">
                <label for="tanggalKeberangkatan" class="form-label">Tanggal Keberangkatan</label>
                <input type="date" class="form-control" id="tanggalKeberangkatan" name="tanggalKeberangkatan" required>
            </div>
            <div class="mb-3">
                <label for="jumlahPenumpang" class="form-label">Jumlah Penumpang</label>
                <input type="number" class="form-control" id="jumlahPenumpang" name="jumlahPenumpang"
                    placeholder="Masukkan jumlah penumpang" required>
            </div>

            <!-- Metode Pembayaran -->
            <div class="mb-3">
                <label for="metodePembayaran" class="form-label">Pilih Metode Pembayaran</label>
                <select class="form-select" id="metodePembayaran" name="metodePembayaran" required>
                    <option value="">Pilih Metode</option>
                    <option value="credit_card">Kartu Kredit/Debit</option>
                    <option value="bank_transfer">Transfer Bank</option>
                    <option value="e_wallet">E-Wallet (OVO, GoPay, DANA)</option>
                </select>
            </div>

            <!-- Detail Pembayaran berdasarkan metode yang dipilih -->
            <div class="mb-3" id="paymentDetails" style="display: none;">
                <!-- Detail Kartu Kredit/Debit -->
                <div id="creditCardDetails" style="display: none;">
                    <label for="cardNumber" class="form-label">Nomor Kartu</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Masukkan nomor kartu">
                    <label for="expiryDate" class="form-label mt-2">Tanggal Kedaluwarsa</label>
                    <input type="month" class="form-control" id="expiryDate">
                    <label for="cvv" class="form-label mt-2">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="3 digit CVV">
                </div>

                <!-- Detail Transfer Bank -->
                <div id="bankTransferDetails" style="display: none;">
                    <p>Transfer ke rekening berikut:</p>
                    <ul>
                        <li>Bank Mandiri: 123-456-7890 a.n. Bus Transport</li>
                        <li>Bank BCA: 098-765-4321 a.n. Bus Transport</li>
                    </ul>
                </div>

                <!-- Detail E-Wallet -->
                <div id="eWalletDetails" style="display: none;">
                    <p>Pilih E-Wallet Anda dan scan QR Code untuk pembayaran:</p>
                    <ul>
                        <li>OVO</li>
                        <li>GoPay</li>
                        <li>DANA</li>
                    </ul>
                </div>
            </div>

            <!-- Tombol Pesan Sekarang di luar div paymentDetails -->
            <div class="mb-3" id="orderButton" style="display: none;">
                <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
            </div>

            <script src="../assets/js/pemesanan.js"></script>


</body>

</html>