<?php

include_once '../../config.php';
include_once '../../controllers/KeluarController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_keluar'])){
    $id_keluar = $_GET['id_keluar'];

    $keluarController = new KeluarController($db);
    $result = $keluarController->deleteKeluar($id_keluar);

    if($result){
        header("location:keluar");
    } else{
        echo "Gagal menghapus data";
    }
}