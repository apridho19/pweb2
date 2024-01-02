<?php

include_once '../../models/Mahasiswa.php';

class MahasiswaController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($npm, $nama, $program_studi, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->createMahasiswa($npm, $nama, $program_studi, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function getMahasiswaById($npm)
    {
        return $this->model->getMahasiswaById($npm);
    }

    public function updateMahasiswa($npm, $nama, $program_studi, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->updateMahasiswa($npm, $nama, $program_studi, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function deleteMahasiswa($npm)
    {
        return $this->model->deleteMahasiswa($npm);
    }
}