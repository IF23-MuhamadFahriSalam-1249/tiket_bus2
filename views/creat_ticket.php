<!-- <?php
    require '../config/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $kota_asal = $_POST['kota_asal'];
        $kota_tujuan = $_POST['kota_tujuan'];
        $tanggal_keberangkatan = $_POST['tanggal_keberangtan'];
        $jumlah_penumpang = $_POST['jumlah_penumpang'];
        $metode_pembayaran = $_POST['metode_pembayaran'];

        $stmt = $pdo->prepare("INSERT INTO tickets (nama, email, telepon, kota_asal, kota_tujuan, tanggal_keberangkatan, jumlah_penumpang, metode_pembayaran) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nama, $email, $telepon, $kota_asal, $kota_tujuan, $tanggal_keberangkatan, $jumlah_penumpang, $metode_pembayaran]);

        header("Location: views/read_ticket.php");
        exit();
    }
?> -->