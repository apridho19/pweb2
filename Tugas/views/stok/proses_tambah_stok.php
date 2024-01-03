<?php

include_once '../../config.php';
include_once '../../controllers/StokController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit']))
{
    $jenis_bawang = $_POST['jenis_bawang'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $tanggal_update = $_POST['tanggal_update'];
    $lokasi_penyimpanan = $_POST['lokasi_penyimpanan'];

    $stokController = new StokController($db);
    $result = $stokController->createStok($jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan);

    if($result){
        header("location:stok");
    } else{
        header("location:tambah_stok");
    }
}