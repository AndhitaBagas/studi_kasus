<?php

require_once('./config/connection.php');

$tabel = $_GET['tabel'];
$id = $_GET['id'];


if ($tabel == 'buku') {
    $sql = "DELETE FROM $tabel WHERE id_buku ='$id' ";
    $result = $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        header('location: katalog.php');
    }
} else if ($tabel == 'anggota') {
    $sql = "DELETE FROM $tabel WHERE id_anggota ='$id' ";
    $result = $conn->query($sql);

    if ($conn->query($sql) == TRUE) {
        header('location: anggota.php');
    }
} else if ($tabel == 'peminjaman') {
    $sql = "DELETE FROM $tabel WHERE id_peminjaman ='$id' ";
    $result = $conn->query($sql);

    if ($conn->query($sql) == TRUE) {
        header('location: peminjaman.php');
    }
} else {
    header('location: index.php');
}




// var_dump($_GET['buku']);
