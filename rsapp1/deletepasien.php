<?php
    include "konekdb.php";

    $idpasien = $_GET['idpasien'];
    $sql = "SELECT * FROM pasien WHERE idpasien = '$idpasien'";
    $result = $konek->query($sql);
    
    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
    
        
?>
        <form action="save.php" method="POST">
            <label for="">ID</label><br>
            <input type="text" name="idpasien" value="<?=$row['idpasien']; ?>" readonly><br>
            <label for="">Nama Pasien</label><br>
            <input type="text" name="nmpasien" value="<?=$row['nmpasien']; ?>" readonly><br>
            <label for="">Alamat</label><br>   
            <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"  readonly>
            <p><input type="submit" name="hapus" value="Hapus"></p>
        </form>
<?php
    } else {
        echo "Data tidak ada";
    }
?>