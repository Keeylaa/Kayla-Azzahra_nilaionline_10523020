<?php
include('../koneksi/koneksi.php');

// Mengambil NIM dari parameter GET
$getNip = $_GET["nip"];
$editMhs = "SELECT * FROM dosen WHERE nip = '$getNip'";
$resultMhs = mysqli_query($koneksi, $editMhs); // Gunakan mysqli_query, bukan mysql_query
$dataMhs = mysqli_fetch_array($resultMhs, MYSQLI_NUM); // Gunakan mysqli_fetch_array

?>
<h3>UBAH DATA DOSEN</h3>
<br /><hr /><br />

<?php
if (!isset($_POST['submit'])) {
?>
    <form enctype="multipart/form-data" method="post">
        <table width="100%" border="0">
            <tr>
                <td width="27%">NIP</td>
                <td width="4%">:</td>
                <td width="69%">
                    <input type="text" name="nip" size="30" placeholder="NIP">
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td>
                    <input name="nama" type="text" id="nama" size="30" placeholder="NAMA">
                </td>
            </tr>
            <tr>
                <td>KODE MATKUL</td>
                <td>:</td>
                <td>
                    <label>
                        <input type="radio" name="kode_matkul" value="MK002" id="RadioGroup1_0">
                        MK001
                    </label>
                    <label>
                        <input type="radio" name="kode_matkul" value="MK001" id="RadioGroup1_1">
                        MK002
                    </label>
                </td>
            </tr>
            <tr>
                
            <tr>
                <td>PASSWORD</td>
                <td>:</td>
                <td>
                    <input name="password" type="password" id="password" size="30" placeholder="PASSWORD">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input id="submit" name="submit" type="submit" value="TAMBAH">
                </td>
            </tr>
        </table>
    </form>
<?php
}

else 

{
    // Ambil data dari form
<?php
} else {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $kode_matkul = $_POST["kode matkul"];
    $password = $_POST["password"];

    // Update data mahasiswa
    $updateMhs = "UPDATE dosen SET nama='$nama', kode_matkul='$kode_matkul',password='$password' WHERE nip='$nip'";
    $queryMhs = mysqli_query($koneksi, $updateMhs);

    if ($queryMhs) {
        echo "<script>alert('Data Berhasil Diubah!')</script>";
        echo "<script type='text/javascript'>window.location='dosenView.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!')</script>";
        echo "<script type='text/javascript'>window.location='dosenView.php'</script>";
    }
}
?>
<a href="./?adm=dosenView.php">&raquo; KEMBALI </a>
