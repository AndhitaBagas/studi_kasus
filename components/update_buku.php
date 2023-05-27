<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Edit Data Barang</title>
</head>

<body>
    <?php
    include('conection.php');
    $id_buku = $_GET['id_buku'];
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id_buku'");

    while ($data = mysqli_fetch_array($query)) {
        $id_buku = $data['id_buku'];
        $nama_buku = $data['nama_buku'];
        $nama_penerbit = $data['nama_penerbit'];
        $nama_penulis = $data['nama_penulis'];
        $tahun_terbit = $data['tahun_terbit'];
    }
    ?>
    <form action="proses_update_buku.php?id_buku=<?php echo $id_buku; ?>" method="post">
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

</body>

</html>