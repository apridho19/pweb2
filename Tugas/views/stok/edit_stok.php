<?php

include_once '../../config.php';
include_once '../../controllers/StokController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_stok']))
{
    $id_stok = $_GET['id_stok'];

    $stokController = new StokController($db);
    $stokData = $stokController->getStokById($id_stok);

    if ($stokData) {
        if (isset($_POST['submit'])){
            $id_stok = $_POST['id_stok'];
            $jenis_bawang = $_POST['jenis_bawang'];
            $jumlah_stok = $_POST['jumlah_stok'];
            $tanggal_update = $_POST['tanggal_update'];
            $lokasi_penyimpanan = $_POST['lokasi_penyimpanan'];

            $result = $stokController->updateStok($id_stok, $jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan);

            if($result){
                header("location:stok");
            } else{
                header("location:edit_stok");
            }
        }
    } else{
        echo "Stok tidak ditemukan";
    }
}
?>

<h3>Edit Data Stok</h3>
<?php
if ($stokData){
?>
    <form action="" method="post">
        <?php
        foreach ($stokData as $d => $value){
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