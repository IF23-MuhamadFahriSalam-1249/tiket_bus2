<!-- <?php
require '../config/db.php';

$stmt = $pdo->query("SELECT * FROM tickets");
$tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tiket</title>
</head>

<body>
    <h1>Tiket</h1>
    <a href="create_ticket.php">Buat Tiket Baru</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Kota Asal</th>
            <th>Kota Tujuan</th>
            <th>Tanggal Keberangkatan</th>
            <th>Jumlah Penumpang</th>
            <th>Metode Pembayaran</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($tickets as $ticket): ?>
        <tr>
            <td><?= $ticket['id'] ?></td>
            <td><?= $ticket['nama'] ?></td>
            <td><?= $ticket['email'] ?></td>
            <td><?= $ticket['telepon'] ?></td>
            <td><?= $ticket['kota_asal'] ?></td>
            <td><?= $ticket['kota_tujuan'] ?></td>
            <td><?= $ticket['tanggal_keberangkatan'] ?></td>
            <td><?= $ticket['jumlah_penumpang'] ?></td>
            <td><?= $ticket['metode_pembayaran'] ?></td>
            <td><?= $ticket['status'] ?></td>
            <td>
                <a href="update.php?id=<?= $ticket['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $ticket['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body> -->