<?php
// Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

// Instansiasikan class database
$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>

<div class="px-5">
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-2" href="tambah_dosen">Tambah Dosen</a>
<br>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($dosen as $y){
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $y['nidn'] ?></td>
    <td><?php echo $y['nama_dsn'] ?></td>
    <td><?php echo $y['prodi'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_dosen?nidn=<?php echo $y['nidn']; ?>">Edit</a>
        <a class="btn btn-danger" href="hapus_dosen?nidn=<?php echo $y['nidn']; ?>" onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
