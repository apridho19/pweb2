<?php

include_once '../../config.php';
include_once '../../controllers/KeluarController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit']))
{
    $jenis_bawang = $_POST['jenis_bawang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $penerima = $_POST['penerima'];

    $keluarController = new KeluarController($db);
    $result = $keluarController->createKeluar($jenis_bawang, $jumlah, $tanggal, $penerima);

    if($result){
        header("location:keluar");
    } else{
        header("location:tambah_keluar");
    }
}