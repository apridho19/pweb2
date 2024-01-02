<?php
include 'header.php';
?>

<h3>Tambah Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="npm"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
</form>

<script>
    function showAlert() {
        alert("Data mahasiswa berhasil ditambahkan!");
    }
</script>
