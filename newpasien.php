<?php
    include "konekdb.php";

    $nmpasien = $_GET['nmpasien'];
    $alamat = $_GET['alamat'];
    // $idpasien = $_POST['idpasien'];
    
    $sql = "INSERT INTO pasien (nmpasien, alamat) VALUES ('$nmpasien', '$alamat')";

    $sukses = $konek->query($sql);
    if($sukses){
        echo "Data sudah disimpan";
    }else{
        echo "Data gagal disimpan";
    }
?>
<p><a href="index.php">Dasboard</a></p>