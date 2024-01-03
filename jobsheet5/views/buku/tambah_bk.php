<?php
require '../../index.php';
?>

<h3>Tambah Data Buku</h3>
<form action="proses_tambah_bk" method="post">
    <table>
        <tr>
            <td>Judul</td>
            <td><input class="form-control" type="text" name="judul"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input class="form-control" type="text" name="pengarang"></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input class="form-control" type="text" name="tahun_terbit"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input class="form-control" type="text" name="harga"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
</form>

<script>
    function showAlert() {
        alert("Data buku berhasil ditambahkan!");
    }
</script>
