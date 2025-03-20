<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Submission</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat Datang Di Perpustakaan STT-NF</h2>
        <p>Silahkan Isi Buku Tamu Dibawah Ini</p>
        <hr>
        <form method="post" action="kunjungan.php">
            <div class="form-group row">
                <label for="namalengkap" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                    <input id="namalengkap" name="namalengkap" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="email" name="email" type="email" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="message" class="col-4 col-form-label">Pesan</label> 
                <div class="col-8">
                    <textarea id="message" name="message" class="form-control" required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8 offset-4">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
