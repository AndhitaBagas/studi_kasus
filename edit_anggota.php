<?php
require_once('./config/connection.php');
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM anggota WHERE id_anggota='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE anggota 
            SET id_anggota='$id_anggota',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' 
            WHERE id_anggota='$id'";

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
                <b>Tambah Buku</b>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label for="Nama Buku">Nama Anggota</label>
                        <input type="text" placeholder="Masukkan Nama" class="form-control" name="nama_anggota" value=" <?php echo $row["nama"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Nama Penerbit">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value=" <?php echo $row["jenis_kelamin"] ?>">
                                <?php echo $row["jenis_kelamin"] ?>
                            </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Nama Penulis">Alamat</label>
                        <textarea name="alamat" rows="3" placeholder="Masukkan alamat" class="form-control">
                            <?php echo $row["alamat"] ?>
                        </textarea>
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