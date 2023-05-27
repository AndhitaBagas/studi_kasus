<?php
$id_buku = $_GET['id_buku'];
$nama_buku = $_POST['nama_buku'];
$nama_penerbit = $_POST['nama_penerbit'];
$nama_penulis = $_POST['nama_penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$editing = $_POST['editing'];

include "connection.php";
$result = mysqli_query($conn, "UPDATE barang SET id_buku = $id_buku , nama_buku = '$nama_buku ', 
    nama_penerbit = '$nama_penerbit', nama_penulis = '$nama_penulis', tahun_terbit = '$tahun_terbit ', 
    editin='$editing' WHERE id_buku = '$id_buku';");

header("Location:index.php");
