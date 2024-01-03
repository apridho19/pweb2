<?php
// Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

// Instansiasikan class database
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<div class="px-5">
<h3>Data Mahasiswa</h3>
<a class="btn btn-primary mb-2" href="tambah_mhs">Tambah Mahasiswa</a>
<br>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($mahasiswa as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['npm'] ?></td>
    <td><?php echo $x['nama'] ?></td>
    <td><?php echo $x['program_studi'] ?></td>
    <td><?php echo $x['tempat_lahir'] ?></td>
    <td><?php echo $x['tanggal_lahir'] ?></td>
    <td><?php echo $x['jenis_kelamin'] ?></td>
    <td><?php echo $x['agama'] ?></td>
    <td><?php echo $x['alamat'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit?npm=<?php echo $x['npm']; ?>">Edit</a>
        <a class="btn btn-danger" href="hapus?npm=<?php echo $x['npm']; ?>" onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>