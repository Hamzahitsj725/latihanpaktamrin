<?php include "konekdb.php"; ?>
<?php 
    $id = $_GET['idpasien'];
    $sql = "SELECT * FROM pasien WHERE idpasien = $id";

     $result = $konek->query($sql);
     $row = $result->fetch_assoc();

    //  print_r($row);
    ?>

    <form action="delet.php" method="GET">
        <label for="">ID PASIEN</label>
        <input type="text" name = "idpasien" value="<?php echo $row['idpasien']; ?>">
        <br/>
        <label for="">Nama :</label>
        <input type="text" name="nmpasien" value = "<?php echo $row['nmpasien']; ?>">
        <br/>
        <label for="">Alamat :</label>
        <input type="text" name="alamat" value = "<?php echo $row['alamat']; ?>">
        <br/>
        <input type="submit" value="Hapus">
        

    </form>