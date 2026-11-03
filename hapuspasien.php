<?php
    include "konekdb.php";

    $idpasien = $_POST['idpasien'];
    
    $sql = "DELETE FROM pasien where idpasien = '$idpasien'";
    $sql = "UPDATE pasien set nmpasien = '$nmpasien', alamat = '$alamat' where idpasien = '$idpasien'";
    $sql = "INSERT INTO pasien (nmpasien, alamat) VALUES ('$nmpasien', '$alamat')";


    $sukses = $konek->query($sql);
    if($sukses){
        echo "Data sudah diHAPUS";
    }else{
        echo "Data gagal diHAPUS";
    }
?>
<p><a href="index.php">Dasboard</a></p>