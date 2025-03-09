<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center bg-primary text-white">
            <h2>Form Nilai Mahasiswa</h2>
        </div>
        <div class="card-body">
            <form method="post" action="hasil-nilai.php">
                
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                </div>

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM" required>
                </div>

                <div class="form-group">
                    <label for="rombel">Rombel</label>
                    <input type="text" name="rombel" class="form-control" id="rombel" placeholder="Masukkan Rombel" required>
                </div>

                <div class="form-group">
                    <label for="matkul">Mata Kuliah</label>
                    <select id="matkul" name="matkul" class="custom-select" required>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Statistika">Statistika</option>
                        <option value="UI/UX">UI/UX</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nilai_tugas">Nilai Tugas</label>
                    <input type="number" name="nilai_tugas" class="form-control" id="nilai_tugas" placeholder="Masukkan Nilai Tugas" required>
                </div>

                <div class="form-group">
                    <label for="nilai_uts">Nilai UTS</label>
                    <input type="number" name="nilai_uts" class="form-control" id="nilai_uts" placeholder="Masukkan Nilai UTS" required>
                </div>

                <div class="form-group">
                    <label for="nilai_uas">Nilai UAS</label>
                    <input type="number" name="nilai_uas" class="form-control" id="nilai_uas" placeholder="Masukkan Nilai UAS" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
