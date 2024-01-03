<?php
// Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/StokController.php';
require '../../index.php';

// Instansiasikan class database
$database = new database;
$db = $database->getKoneksi();

$stokController = new StokController($db);
$stok = $stokController->getAllStok();
?>

<div class="px-4" >
<h3>Stok Bawang</h3>
<a class="btn btn-primary mb-2" href="tambah_stok">Tambah Stok</a>
<br>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Jenis Bawang</th>
        <th>Jumlah Stok</th>
        <th>Tanggal Update</th>
        <th>Lokasi Penyimpanan</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($stok as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['jenis_bawang'] ?></td>
    <td><?php echo $x['jumlah_stok'] ?></td>
    <td><?php echo $x['tanggal_update'] ?></td>
    <td><?php echo $x['lokasi_penyimpanan'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_stok?id_stok=<?php echo $x['id_stok']; ?>">Edit</a>
        <a class="btn btn-danger" href="hapus_stok?id_stok=<?php echo $x['id_stok']; ?>" onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>