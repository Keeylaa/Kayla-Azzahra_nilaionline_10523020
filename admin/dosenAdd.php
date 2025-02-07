<?php
include('../koneksi/koneksi.php');
?>

<h3>TAMBAH DATA MAHASISWA</h3>
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
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $kode_matkul = $_POST["kode_matkul"];
    $password = md5($_POST["password"]); // Hash password dengan MD5

    // Input data mahasiswa
    $insertMhs = "INSERT INTO dosen (nip, nama, kode_matkul, password) VALUES ('$nip', '$nama', '$kode_matkul', '$password')";
    $queryMhs = mysqli_query($koneksi, $insertMhs);

    if ($queryMhs) {
        echo "<script>alert('Data Berhasil Disimpan!')</script>";
        echo "<script type='text/javascript'>window.location = 'dosenView.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan!')</script>";
        echo "<script type='text/javascript'>window.location = 'dosenView.php'</script>";
    }
}
?>
<a href="./?adm=dosenView">&raquo; KEMBALI </a>
