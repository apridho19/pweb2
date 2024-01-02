<?php
// Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/BukuController.php';
require '../../index.php';

// Instansiasikan class database
$database = new database;
$db = $database->getKoneksi();

$bukuController = new BukuController($db);
$buku = $bukuController->getAllBuku();
?>

<div class="px-4">
<h3>Data Buku</h3>
<a class="btn btn-primary mb-2" href="tambah_bk">Tambah Buku</a>
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
foreach($buku as $z){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $z['judul'] ?></td>
    <td><?php echo $z['pengarang'] ?></td>
    <td><?php echo $z['tahun_terbit'] ?></td>
    <td><?php echo $z['harga'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_bk?judul=<?php echo $z['judul']; ?>">Edit</a>
        <a class="btn btn-danger" href="hapus_bk?judul=<?php echo $z['judul']; ?>" onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>