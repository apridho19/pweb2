<?php

class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mhs($npm, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "insert into mahasiswa (npm,nama,alamat) values('$npm','$nama','$alamat')");
    }

    function edit($npm)
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where npm='$npm'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($npm, $nama, $alamat)
    {
        mysqli_query($this->koneksi,"update mahasiswa set npm='$npm', nama='$nama', alamat='$alamat' where npm='$npm'");
    }

    function hapus($npm)
    {
        mysqli_query($this->koneksi,"delete from mahasiswa where npm='$npm' ");
    }

    function tampil_dosen()
    {
        $data = mysqli_query($this->koneksi, "select * from dosen");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_dsn($nidn, $nama_dsn, $prodi)
    {
        mysqli_query($this->koneksi, "insert into dosen (nidn,nama_dsn,prodi) values('$nidn','$nama_dsn','$prodi')");
    }

    function edit_dsn($nidn)
    {
        $data = mysqli_query($this->koneksi, "select * from dosen where nidn='$nidn'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_dsn($nidn, $nama_dsn, $prodi)
    {
        mysqli_query($this->koneksi,"update dosen set nidn='$nidn', nama_dsn='$nama_dsn', prodi='$prodi' where nidn='$nidn'");
    }

    function hapus_dsn($nidn)
    {
        mysqli_query($this->koneksi,"delete from dosen where nidn='$nidn'");
    }

    function tampil_buku()
    {
        $data = mysqli_query($this->koneksi, "select * from buku");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_buku($judul, $pengarang, $tahun_terbit, $harga)
    {
        mysqli_query($this->koneksi, "insert into buku (judul,pengarang,tahun_terbit,harga) values('$judul','$pengarang','$tahun_terbit','$harga')");
    }

    function edit_buku($judul)
    {
        $data = mysqli_query($this->koneksi, "select * from buku where judul='$judul'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_buku($judul, $pengarang, $tahun_terbit, $harga)
    {
        mysqli_query($this->koneksi,"update buku set judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun_terbit', harga=$harga where judul='$judul'");
    }

    function hapus_buku($judul)
    {
        mysqli_query($this->koneksi,"delete from buku where judul='$judul' ");
    }
}
