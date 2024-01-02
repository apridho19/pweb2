<?php
//Memanggil class databse
include '../classes/database.php';
//Instansisasi class database
$db = new database;
?>

<?php
include 'header.php';
?>

<div class="px-5">
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-2" href="input_dsn.php">Tambah Dosen</a>
<br>
<table class="table">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($db->tampil_dosen() as $y){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $y['nidn'] ?></td>
    <td><?php echo $y['nama_dsn'] ?></td>
    <td><?php echo $y['prodi'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_dsn.php?nidn=<?php echo $y['nidn']; ?>&aksi=edit_dsn">Edit</a>
        <a class="btn btn-danger" href="proses_dsn.php?nidn=<?php echo $y['nidn']; ?>&aksi=hapus_dsn">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
