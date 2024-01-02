<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit']))
{
    $nidn = $_POST['nidn'];
    $nama_dsn = $_POST['nama_dsn'];
    $prodi = $_POST['prodi'];

    $dosenController = new DosenController($db);
    $result = $dosenController->createDosen($nidn, $nama_dsn, $prodi);

    if($result){
        header("location:dosen");
    } else{
        header("location:tambah_dosen.php");
    }
}