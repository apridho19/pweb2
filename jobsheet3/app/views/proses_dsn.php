<?php
include "../classes/database.php";
$db = new database;

$aksi=$_GET['aksi'];
if ($aksi=="tambah_dsn"){
    $db->tambah_dsn($_POST['nidn'], $_POST['nama_dsn'], $_POST['prodi']);
    header("location:tampil_dsn.php");
} elseif($aksi=="update_dsn"){
    $db->update_dsn($_POST['nidn'], $_POST['nama_dsn'], $_POST['prodi']);
    header("location:tampil_dsn.php");
} elseif($aksi=="hapus_dsn"){
    $db->hapus_dsn($_GET['nidn']);
    header("location:tampil_dsn.php");

}