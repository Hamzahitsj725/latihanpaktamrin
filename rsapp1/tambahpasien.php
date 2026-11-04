<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entri Data Pasien</title>
    <link rel="stylesheet" type="text/css" href="css/w3.css">
</head>
<body>
<div class="w3-content">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">X</span>

              <p>
                <form action="save.php" method="POST">
                    <input type="hidden" name="idpasien" value="">
                    <p>
                        <label for="">Nama Pasien</label><br>
                        <input class="w3-input" type="text" name="nmpasien" value="">
                    </p>
                    <p>
                        <label for="">Alamat</label><br>   
                        <input class="w3-input" type="text" name="alamat" value="">
                        
                    </p>
                    <p>
                                                <input class="w3-button w3-green" type="submit" name="tambah" value="Simpan">

                    </p>
              </p>


        </div>
      </div>
    </div>


    <div class="w3-card-4">

        <header class="w3-container w3-blue">
            <h2>Entri Data Pasien</h2>
        </header>

        <div class="w3-container">
        </div>

        <footer class="w3-container w3-light-grey">
            <br>
                <a href="pasien.php" class="w3-button w3-green">Lihat Data Pasien</a>

                <br><br>
            <!-- <p>Updated today</p> -->
        </footer>
                </form>

    </div>
</div>
</body>
</html>