<?php
class HomeController{

    //Home
    public function home()
    {
        header("location:http://localhost/pweb2/jobsheet5/index.php");
    }

    //Mahasiswa
    public function mahasiswa()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/index.php");

    }

    //Mahasiswa
    public function tambah_mhs()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/tambah_mhs.php");

    }

    //Mahasiswa
    public function proses_tambah()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/proses_tambah.php");

    }

    //Mahasiswa
    public function edit()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/edit.php");

    }

    //Mahasiswa
    public function hapus()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/hapus.php");

    }

    //Dosen
    public function dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/index_dosen.php");
    }

    //Dosen
    public function tambah_dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/tambah_dosen.php");
    }

    //Dosen
    public function proses_tambah_dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/proses_tambah_dosen.php");
    }

    //Dosen
    public function edit_dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/edit_dosen.php");
    }

    //Dosen
    public function hapus_dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/hapus_dosen.php");
    }

    //Buku
    public function buku()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/index_bk.php");
    }

    //Buku
    public function tambah_bk()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/tambah_bk.php");
    }

    //Buku
    public function proses_tambah_bk()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/proses_tambah_bk.php");
    }

    //Buku
    public function edit_bk()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/edit_bk.php");
    }
    
    //Buku
    public function hapus_bk()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/hapus_bk.php");
    }
}
