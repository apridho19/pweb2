<?php

//Membuat class
class mahasiswa
{
    //Menuliskan property
    var $nim;
    var $nama;
    var $alamat;  

    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }
    
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }

    //Method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama Saya adalah Apridho <br>";
    }

    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah <br>";
    }

    //Method untuk menampilkan alamat
    function tampil_alamat()
    {
        //Isi method
    }

}

//Membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();


//Menampilkan objek di layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
