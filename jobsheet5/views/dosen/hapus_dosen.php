<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['nidn'])){
    $nidn = $_GET['nidn'];

    $dosenController = new DosenController($db);
    $result = $dosenController->deleteDosen($nidn);

    if($result){
        header("location:dosen");
    } else{
        echo "Gagal menghapus data";
    }
}