<?php
//Membuat class mahasiswa
class mahasiswa
{
    //Property public
    public $nama;
    protected $nim="220202052";
    

    //Public method
    public function tampilkan_nama()
    {
        //Nilai kembalian
        return "Nama Saya Apridho <br>";
    }

    //Membuat protected method
    function tampilkan_nim()
    {
        return "NIM Saya " . $this->nim;
    }
}

//Instansiasi objek mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//Memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
