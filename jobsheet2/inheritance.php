<?php
class manusia
{
    public $nama_saya;
    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
}

//Class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

class dosen extends manusia
{
    public $nama_dosen;
    private $nidn;
    protected $prodi;

    function tampil_dosen($dosen)
    {
        $this->nama_dosen = $dosen;
    }

    function tampil_nidn($nidn)
    {
        $this->nidn = $nidn;
    }

    function panggil_prodi()
    {
        return $this->prodi;
    }

    function get_nidn()
    {
        return $this->nidn;
    }

    function tampil_prodi($prodi)
    {
        $this->prodi = $prodi;
    }

    function get_prodi()
    {
        return $this->prodi;
    }
}


//Instansiasi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Apridho Mulyo");
$informatika->panggil_mahasiswa("Nurrezky");

//Instansiasi class dosen
$dosen=new dosen();
$dosen->tampil_dosen("Harry Potter");
$dosen->tampil_nidn("12345678");
$dosen->tampil_prodi("D3 Teknik Informatika");

//Tampilkan isi property
echo "Nama Depan Saya : " . $informatika->nama_saya. "</br>";
echo "Nama Belakang Saya : " . $informatika->nama_mahasiswa. "</br>";
echo "<br>";
echo "Nama Dosen : " . $dosen->nama_dosen. "</br>";
echo "NIDN : " . $dosen->get_nidn(). "</br>";
echo "Program Studi : " . $dosen->get_prodi(). "</br>";
