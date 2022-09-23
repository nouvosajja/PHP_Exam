<?php

    require "function.php";   
    $data = query("SELECT * FROM anggota");
    
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<?php 
    include("navbar.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center;">Data Kos</h1>
                <div class="card">
                    <div class="card-body">
                    <a type = "button" class="btn btn-primary float-end" href="tambah.php" role ="button">Tambah Data Baru</a>


    <table class="table table-success table-striped" style = "text-align: center;">
  
            <tr style="text-align: center;">
                <th><h4>No Kamar</h4></th>
                <th><h4>Nama</h4></th>
                <th><h4>Alamat</h4></th>
                <th><h4>Jurusan</h4></th>
                <th><h4>Tanggal Lahir</h4></th>
                <th><h4>foto</h4></th>
                <th><h4>Aksi</h4></th>
            </tr>
        </thead>
        <tbody style="text-align: center;"> 
            <?php 
            
            foreach($data as $kos) { ?>
                <tr>
                  
                    <th><?= $kos["No_Kamar"]; ?></li>
                    <th><?= $kos["Nama"]; ?></li>
                    <th><?= $kos["Alamat"]; ?></li>
                    <th><?= $kos["Jurusan"]; ?></li>
                    <th><?= $kos["Tanggal_Lahir"]; ?></li>
                    <th><img id="content-foto" class="visible" src="img/<?= $kos['Foto'] ?>" width="100" height="100" /></li>
                    <td>
                        <a type = "button" class="btn btn-info" href="detail.php"data-bs-toggle="modal" data-bs-target="#modalDetail<?= $kos["No_Kamar"]; ?>">  Detail</a>
                        <a type = "button" class="btn btn-warning" href="ubah.php?id=<?= $kos["No_Kamar"];?>">Ubah</a>
                        <a type = "button" class="btn btn-danger" href="hapus.php?id=<?= $kos["No_Kamar"];?>" onclick="return confirm('Yakin mau hapus?');">Hapus</a>
                        
                </tr>
                <div class="modal fade" id="modalDetail<?= $kos["No_Kamar"]; ?>" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalDetailLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="Nama" name="Nama" value="<?= $kos["Nama"]; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= $kos["Alamat"]; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="text" class="form-control" id="Jurusan" name="Jurusan" value="<?= $kos["Jurusan"]; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Tanggal_Lahir">Tanggal_Lahir</label>
                            <input type="text" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" value="<?= $kos["Tanggal_Lahir"]; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Foto">Foto</label>
                            <img style="width: 100%; height:50%"src="img/<?= $kos["Foto"]; ?>"alt="<?= $kos["Foto"]; ?>">
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
             <button type="button" class="btn btn-primary">Simpan</button>
         </div>
        </div>
      </div>
    </div>
        <?php 
        } 
        ?>
        </tbody>
    </table>
</body>
</html>