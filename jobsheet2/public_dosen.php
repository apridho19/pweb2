<?php
class dosen
{
    // Property
    public $nidn;
    private $nama="Apridho Mulyo Nurrezky";
    protected $prodi="D3 Teknik Informatika";

    // Public method
    public function tampil_nidn()
    {
        return "NIDN Saya " . $this->nidn . "<br>";
    }
    
    // Private method
    function tampil_nama()
    {
        return "Nama Saya ". $this->nama. "<br>";
    }

    // Protected method
    function tampil_prodi()
    {
        return "Program Studi " . $this->prodi;
    }
}

// Instansiasi objek dosen ke dalam variabel $dosen
$dosen = new dosen();

// Set nilai property nidn
$dosen->nidn = "220202052";

// Memanggil method
echo $dosen->tampil_nidn();
echo $dosen->tampil_nama();
echo $dosen->tampil_prodi();
?>