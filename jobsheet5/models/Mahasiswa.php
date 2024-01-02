<?php

class Mahasiswa
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM Mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($npm, $nama, $program_studi, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        $query = "INSERT INTO mahasiswa (npm, nama, program_studi, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat) 
        VALUES ('$npm', '$nama', '$program_studi', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function getMahasiswaById($npm){
        $query = "SELECT * FROM mahasiswa where npm=($npm)";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc ($result);
    }

    public function updateMahasiswa($npm, $nama, $program_studi, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
        $query = "UPDATE mahasiswa set npm='$npm', nama='$nama', program_studi='$program_studi', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' WHERE npm='$npm'";
        $result = mysqli_query ($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }

    public function deleteMahasiswa($npm)
    {
        $query = "DELETE FROM mahasiswa WHERE npm=$npm";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
    }
}