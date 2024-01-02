<?php

include_once '../../models/Dosen.php';

class DosenController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Dosen($db);
    }

    public function getAllDosen()
    {
        return $this->model->getAllDosen();
    }

    public function createDosen($nidn, $nama_dsn, $prodi)
    {
        return $this->model->createDosen($nidn, $nama_dsn, $prodi);
    }

    public function getDosenById($nidn)
    {
        return $this->model->getDosenById($nidn);
    }

    public function updateDosen($nidn, $nama_dsn, $prodi)
    {
        return $this->model->updateDosen($nidn, $nama_dsn, $prodi);
    }

    public function deleteDosen($nidn)
    {
        return $this->model->deleteDosen($nidn);
    }
}