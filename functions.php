<?php

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $ket = htmlspecialchars($data['ket']);
    $harga = htmlspecialchars($data['harga']);
    $jumlah = htmlspecialchars($data['jumlah']);

    $sql = "INSERT INTO produk 
                VALUES
            ('', '$nama', '$ket', '$harga', '$jumlah')
            ";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    $sql = "DELETE FROM produk WHERE id_produk = $id";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = $data['id_p'];
    $nama = htmlspecialchars($data['nama']);
    $ket = htmlspecialchars($data['ket']);
    $harga = htmlspecialchars($data['harga']);
    $jumlah = htmlspecialchars($data['jumlah']);

    $sql = "UPDATE produk SET
                nama_produk = '$nama',
                keterangan = '$ket',
                harga = $harga,
                jumlah = $jumlah
            WHERE id_produk = $id
            ";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);    
}