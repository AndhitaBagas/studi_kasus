<?php
require_once('./config/connection.php');
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE id_buku='$id'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $nama_penulis = $_POST['nama_penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "UPDATE buku 
            SET id_buku='$id_buku',nama_buku='$nama_buku',nama_penerbit='$nama_penerbit',nama_penulis='$nama_penulis',tahun_terbit='$tahun_terbit' 
            WHERE id_buku='$id'";

    if ($conn->query($sql) == TRUE) {
        header('location: katalog.php');
    } else {
        header('location: tambah_katalog.php');
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
                        <label for="Nama Buku">Id Buku</label>
                        <input type="text" class="form-control" name="id_buku" value="<?php echo $row["id_buku"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Nama Buku">Nama Buku</label>
                        <input type="text" class="form-control" name="nama_buku" value="<?php echo $row["nama_buku"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Nama Penerbit">Nama Penerbit</label>
                        <input type="text" class="form-control" name="nama_penerbit" value="<?php echo $row["nama_penerbit"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Nama Penulis">Nama Penulis</label>
                        <input type="text" class="form-control" name="nama_penulis" value="<?php echo $row["nama_penulis"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Tahun Terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit" value="<?php echo $row["tahun_terbit"] ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include('./components/script.php') ?>
</body>

</html>