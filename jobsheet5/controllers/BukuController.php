<?php

include_once '../../models/Buku.php';

class BukuController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Buku($db);
    }

    public function getAllBuku()
    {
        return $this->model->getAllBuku();
    }

    public function createBuku($judul, $pengarang, $tahun_terbit, $harga)
    {
        return $this->model->createBuku($judul, $pengarang, $tahun_terbit, $harga);
    }

    public function getBukuById($judul)
    {
        return $this->model->getBukuById($judul);
    }

    public function updateBuku($judul, $pengarang, $tahun_terbit, $harga)
    {
        return $this->model->updateBuku($judul, $pengarang, $tahun_terbit, $harga);
    }

    public function deleteBuku($judul)
    {
        return $this->model->deleteBuku($judul);
    }
}