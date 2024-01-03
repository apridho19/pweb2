<?php

class Masuk
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllMasuk()
    {
        $query = "SELECT * FROM bawang_masuk";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMasuk($jenis_bawang, $jumlah, $tanggal)
    {
        $query = "INSERT INTO bawang_masuk (jenis_bawang, jumlah, tanggal) 
        VALUES ('$jenis_bawang', '$jumlah', '$tanggal')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function getMasukById($id_masuk){
        $query = "SELECT * FROM bawang_masuk where id_masuk='$id_masuk'";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc ($result);
    }

    public function updateMasuk($id_masuk, $jenis_bawang, $jumlah, $tanggal){
        $query = "UPDATE bawang_masuk set id_masuk='$id_masuk', jenis_bawang='$jenis_bawang', jumlah='$jumlah', tanggal='$tanggal' WHERE id_masuk='$id_masuk'";
        $result = mysqli_query ($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function deleteMasuk($id_masuk)
    {
        $query = "DELETE FROM bawang_masuk WHERE id_masuk='$id_masuk'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }
}