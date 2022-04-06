<?php 
include 'koneksi.php';
include 'functions.php';

if ( isset($_POST["submit"]) ) {

    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal ditambahkan');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah Data</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active disabled">Tambah Data</a>
        </li>
    </ul>
    </nav>
        <h1 class="text-center py-3">Tambah Data Produk</h1>
        <form action="" method="POST">
        <div class="mb-3">
            <label class="form-label" for="nama">Nama Produk</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="ket">Keterangan</label>
            <input type="text" class="form-control" name="ket" id="ket">
        </div>
        <div class="mb-3">
            <label class="form-label" for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" id="harga" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="jumlah">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" required>
        </div>
        <button type="submit" class="btn btn-primary col-12" name="submit">Submit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>