<?php

//Membuat class
class mahasiswa
{
    //Menuliskan property
    var $nim;
    var $nama;
    var $alamat;  

    //Method untuk menampilkan nim
    function tampil_nim()
    {
        return "220202052 <br><br>";
    }
    
    //Method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama Saya adalah Apridho <br><br>";
    }

    //Method untuk menampilkan alamat
    function tampil_alamat()
    {
        return "Alamat saya di Brebes";
    }

}

//Membuat objek nama_mahasiswa
$nim_mahasiswa=new mahasiswa();
$nama_mahasiswa=new mahasiswa();
$alamat_mahasiswa=new mahasiswa();


//Menampilkan objek di layar
echo $nim_mahasiswa->tampil_nim();
echo $nama_mahasiswa->tampil_nama();
echo $alamat_mahasiswa->tampil_alamat();