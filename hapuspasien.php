<h1>Hapus Pasien</h1>
<?php
    include "konekdb.php";

    $idpasien = $_POST['idpasien'];
    
    $sql = "DELETE FROM pasien where idpasien = '$idpasien'";

    $sukses = $konek->query($sql);
    if($sukses){
        echo "Data sudah diHAPUS";
    }else{
        echo "Data gagal diHAPUS";
    }
?>
<p><a href="index.php">Dasboard</a></p>