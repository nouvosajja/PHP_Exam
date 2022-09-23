<?php
$koneksi = mysqli_connect("localhost", "root", "", "kos");

function query($query){
    global $koneksi;  
    $result = mysqli_query($koneksi, $query); 
        while ( $row =  mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows; 
        }

        function tambah($data) {
            global $koneksi;
            $id = $data["No_Kamar"];
            $Nama = $data["Nama"];
            $Alamat = $data["Alamat"];
            $Jurusan = $data["Jurusan"];
            $Tanggal_Lahir = $data["Tanggal_Lahir"];
            $Foto = $data["Foto"];
            

            $query = "INSERT INTO anggota
            VALUES
            ('$id', '$Nama', '$Alamat', '$Jurusan', '$Tanggal_Lahir', '$Foto')";
            mysqli_query($koneksi, $query);

            return mysqli_affected_rows($koneksi);
        }
        function hapus ($id) {
            global $koneksi;
            mysqli_query($koneksi, "DELETE FROM anggota WHERE No_Kamar = $id");
            return mysqli_affected_rows($koneksi);
        }

        
        function ubah ($data) {
            global $koneksi;
            $No_Kamar = $data['No_Kamar'];    
            $Nama = $data['Nama'];    
            $Alamat = $data['Alamat'];    
            $Jurusan = $data['Jurusan'];    
            $Tanggal_Lahir = $data['Tanggal_Lahir'];
            $Foto = $data['Foto'];    
        
            $query = "UPDATE anggota SET 
                        No_Kamar = '$No_Kamar',x
                        Nama = '$Nama',
                        Alamat = '$Alamat',
                        Jurusan = '$Jurusan',
                        Tanggal_Lahir = '$Tanggal_Lahir',
                        Foto = '$Foto'
                        WHERE No_Kamar = '$No_Kamar'
            ";
        
            mysqli_query($koneksi, $query);
            
            return mysqli_affected_rows($koneksi);
        
        }
?>