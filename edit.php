<?php 
include 'koneksi.php';
include 'functions.php';

$id = @$_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if ( isset($_POST["submit"]) ) {

    if ( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil di perbaharui');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal di perbaharui "+ var_dump(sql); +"');
                document.location.href = 'index.php';
            </script>
        ";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>
<body>
    <div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active disabled">Edit Data</a>
        </li>
    </ul>
        <h1 class="text-center py-3">Edit Data Produk</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id_p" value="<?= $produk['id_produk'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nama">Nama Produk</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $produk['nama_produk'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="ket">Keterangan</label>
                <input type="text" class="form-control" name="ket" id="ket" value="<?= $produk['keterangan'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" value="<?= $produk['harga'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jumlah">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" value="<?= $produk['jumlah'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary col-12" name="submit">Edit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>