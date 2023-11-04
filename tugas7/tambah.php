<?php 
$conn = mysqli_connect("localhost","root","","tugas_7");

if(isset($_POST["submit"])){
    $kodebarang = $_POST["kodebarang"];
    $namabarang = $_POST["namabarang"];
    $gambar = $_POST["gambar"];
    $hargajual = $_POST["hargajual"];
    $stokbarang = $_POST["stokbarang"];
}

$query = "INSERT INTO tugas_7
    VALUES
    ('','$kodebarang','$namabarang','$gambar','$hargajual','$stokbarang')
    ";

    mysqli_query($conn, $query);    

?>







<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Tambah barang</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="kodebarang">Kode Barang :</label>
                <input type="text" name="kodebarang" id="kodebarang">
            </li>
            <li>
                <label for="namabarang">Nama Barang :</label>
                <input type="text" name="namabarang" id="namabarang">
            </li>
            <li>
                <label for="hargajual">Harga Jual :</label>
                <input type="text" name="hargajual" id="hargajual">
            </li>
            <li>
                <label for="stokbarang">Stok Barang :</label>
                <input type="text" name="stokbarang" id="stokbarang">
            </li>
            <li>
                <label for="gambar">Kode Barang :</label>
                <input type="text" name="gambar" id="gambar">
            </li>