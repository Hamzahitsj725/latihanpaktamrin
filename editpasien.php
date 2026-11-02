<?php $idpasien = $_GET['idpasien']; ?>
<?php include "konekdb.php"; ?>
<?php
    $sql = "SELECT * FROM pasien WHERE idpasien = '$idpasien'";
    $result = $konek->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ada";
    }
?>
<form action="">
<label for="">ID</label><br>
<input type="text" name="idpasien" value="<?php echo $row['idpasien']; ?>" readonly><br>
    <label for="">Nama Pasien</label><br>
    <input type="text" name="nmpasien" value="<?php echo $row['nmpasien']; ?>"><br>
    <label for="">Alamat</label><br>   
    <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>">
    <p><input type="submit" value="Update"></p>
</form>
