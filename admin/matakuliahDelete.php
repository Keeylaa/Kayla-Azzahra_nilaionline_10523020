<?php
include ('../koneksi/koneksi.php');

$nim=$_GET["kode_matkul"];
$delMhs     ="DELETE FROM matakuliah WHERE kode_matkul='$nim'";
$resultMhs =mysqli_query($koneksi,$delMhs);

if($resultMhs)
{
    echo"<script>alert('Data Mahasiswa Berhasil Dihapus') </script>";
    echo"<script type='text/javascript'>window.location ='matakuliahView.php'</script>";
}
else
{
    echo"</script>alert('Data Mahasiswa gagal Dihapus') </script>";
    echo"<script type='text/javascript'>window.location='matakuliahView.php'</script>";
    
}
    ?>    