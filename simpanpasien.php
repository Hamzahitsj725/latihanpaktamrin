<h1>Simpan Pasien</h1>
<?php
    include "konekdb.php";

    $nmpasien = $_POST['nmpasien'];
    $alamat = $_POST['alamat'];
    $idpasien = $_POST['idpasien'];
    
    $sql = "UPDATE pasien set nmpasien = '$nmpasien', alamat = '$alamat' where idpasien = '$idpasien'";

    $sukses = $konek->query($sql);
    if($sukses){
        echo "Data sudah disimpan";
    }else{
        echo "Data gagal disimpan";
    }
?>
<p><a href="index.php">Dasboard</a></p>