<?php
// Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/KeluarController.php';
require '../../index.php';

// Instansiasikan class database
$database = new database;
$db = $database->getKoneksi();

$keluarController = new KeluarController($db);
$keluar = $keluarController->getAllKeluar();
?>

<div class="px-4" >
<h3>Data Bawang Keluar</h3>
<a class="btn btn-primary mb-2" href="tambah_keluar">Tambah Data</a>
<br>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Jenis Bawang</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Penerima</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($keluar as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['jenis_bawang'] ?></td>
    <td><?php echo $x['jumlah'] ?></td>
    <td><?php echo $x['tanggal'] ?></td>
    <td><?php echo $x['penerima'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_keluar?id_keluar=<?php echo $x['id_keluar']; ?>">Edit</a>
        <a class="btn btn-danger" href="hapus_keluar?id_keluar=<?php echo $x['id_keluar']; ?>" onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>