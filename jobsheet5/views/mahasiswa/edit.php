<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['npm']))
{
    $npm = $_GET['npm'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($npm);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])){
            $npm = $_POST['npm'];
            $nama = $_POST['nama'];
            $program_studi = $_POST['program_studi'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($npm, $nama, $program_studi, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

            if($result){
                header("location:mahasiswa");
            } else{
                header("location:edit");
            }
        }
    } else{
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<h3>Edit Data Mahasiswa</h3>
<?php
if ($mahasiswaData){
?>
    <form action="" method="post">
        <?php
        foreach ($mahasiswaData as $d => $value){
        ?>
            <table border="0">
                <tr>
                    <td width="100">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
            <?php
        }
        ?>
        <tr>
            <td>
                <td>
                    <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                </td>
            </td>
        </tr>
        </table>
    </form>
<?php    
}
?>