<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "puskesmasdb";

// Create connection
$konek = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($konek->connect_error) {
  die("Koneksi Gagal, Nomor Error" . $conn->connect_error);
}
// echo "Bro, Koneksi berhasil";
?>