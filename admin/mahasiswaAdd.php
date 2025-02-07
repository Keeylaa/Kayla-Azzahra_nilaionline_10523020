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
                <td width="27%">NIM</td>
                <td width="4%">:</td>
                <td width="69%">
                    <input type="text" name="nim" size="30" placeholder="NIM">
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
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td>
                    <label>
                        <input type="radio" name="jk" value="Laki-Laki" id="RadioGroup1_0">
                        Laki-Laki
                    </label>
                    <label>
                        <input type="radio" name="jk" value="Perempuan" id="RadioGroup1_1">
                        Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td height="50">JURUSAN</td>
                <td>:</td>
                <td>
                    <select name="jurusan">
                        <option value="">-PILIH=-</option>
                        <option value="Sistem Informasi">SISTEM INFORMASI</option>
                        <option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
                        <option value="Teknik Komputer">TEKNIK KOMPUTER</option>
                    </select>
                </td>
            </tr>
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
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $jurusan = $_POST["jurusan"];
    $password = md5($_POST["password"]); // Hash password dengan MD5

    // Input data mahasiswa
    $insertMhs = "INSERT INTO mahasiswa (nim, nama, jk, jur, password) VALUES ('$nim', '$nama', '$jk', '$jurusan', '$password')";
    $queryMhs = mysqli_query($koneksi, $insertMhs);

    if ($queryMhs) {
        echo "<script>alert('Data Berhasil Disimpan!')</script>";
        echo "<script type='text/javascript'>window.location = 'mahasiswaView.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan!')</script>";
        echo "<script type='text/javascript'>window.location = 'mahasiswaView.php'</script>";
    }
}
?>
<a href="./?adm=ssmahasiswaView.php">&raquo; KEMBALI </a>
