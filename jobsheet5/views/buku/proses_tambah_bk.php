<?php

include_once '../../config.php';
include_once '../../controllers/BukuController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit']))
{
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $harga = $_POST['harga'];

    $bukuController = new BukuController($db);
    $result = $bukuController->createBuku($judul, $pengarang, $tahun_terbit, $harga);

    if($result){
        header("location:buku");
    } else{
        header("location:tambah_bk.php");
    }
}