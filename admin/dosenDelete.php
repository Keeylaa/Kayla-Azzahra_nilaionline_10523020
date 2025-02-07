<?php
include ('../koneksi/koneksi.php');

$nim=$_GET["nim"];
$delMhs     ="DELETE FROM dosen WHERE nip='$nip'";
$resultMhs =mysqli_query($koneksi,$delMhs);

if($resultMhs)
{
    echo"<script>alert('Data  Berhasil Dosen Dihapus') </script>";
    echo"<script type='text/javascript'>window.location ='mahasiswaView.php'</script>";
}
else
{
    echo"</script>alert('Data Dosen gagal Dihapus') </script>";
    echo"<script type='text/javascript'>window.location='mahasiswaView.php'</script>";
    
}
    ?>    