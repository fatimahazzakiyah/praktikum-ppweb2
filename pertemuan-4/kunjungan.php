<?php
session_start();

// Simpan data ke session jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['namalengkap'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $timestamp = date("Y-m-d H:i:s");

    $new_entry = [
        'timestamp' => $timestamp,
        'namalengkap' => $nama,
        'email' => $email,
        'message' => $message
    ];

    $_SESSION['kunjungan'][] = $new_entry;
}

// Ambil data dari session
$kunjungan_list = $_SESSION['kunjungan'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <title>Daftar Kunjungan</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Kunjungan</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Timestamp</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($kunjungan_list)): ?>
                    <?php foreach ($kunjungan_list as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['timestamp']) ?></td>
                            <td><?= htmlspecialchars($row['namalengkap']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['message']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4" class="text-center">Belum ada data kunjungan</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Kembali ke Form</a>
    </div>
</body>
</html>