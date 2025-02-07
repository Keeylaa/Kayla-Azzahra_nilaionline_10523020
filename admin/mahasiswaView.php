<?php
include "../koneksi/koneksi.php";

$queryMhs       ="SELECT * FROM mahasiswa";
$resultMhs      = mysqli_query ($koneksi, $queryMhs);
$countMhs       = mysqli_num_rows ($resultMhs);
?>

<h3 align="center">DATA MAHASISWA</h3>
<hr/><br />
<a href="./?adm=mahasiswaAdd"><input name="add" type="submit" class="buttonadm" value="TAMBAH DATA MAHASISWA"/></a>
<br>
<br>
<table border="1">
    <!--TABEL MASTER MAHASISWA -->
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>JURUSAN</th>
        <th>PASSWORD</th>
        <th>AKSI</th>
    </tr>
    <?php
    if ($countMhs > 0)
    {
        while ($dataMhs=mysqli_fetch_array ($resultMhs, MYSQLI_NUM) )
        {
    ?>
    <tr class="add">
    <td class="value"><?php echo"$dataMhs[0]"; ?></td>
    <td class="value"><?php echo"$dataMhs[1]"; ?></td>
    <td class="value"><?php echo"$dataMhs[2]"; ?></td>
    <td class="value"><?php echo"$dataMhs[3]"; ?></td>
    <td class="value"><?php echo"$dataMhs[4]"; ?></td>
    <td class="value">
        <a href="./?adm=mahasiswaEdit?nim=<?php echo"$dataMhs[0]"; ?>">EDIT</a> |
        <a href="./?adm=mahasiswaEdit?nim=<?php echo"$dataMhs[0]"; ?>">DELETE</a>
    </td>
    <tr>
    </tr>

<?php
}

    }else{

        echo"<tr>
    <td colspan='9' align='center' height='20'
    <diy> Belum Ada Data Mahasiswa</diy></td>
    </tr>";

}
?>
</table>


