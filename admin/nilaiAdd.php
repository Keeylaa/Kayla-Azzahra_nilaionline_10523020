<?php
include('../koneksi/koneksi.php');
?>

<h3>TAMBAH DATA NILAI</h3>
<br />
<p>
<?php
if (isset($_POST['submit'])) {
    // Proses penyimpanan data di sini
}
?>
</p>

<form enctype="multipart/form-data" method="post">
    <table width="100%" border="0">
        <tr>
            <td height="50">NAMA MAHASISWA</td>
            <td>:</td>
            <td>
                <select name="mhs" class="form-control">
                    <option value="">-=PILIH=-</option>
                    <?php
                    $querymhs = "SELECT nim, nama FROM mahasiswa";
                    $resultmhs = mysqli_query($koneksi, $querymhs);
                    while ($datamhs = mysqli_fetch_array($resultmhs, MYSQLI_NUM)) {
                        echo "<option value='$datamhs[0]'>$datamhs[1]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td height="50">NAMA DOSEN</td>
            <td>:</td>
            <td>
                <select name="dosen" class="form-control">
                    <option value="">-=PILIH=-</option>
                    <?php
                    $querydosen = "SELECT nip, nama FROM dosen";
                    $resultdosen = mysqli_query($koneksi, $querydosen);
                    while ($datadosen = mysqli_fetch_array($resultdosen, MYSQLI_NUM)) {
                        echo "<option value='$datadosen[0]'>$datadosen[1]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NILAI TUGAS</td>
            <td>:</td>
            <td><input type="text" name="tugas" size="10" placeholder="TUGAS"></td>
        </tr>
        <tr>
            <td>NILAI UTS</td>
            <td>:</td>
            <td><input type="text" name="uts" size="10" placeholder="UTS"></td>
        </tr>
        <tr>
            <td>NILAI UAS</td>
            <td>:</td>
            <td><input type="text" name="uas" size="10" placeholder="UAS"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="submit" value="TAMBAH">
            </td>
        </tr>
    </table>
</form>
