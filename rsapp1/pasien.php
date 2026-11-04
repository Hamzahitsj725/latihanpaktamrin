<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pasien</title>
    <link rel="stylesheet" type="text/css" href="css/w3.css">
</head>
<body>
<?php include "konekdb.php"; ?>
<div class="w3-grid" style="grid-template-columns:150px 1fr">

  <div class="w3-container w3-light-grey">
   <h2>MENU</h2>
  </div>

  <div class="w3-container">
    <h2>DATA PASIEN</h2>
        <p><a href="tambahpasien.php" class="w3-button w3-green w3-round">Tambah Pasien</a></p>
        <table class="w3-table w3-bordered">
            <tr class="w3-green">
                <th>NO.</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>PROSES</th>
            </tr>

    <?php
        // <!-- koneksi didapat, lanjut dengan bikin query SELECT -->
        $sql = "SELECT * FROM pasien";
        $result = $konek->query($sql);
        if ($result->num_rows > 0) {
            // tampil data
            $nmr = 1;
            while($row = $result->fetch_assoc()) {
                // print_r($row);
                echo "
                <tr>
                <td align ='center'>$nmr</td>
                <td width='150'>$row[nmpasien]</td>
                <td>$row[alamat]</td>
                <td>
                    <a href=\"editpasien.php?idpasien=$row[idpasien]\" class=\"w3-button w3-green\">Edit</a>  <a href=\"deletepasien.php?idpasien=$row[idpasien]\" class=\"w3-button w3-red\">Hapus</a>
                </td>
                </tr>";
                $nmr = $nmr + 1;
                // echo "<br/>";
            }
        } else {
            echo "Data tidak ada";
        }        
        ?>
    </table>
    <p><a href="index.php" class="w3-button w3-blue">Dasboard</a></p>  

  </div>

</div>
</body>
</html>