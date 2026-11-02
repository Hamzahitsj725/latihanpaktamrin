<!-- buat koneksi ke database pasiendb -->
<?php include "konekdb.php"; ?>
    <h1>DATA PASIEN</h1>
    
    <!-- kalau querynya sukses, tampilkan data/cetak -->
    <!-- w3school -->
    
    <table border = 1>
        <tr>
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
                <a href=\"editpasien.php?idpasien=$row[idpasien]\">Edit</a> | <a href=\"deletpasien.php?idpasien=$row[idpasien]\">Hapus</a>
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
<p><a href="index.php">Dasboard</a></p>