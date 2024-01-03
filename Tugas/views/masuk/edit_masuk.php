<?php

include_once '../../config.php';
include_once '../../controllers/MasukController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_masuk']))
{
    $id_masuk = $_GET['id_masuk'];

    $masukController = new MasukController($db);
    $masukData = $masukController->getMasukById($id_masuk);

    if ($masukData) {
        if (isset($_POST['submit'])){
            $id_masuk = $_POST['id_masuk'];
            $jenis_bawang = $_POST['jenis_bawang'];
            $jumlah = $_POST['jumlah'];
            $tanggal = $_POST['tanggal'];

            $result = $masukController->updateMasuk($id_masuk, $jenis_bawang, $jumlah, $tanggal);

            if($result){
                header("location:masuk");
            } else{
                header("location:edit_masuk");
            }
        }
    } else{
        echo "Bawang Masuk tidak ditemukan";
    }
}
?>

<h3>Edit Bawang Masuk</h3>
<?php
if ($masukData){
?>
    <form action="" method="post">
        <?php
        foreach ($masukData as $d => $value){
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