<?php
include ('../koneksi/koneksi.php');

$nim=$_GET["nl_tugas,nl_uas,nl_uts,nim,nip"];
$delMhs     ="DELETE FROM nilai WHERE nim='$nim'";
$resultMhs =mysqli_query($koneksi,$delMhs);

if($resultMhs)
{
    echo"<script>alert('Data Mahasiswa Berhasil Dihapus') </script>";
    echo"<script type='text/javascript'>window.location ='mahasiswaView.php'</script>";
}
else
{
    echo"</script>alert('Data Mahasiswa gagal Dihapus') </script>";
    echo"<script type='text/javascript'>window.location='mahasiswaView.php'</script>";
    
}
    ?>    