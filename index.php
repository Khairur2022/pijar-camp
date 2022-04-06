<?php 
include 'koneksi.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Khairur Rozi</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
	// Activate tooltips
	$('[data-toggle="tooltip"]').tooltip();
    
	// Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
});
</script>
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
        </ul>
        <h1 class="text-center py-3">Daftar Produk</h1>
        <div class="row justify-content-between py-3">
            <div class="col-4">
            <label><a href="tambah.php" class="btn btn-primary">Tambah Data Produk </a></label>
            </div>
            <div class="col-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Search</span>
                <input type="text" id="search" class="form-control" placeholder="Search berdasarkan Nama Produk">
            </div>
            </div>
        </div>        
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1; 
            $sql = query("SELECT * FROM produk");
            foreach ($sql as $produk ) : 
            ?>
            <tr>
            <th scope="row"><?=$i?></th>
            <td><?=$produk['nama_produk']?></td>
            <td><?=$produk['keterangan']?></td>
            <td><?=$produk['harga']?></td>
            <td><?=$produk['jumlah']?></td>
            <td>
                <a href="edit.php?id=<?=$produk['id_produk'];?>" class="btn btn-outline-primary btn-sm">Edit</a>  &nbsp;
                <a href="hapus.php?id=<?=$produk['id_produk'];?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin menghapus data ?');">Hapus</a>
            </td>
            </tr>
            <?php 
            $i++;
            endforeach;
            ?>
        </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>