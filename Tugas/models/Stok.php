<?php

class Stok
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllStok()
    {
        $query = "SELECT * FROM stok_bawang";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createStok($jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan)
    {
        $query = "INSERT INTO stok_bawang (jenis_bawang, jumlah_stok, tanggal_update, lokasi_penyimpanan) 
        VALUES ('$jenis_bawang', '$jumlah_stok', '$tanggal_update', '$lokasi_penyimpanan')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function getStokById($id_stok){
        $query = "SELECT * FROM stok_bawang where id_stok='$id_stok'";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc ($result);
    }

    public function updateStok($id_stok, $jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan){
        $query = "UPDATE stok_bawang set id_stok='$id_stok', jenis_bawang='$jenis_bawang', jumlah_stok='$jumlah_stok', tanggal_update='$tanggal_update', lokasi_penyimpanan='$lokasi_penyimpanan' WHERE id_stok='$id_stok'";
        $result = mysqli_query ($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function deleteStok($id_stok)
    {
        $query = "DELETE FROM stok_bawang WHERE id_stok='$id_stok'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }
}