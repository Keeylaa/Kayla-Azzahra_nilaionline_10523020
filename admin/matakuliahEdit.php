<?php
include('../koneksi/koneksi.php');

// Mengambil NIM dari parameter GET
$getKode_matkul = $_GET["kode_matkul"];
$editMhs = "SELECT * FROM matakuliah WHERE kode_matkul = '$getKode_matkul'";
$resultMhs = mysqli_query($koneksi, $editMhs); // Gunakan mysqli_query, bukan mysql_query
$dataMhs = mysqli_fetch_array($resultMhs, MYSQLI_NUM); // Gunakan mysqli_fetch_array

?>
<h3>UBAH DATA MATAKULIAH</h3>
<br /><hr /><br />

<p>
<?php
if (!isset($_POST['submit'])) {
?>
    <form enctype="multipart/form-data" method="post">
        <table width="100%" border="0">
            <tr>
                <td width="27%">KODE_MATKUL</td>
                <td width="4%">:</td>
                <td width="69%">
                    <input type="text" name="kode_matkul" size="30" value="<?php echo $dataMhs[0]; ?>" readonly="readonly">
                </td>
            </tr>
            <tr>
                <td>NAMA_MATKUL</td>
                <td>:</td>
                <td>
                    <input name="nama_matkul" type="text" id="nama_matkul" size="30" value="<?php echo $dataMhs[1]; ?>" >
                </td>
            </tr>
            <tr>
                
                <td colspan="3" align="center">
                    <input id="submit" name="submit" type="submit" value="UBAH">
                </td>
            </tr>
        </table>
    </form>
<?php
} else {
    $kode_matkul = $_POST["kode_matkul"];
    $nama_matkul = $_POST["nama_matkul"];

    // Update data mahasiswa
    $updateMhs = "UPDATE matakuliah SET nama_matkul='$nama_matkul' WHERE kode_matkul='$kode_matkul'";
    $queryMhs = mysqli_query($koneksi, $updateMhs);

    if ($queryMhs) {
        echo "<script>alert('Data Berhasil Diubah!')</script>";
        echo "<script type='text/javascript'>window.location='matakuliahView.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!')</script>";
        echo "<script type='text/javascript'>window.location='matakuliahView.php'</script>";
    }
}
?>
<a href="./?adm=matakuliahView">&raquo; KEMBALI </a>
