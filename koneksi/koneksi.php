<?php
$host               ="localhost";
$username           ="root";
$password           ="";
$nama_db            ="nilai online";

//mulai koneksi ke mysql
$koneksi= mysqli_connect($host, $username, $password, $nama_db) or die("koneksi mysql gagal!");
?>