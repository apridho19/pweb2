<?php
include 'header.php';
?>

<h3>Tambah Data Buku</h3>
<form action="proses_buku.php?aksi=tambah_buku" method="post">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang"></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="number" name="tahun_terbit" min="1900" max="2099"></td></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga"></td>
        </tr>						
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
</form>

<script>
    function showAlert() {
        alert("Data buku berhasil ditambahkan!");
    }
</script>