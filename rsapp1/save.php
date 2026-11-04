<?php
    include "konekdb.php";

    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $alamat = $_POST['alamat'];

    $info = "Data sudah disimpan";
    if(isset($_POST['tambah'])){
        $sql = "INSERT INTO pasien (nmpasien, alamat) VALUES ('$nmpasien', '$alamat')";
    }
    if(isset($_POST['edit'])){
        $sql = "UPDATE pasien set nmpasien = '$nmpasien', alamat = '$alamat' where idpasien = '$idpasien'";
    }
    if(isset($_POST['hapus'])){
        $sql = "DELETE FROM pasien where idpasien = '$idpasien'";
        $info = "Data sudah diHAPUS";
    }

    $sukses = $konek->query($sql);
    if($sukses){
        echo $info;
    }else{
        echo "Data gagal disimpan/diHAPUS";
    }
?>
<p><a href="pasien.php">Data Pasien</a></p>