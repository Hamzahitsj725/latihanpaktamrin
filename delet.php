<?php
include "konekdb.php";
$idpasien = $_GET['idpasien'];
$sql = "DELETE FROM pasien WHERE idpasien = $idpasien";
if($konek->query($sql)){
    echo "Pasien berhasil dihapus";
}else{
    echo "Pasien gagal dihapus";
}
