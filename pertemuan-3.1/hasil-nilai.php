<?php
if (!isset($_POST['nama'])) {
    echo '<script>alert("Anda harus mengisi form terlebih dahulu!")</script>';
    echo '<meta http-equiv="refresh" content="0; url=formnilai.php">';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center bg-primary text-white">
            <h2>Hasil Nilai Mahasiswa</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td><?= $_POST['nama'] ?></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td><?= $_POST['nim'] ?></td>
                </tr>
                <tr>
                    <th>Rombel</th>
                    <td><?= $_POST['rombel'] ?></td>
                </tr>
                <tr>
                    <th>Mata Kuliah</th>
                    <td><?= $_POST['matkul'] ?></td>
                </tr>
                <tr>
                    <th>Nilai Tugas</th>
                    <td><?= $_POST['nilai_tugas'] ?></td>
                </tr>
                <tr>
                    <th>Nilai UTS</th>
                    <td><?= $_POST['nilai_uts'] ?></td>
                </tr>
                <tr>
                    <th>Nilai UAS</th>
                    <td><?= $_POST['nilai_uas'] ?></td>
                </tr>
                <tr class="table-info">
                    <th>Nilai Akhir</th>
                    <td>
                        <?php
                        $tugas = $_POST['nilai_tugas'] * (35/100);
                        $uts = $_POST['nilai_uts'] * (30/100);
                        $uas = $_POST['nilai_uas'] * (35/100);
                        $total = $tugas + $uts + $uas;
                        echo number_format($total, 2);
                        ?>
                    </td>
                </tr>
                <tr class="table-warning">
                    <th>Predikat</th>
                    <td>
                        <?php
                        if ($total <= 35) {
                            $pred = "E";
                        } elseif ($total <= 55) {
                            $pred = "D";
                        } elseif ($total <= 69) {
                            $pred = "C";
                        } elseif ($total <= 84) {
                            $pred = "B";
                        } else {
                            $pred = "A";
                        }
                        echo $pred;
                        ?>
                    </td>
                </tr>
                <tr class="table-success">
                    <th>Keterangan</th>
                    <td>
                        <?php
                        switch ($pred) {
                            case 'A':
                                echo "Sangat Baik";
                                break;
                            case 'B':
                                echo "Baik";
                                break;
                            case 'C':
                                echo "Cukup";
                                break;
                            case 'D':
                                echo "Kurang";
                                break;
                            case 'E':
                                echo "Sangat Kurang";
                                break;
                            default:
                                echo "Tidak Diketahui";
                                break;
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer text-center">
            <a href="formnilai.php" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>

</body>
</html>
