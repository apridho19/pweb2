<?php
include "../classes/database.php";
$db = new database;

$aksi=$_GET['aksi'];
if ($aksi=="tambah_buku"){
    $db->tambah_buku($_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit'], $_POST['harga']);
    header("location:tampil_informasi.php");
} elseif($aksi=="update_buku"){
    $db->update_buku($_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit'], $_POST['harga']);
    header("location:tampil_informasi.php");
} elseif($aksi=="hapus_buku"){
    $db->hapus_buku($_GET['judul']);
    header("location:tampil_informasi.php");

}