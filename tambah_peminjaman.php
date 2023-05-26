<?php
require_once('./config/connection.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id_anggota = $_POST['id_anggota'];
  $id_buku = $_POST['id_buku'];
  $tanggal_pinjam = $_POST['tanggal_pinjam'];
  $tanggal_kembali = $_POST['tanggal_kembali'];

  $sql = "INSERT INTO peminjaman(id_anggota, id_buku, tanggal_pinjam, tanggal_kembali) VALUES ('$id_anggota', '$id_buku', '$tanggal_pinjam', '$tanggal_kembali')";

  if ($conn->query($sql) == TRUE) {
    header('location: peminjaman.php');
  } else {
    header('location: tambah_peminjaman.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./node_modules/admin-lte/dist/css/adminlte.min.css" />
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <title>E-Library</title>
</head>

<body>
  <?php include('./components/navbar.php') ?>

  <?php include('./components/sidebar.php') ?>


  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <b>Tambah Buku</b>
      </div>
      <div class="card-body">
        <form method="post">

          <div class="form-group">
            <label for="Nama Buku">ID Anggota</label>
            <input type="text" class="form-control" name="id_anggota">
          </div>

          <div class="form-group">
            <label for="Nama Penerbit">ID Buku</label>
            <input type="text" class="form-control" name="id_buku">
          </div>

          <div class="form-group">
            <label for="Nama Penulis">Tanggal Peminjaman</label>
            <input type="date" class="form-control" name="tanggal_pinjam">
          </div>

          <div class="form-group">
            <label for="Tahun Terbit">Tanggal Pengembalian</label>
            <input type="date" class="form-control" name="tanggal_kembali">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('./components/script.php') ?>
</body>

</html>