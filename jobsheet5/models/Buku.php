<?php

class Buku
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllBuku()
    {
        $query = "SELECT * FROM Buku";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createBuku($judul, $pengarang, $tahun_terbit, $harga)
    {
        $query = "INSERT INTO buku (judul, pengarang, tahun_terbit, harga)
        VALUES ('$judul', '$pengarang', '$tahun_terbit', '$harga')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function getBukuById($judul){
        $query = "SELECT * FROM buku where judul='$judul'";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc ($result);
    }

    public function updateBuku($judul, $pengarang, $tahun_terbit, $harga){
        $query = "UPDATE buku set judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun_terbit', harga='$harga' WHERE judul='$judul'";
        $result = mysqli_query ($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function deleteBuku($judul)
    {
        $query = "DELETE FROM buku WHERE judul='$judul'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }
}