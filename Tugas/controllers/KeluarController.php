<?php

include_once '../../models/Keluar.php';

class KeluarController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Keluar($db);
    }

    public function getAllKeluar()
    {
        return $this->model->getAllKeluar();
    }

    public function createKeluar($jenis_bawang, $jumlah, $tanggal, $penerima)
    {
        return $this->model->createKeluar($jenis_bawang, $jumlah, $tanggal, $penerima);
    }

    public function getKeluarById($id_Keluar)
    {
        return $this->model->getKeluarById($id_Keluar);
    }

    public function updateKeluar($id_Keluar, $jenis_bawang, $jumlah, $tanggal, $penerima)
    {
        return $this->model->updateKeluar($id_Keluar, $jenis_bawang, $jumlah, $tanggal, $penerima);
    }

    public function deleteKeluar($id_Keluar)
    {
        return $this->model->deleteKeluar($id_Keluar);
    }
}