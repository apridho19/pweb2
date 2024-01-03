<?php

include_once '../../models/Masuk.php';

class MasukController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Masuk($db);
    }

    public function getAllMasuk()
    {
        return $this->model->getAllMasuk();
    }

    public function createMasuk($jenis_bawang, $jumlah, $tanggal)
    {
        return $this->model->createMasuk($jenis_bawang, $jumlah, $tanggal);
    }

    public function getMasukById($id_masuk)
    {
        return $this->model->getMasukById($id_masuk);
    }

    public function updateMasuk($id_masuk, $jenis_bawang, $jumlah, $tanggal)
    {
        return $this->model->updateMasuk($id_masuk, $jenis_bawang, $jumlah, $tanggal);
    }

    public function deleteMasuk($id_masuk)
    {
        return $this->model->deleteMasuk($id_masuk);
    }
}