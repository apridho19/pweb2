<?php

include_once '../../config.php';
include_once '../../controllers/MasukController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_masuk'])){
    $id_masuk = $_GET['id_masuk'];

    $masukController = new MasukController($db);
    $result = $masukController->deleteMasuk($id_masuk);

    if($result){
        header("location:masuk");
    } else{
        echo "Gagal menghapus data";
    }
}