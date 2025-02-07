<?php
include('../koneksi/koneksi.php');

// Mengambil NIM dari parameter GET
$getNim = $_GET["nim"];
$editMhs = "SELECT * FROM nilai WHERE nim = '$getNim'";
$resultMhs = mysqli_query($koneksi, $editMhs); // Gunakan mysqli_query, bukan mysql_query
$dataMhs = mysqli_fetch_array($resultMhs, MYSQLI_NUM); // Gunakan mysqli_fetch_array

?>
<h3>UBAH DATA NILAI</h3>
<br /><hr /><br />

<p>
<?php
if (!isset($_POST['submit'])) {
?>
    <form enctype="multipart/form-data" method="post">
        <table width="100%" border="0">
            <tr>
                <td width="27%">NIM</td>
                <td width="4%">:</td>
                <td width="69%">
                    <input type="text" name="nim" size="30" value="<?php echo $dataMhs[0]; ?>" readonly="readonly">
                </td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td>
                    <input name="nip" type="text" id="nip" size="30" value="<?php echo $dataMhs[1]; ?>" />
                </td>
            </tr>
            <tr>
                <td>nl_tugas</td>
                <td>:</td>
                <td>
                    <label>
                        <input type="radio" name="nl_tugas" value="80" <?php echo ($dataMhs[2] == "80") ? "checked" : ""; ?>>
                        Laki-Laki
                    </label>
                    <label>
                        <input type="radio" name="nl_tugas" value="70" <?php echo ($dataMhs[2] == "70") ? "checked" : ""; ?>>
                        Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td height="50">nl_uas</td>
                <td>:</td>
                <td>
                    <label>
                        <select name="jurusan" class="form-control">
                            <option value="<?php echo $dataMhs[3]; ?>"><?php echo $dataMhs[3]; ?></option>
                            <option value="">-=PILIH=-</option>
                            <option value="Sistem Informasi">SISTEM INFORMASI</option>
                            <option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
                            <option value="Teknik Komputer">TEKNIK KOMPUTER</option>
                        </select>
                    </label>
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
    $nim = $_POST["nl_tugas"];
    $nama = $_POST["nl_uas"];
    $jk = $_POST["nl-uts"];
    $jurusan = $_POST["nim"];
    $jurusan = $_POST["nip"];

    // Update data mahasiswa
    $updateMhs = "UPDATE mahasiswa SET nama='$nama', jk='$jk', jur='$jurusan' WHERE nim='$nim'";
    $queryMhs = mysqli_query($koneksi, $updateMhs);

    if ($queryMhs) {
        echo "<script>alert('Data Berhasil Diubah!')</script>";
        echo "<script type='text/javascript'>window.location='mahasiswaView.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!')</script>";
        echo "<script type='text/javascript'>window.location='mahasiswaView.php'</script>";
    }
}
?>
<a href="./?adm=mahasiswaView.php">&raquo; KEMBALI </a>
