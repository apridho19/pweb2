<?php

//Membuat class
class dosen
{
    //Menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    //Method untuk menampilkan nama
    function tampil_nidn()
    {
        return "220202052 <br><br>";
    }

    function tampil_nama()
    {
        return "Nama Saya adalah Apridho <br><br>";
    }
    
    function tampil_prodi()
    {
        return "D3 Teknik Informatika";
    }
}

//Membuat objek property
$nidn_dosen=new dosen();
$nama_dosen=new dosen();
$prodi_dosen=new dosen();

//Menampilkan objek di layar
echo $nidn_dosen->tampil_nidn();
echo $nama_dosen->tampil_nama();
echo $prodi_dosen->tampil_prodi();