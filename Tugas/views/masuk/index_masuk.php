<?php
// Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MasukController.php';
require '../../index.php';

// Instansiasikan class database
$database = new database;
$db = $database->getKoneksi();

$masukController = new MasukController($db);
$masuk = $masukController->getAllMasuk();
?>

<div class="px-4" >
<h3>Data Bawang Masuk</h3>
<a class="btn btn-primary mb-2" href="tambah_masuk">Tambah Data</a>
<br>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Jenis Bawang</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($masuk as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['jenis_bawang'] ?></td>
    <td><?php echo $x['jumlah'] ?></td>
    <td><?php echo $x['tanggal'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_masuk?id_masuk=<?php echo $x['id_masuk']; ?>">Edit</a>
        <a class="btn btn-danger" href="hapus_masuk?id_masuk=<?php echo $x['id_masuk']; ?>" onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>