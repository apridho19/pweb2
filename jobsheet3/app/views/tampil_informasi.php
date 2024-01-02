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
<h3>Data Buku</h3>
<a class="btn btn-success mb-2" href="input_buku.php">Tambah Buku</a>
<br>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($db->tampil_buku() as $z){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $z['judul'] ?></td>
    <td><?php echo $z['pengarang'] ?></td>
    <td><?php echo $z['tahun_terbit'] ?></td>
    <td><?php echo $z['harga'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_buku.php?judul=<?php echo $z['judul']; ?>&aksi=edit_buku">Edit</a>
        <a class="btn btn-danger" href="proses_buku.php?judul=<?php echo $z['judul']; ?>&aksi=hapus_buku">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>