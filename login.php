<?php
session_start();
require_once('./config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
      if ($row['username'] == $username && $row['password'] == $password) {
        $_SESSION['username'] = $username;
        header('location: index.php');
        exit();
      } else {
        header('location: login.php');
      }
    }
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
      <div class="card-title mt-3 ml-3">
        <h3>Login sebagai Admin</h3>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" />
          </div>

          <div class="form-group">
            <label for="passowrd">Password</label>
            <input type="password" name="password" class="form-control" />
          </div>

          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" />
            <label for="Ingat saya" class="form-check-label">Ingat Saya</label>
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

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