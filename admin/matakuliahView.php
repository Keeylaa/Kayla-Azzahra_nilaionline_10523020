<?php
include "../koneksi/koneksi.php";

$queryMhs       ="SELECT * FROM matakuliah";
$resultMhs      = mysqli_query ($koneksi, $queryMhs);
$countMhs       = mysqli_num_rows ($resultMhs);
?>

<h3> DATA MAHASISWA </h3>
<hr/><br />
<a href="./?adm=matakuliahAdd"><input name="add" type="submit" class="buttonadm" value="TAMBAH DATA MATAKULIAH"/></a>
<br>
<br>
<table border="1">
    <!--TABEL MASTER MAHASISWA -->
    <tr>
        <th>kode_matkul</th>
        <th>nama_matkul</th>
        <th>AKSI</th>
    </tr>
    <?php
    if ($countMhs > 0)
    {
        while($dataMhs=mysqli_fetch_array ($resultMhs, MYSQLI_NUM) )
        {
    ?>
    <tr class="add">
    <td class="value"><?php echo"$dataMhs[0]"; ?></td>
    <td class="value"><?php echo"$dataMhs[1]"; ?></td>
    <td class="value">
        <a href="matakuliahEdit.php?kode_matkul=<?php echo"$dataMhs[0]"; ?>">EDIT</a> |
        <a href="matakuliahDelete.php?kode_matkul=<?php echo"$dataMhs[0]"; ?>">DELETE</a>
    </td>
    <tr>
    </tr>

<?php
}

    }else{
        echo"<tr>
    <td colspan='9' align='center' height='20'
    <diy> Belum Ada Data Matakuliah</diy></td>
    </tr>";

}

echo"</table>";


