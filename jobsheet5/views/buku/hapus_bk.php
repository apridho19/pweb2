<?php

include_once '../../config.php';
include_once '../../controllers/BukuController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['judul'])){
    $judul = $_GET['judul'];

    $bukuController = new BukuController($db);
    $result = $bukuController->deleteBuku($judul);

    if($result){
        header("location:buku");
    } else{
        echo "Gagal menghapus data";
    }
}