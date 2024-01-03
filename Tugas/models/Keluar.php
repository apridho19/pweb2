<?php

class Keluar
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllKeluar()
    {
        $query = "SELECT * FROM bawang_keluar";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createKeluar($jenis_bawang, $jumlah, $tanggal, $penerima)
    {
        $query = "INSERT INTO bawang_keluar (jenis_bawang, jumlah, tanggal, penerima) 
        VALUES ('$jenis_bawang', '$jumlah', '$tanggal', '$penerima')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function getKeluarById($id_keluar){
        $query = "SELECT * FROM bawang_keluar where id_keluar='$id_keluar'";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc ($result);
    }

    public function updateKeluar($id_keluar, $jenis_bawang, $jumlah, $tanggal, $penerima){
        $query = "UPDATE bawang_keluar set id_keluar='$id_keluar', jenis_bawang='$jenis_bawang', jumlah='$jumlah', tanggal='$tanggal', penerima='$penerima' WHERE id_keluar='$id_keluar'";
        $result = mysqli_query ($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function deleteKeluar($id_keluar)
    {
        $query = "DELETE FROM bawang_keluar WHERE id_keluar='$id_keluar'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }
}