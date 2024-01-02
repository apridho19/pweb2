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
<h3>Data Mahasiswa</h3>
<a class="btn btn-primary mb-2" href="input_mhs.php">Tambah Mahasiswa</a>
<br>
<table class="table">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($db->tampil_mahasiswa() as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['npm'] ?></td>
    <td><?php echo $x['nama'] ?></td>
    <td><?php echo $x['alamat'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_mhs.php?npm=<?php echo $x['npm']; ?>&aksi=edit">Edit</a>
        <a class="btn btn-danger" href="proses_mhs.php?npm=<?php echo $x['npm']; ?>&aksi=hapus">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>