<?php

include_once '../../models/Stok.php';

class StokController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Stok($db);
    }

    public function getAllStok()
    {
        return $this->model->getAllStok();
    }

    public function createStok($jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan)
    {
        return $this->model->createStok($jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan);
    }

    public function getStokById($id_stok)
    {
        return $this->model->getStokById($id_stok);
    }

    public function updateStok($id_stok, $jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan)
    {
        return $this->model->updateStok($id_stok, $jenis_bawang, $jumlah_stok, $tanggal_update, $lokasi_penyimpanan);
    }

    public function deleteStok($id_stok)
    {
        return $this->model->deleteStok($id_stok);
    }
}