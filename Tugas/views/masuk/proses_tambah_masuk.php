<?php

include_once '../../config.php';
include_once '../../controllers/MasukController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit']))
{
    $jenis_bawang = $_POST['jenis_bawang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $masukController = new MasukController($db);
    $result = $masukController->createMasuk($jenis_bawang, $jumlah, $tanggal);

    if($result){
        header("location:masuk");
    } else{
        header("location:tambah_masuk");
    }
}