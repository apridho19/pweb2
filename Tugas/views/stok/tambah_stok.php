<?php
require '../../index.php';
?>

<h3>Tambah Data Stok</h3>
<form action="proses_tambah_stok" method="post">
    <table>
        <tr>
            <td>Jenis Bawang</td>
            <td><input class="form-control" type="text" name="jenis_bawang"></td>
        </tr>
        <tr>
            <td>Jumlah Stok</td>
            <td><input class="form-control" type="text" name="jumlah_stok"></td>
        </tr>
        <tr>
            <td>Tanggal Update</td>
            <td><input class="form-control" type="date" name="tanggal_update"></td>
        </tr>
        <tr>
            <td>Lokasi Penyimpanan</td>
            <td><input class="form-control" type="text" name="lokasi_penyimpanan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
</form>

<script>
    function showAlert() {
        alert("Data Stok berhasil ditambahkan!");
    }
</script>
