<?php

class Dosen
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllDosen()
    {
        $query = "SELECT * FROM Dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nidn, $nama_dsn, $prodi)
    {
        $query = "INSERT INTO dosen (nidn, nama_dsn, prodi)
        VALUES ('$nidn', '$nama_dsn', '$prodi')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function getDosenById($nidn){
        $query = "SELECT * FROM dosen where nidn=($nidn)";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc ($result);
    }

    public function updateDosen($nidn, $nama_dsn, $prodi){
        $query = "UPDATE dosen set nidn='$nidn', nama_dsn='$nama_dsn', prodi='$prodi' WHERE nidn='$nidn'";
        $result = mysqli_query ($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function deleteDosen($nidn)
    {
        $query = "DELETE FROM dosen WHERE nidn=$nidn";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }
}