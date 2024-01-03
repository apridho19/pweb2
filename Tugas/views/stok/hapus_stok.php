<?php

include_once '../../config.php';
include_once '../../controllers/StokController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_stok'])){
    $id_stok = $_GET['id_stok'];

    $stokController = new StokController($db);
    $result = $stokController->deleteStok($id_stok);

    if($result){
        header("location:stok");
    } else{
        echo "Gagal menghapus data";
    }
}