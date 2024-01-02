<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['nidn']))
{
    $nidn = $_GET['nidn'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($nidn);

    if ($dosenData) {
        if (isset($_POST['submit'])){
            $nidn = $_POST['nidn'];
            $nama_dsn = $_POST['nama_dsn'];
            $prodi = $_POST['prodi'];

            $result = $dosenController->updateDosen($nidn, $nama_dsn, $prodi);

            if($result){
                header("location:dosen");
            } else{
                header("location:edit_dosen");
            }
        }
    } else{
        echo "Dosen tidak ditemukan";
    }
}
?>

<h3>Edit Data Dosen</h3>
<?php
if ($dosenData){
?>
    <form action="" method="post">
        <?php
        foreach ($dosenData as $d => $value){
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