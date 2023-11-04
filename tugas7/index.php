<?php
require 'function.php';

$brg = query("SELECT * FROM tokojosi");
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>DAFTAR BARANG</h1>

    <a href="tambah.php"></a>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>

        </tr>
</body>

