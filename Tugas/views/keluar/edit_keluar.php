<?php

include_once '../../config.php';
include_once '../../controllers/KeluarController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_keluar']))
{
    $id_keluar = $_GET['id_keluar'];

    $keluarController = new KeluarController($db);
    $keluarData = $keluarController->getKeluarById($id_keluar);

    if ($keluarData) {
        if (isset($_POST['submit'])){
            $id_keluar = $_POST['id_keluar'];
            $jenis_bawang = $_POST['jenis_bawang'];
            $jumlah = $_POST['jumlah'];
            $tanggal = $_POST['tanggal'];
            $penerima = $_POST['penerima'];

            $result = $keluarController->updateKeluar($id_keluar, $jenis_bawang, $jumlah, $tanggal, $penerima);

            if($result){
                header("location:keluar");
            } else{
                header("location:edit_keluar");
            }
        }
    } else{
        echo "Bawang Keluar tidak ditemukan";
    }
}
?>

<h3>Edit Bawang Keluar</h3>
<?php
if ($keluarData){
?>
    <form action="" method="post">
        <?php
        foreach ($keluarData as $d => $value){
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