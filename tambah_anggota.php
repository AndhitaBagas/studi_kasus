<?php
require_once('./config/connection.php');
session_start();

if (!isset($_SESSION['username'])) {
  header('location: login.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama_anggota'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];

  $sql = "INSERT INTO anggota(nama, jenis_kelamin, alamat) VALUES ('$nama', '$jenis_kelamin', '$alamat')";

  if ($conn->query($sql) == TRUE) {
    header('location: anggota.php');
  } else {
    header('location: tambah_anggota.php');
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
        <b>Tambah Anggota</b>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="Nama Buku">Nama Anggota</label>
            <input type="text" placeholder="Masukkan Nama" class="form-control" name="nama_anggota">
          </div>

          <div class="form-group">
            <label for="Nama Penerbit">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
              <option value="-">Pilih Jenis Kelamin</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="Nama Penulis">Alamat</label>
            <textarea name="alamat" rows="3" placeholder="Masukkan alamat" class="form-control"></textarea>
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