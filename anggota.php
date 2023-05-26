<?php
require_once('./config/connection.php');
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION)) {
  header('location: login.php');
}

$sql = "SELECT * FROM anggota";
$result = $conn->query($sql);
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
    <div class="float-right">
      <a href="./tambah_anggota.php" class="btn btn-primary">Tambah Anggota</a>
    </div>
    <h1>Anggota Perpustakaan</h1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id Anggota</th>
          <th scope="col">Nama Anggota</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <th scope="row"><?php echo $row['id_anggota'] ?></th>
              <td><?php echo $row['nama'] ?></td>
              <td><?php echo $row['jenis_kelamin'] ?></td>
              <td><?php echo $row['alamat'] ?></td>
            </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  <footer class="text-center text-white" style="background-color: 	#343A40;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-white bg-dark" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-white bg-dark" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-white bg-dark" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-white bg-dark" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-white bg-dark" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
        <!-- Github -->
        <a class="btn btn-link btn-floating btn-lg text-white bg-dark" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-white bg-dark" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white bg-dark" href="https://mdbootstrap.com/">Andhita Bagas</a>
    </div>
    <!-- Copyright -->
  </footer>
  <?php include('./components/script.php') ?>
</body>

</html>