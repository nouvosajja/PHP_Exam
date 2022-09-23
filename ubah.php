<?php
require "function.php";

$id = $_GET["id"];
$datasiswa = query("SELECT * FROM anggota WHERE No_Kamar = $id")[0];


if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            border-radius: 1em;
            overflow: hidden;
        }
        th, td {
            text-align: center;
        }
        td img {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php 
        include("navbar.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-weight-bold text-center">Data Kos</h1>
                <div class="card">
                    <div class="card-body">
                        <!-- form action -->
                        <form action="" method="post">
                            <input type="hidden" name="No_Kamar" id="No_kamar" value="<?= $datasiswa['No_Kamar']; ?>">
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama" value="<?= $datasiswa['Nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="No_kamar">No_kamar</label>
                                <input type="text" class="form-control" id="No_Kamar" name="No_Kamar" placeholder="Masukkan Alamat" value="<?= $datasiswa['No_Kamar'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Masukkan Alamat" value="<?= $datasiswa['Alamat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Masukkan Jurusan" value="<?= $datasiswa['Jurusan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Tanggal_Lahir">Tanggal_Lahir</label>
                                <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" placeholder="Masukkan Tanggal_Lahir" value="<?= $datasiswa['Tanggal_Lahir'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Foto">Foto</label>
                                <input type="text" class="form-control" id="Foto" name="Foto" placeholder="Masukkan Foto" value="<?= $datasiswa['Foto'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>