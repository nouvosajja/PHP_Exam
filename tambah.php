<?php
require  "function.php";
$koneksi = mysqli_connect("localhost", "root", "", "kos");
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
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
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
     table{
            
        }
        tr{
            /* border: 1px solid black; */
            padding: 10px;
        }
        th{
            /* border: 1px solid black; */
            padding: 10px;
        }
        img{
            width: 60px;
            /* border: 1px solid black; */
        }
  
</style>
<body>
    <?php
    include("navbar.php");
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>               
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 align="center">Tambah data baru</h3>
            <div class="card">
                <div class="card-body">
                    <label for="Nama">Nama</label>
                    <form action = "" method="post">    
                            <input type="text" class="form-control" id="Nama" name="Nama"  placeholder="Silahkan Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="No_Kamar">Nomer Kamar</label>
                            <input type="text" class="form-control" id="No_Kamar" name="No_Kamar"  placeholder="Silahkan Masukkan nomer kamar">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" id="Alamat" name="Alamat"  placeholder="Silahkan Masukkan Alamat">
                        </div>
                                   <form action="tambah.php" method="post">
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Silahkan Masukkan Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal_Lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="form-group">
                           <div class="form-group">
                            <label for="Foto">Foto</label>
                             <input type="text" class="form-control" id="Foto" name="Foto"  placeholder="Silahkan Masukkan Foto">
                        </div>
                        <button type="submit" class="btn btn-primary" name = "submit">Tambah</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>