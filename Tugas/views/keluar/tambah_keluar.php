<?php
require '../../index.php';
?>

<h3>Tambah Bawang Keluar</h3>
<form action="proses_tambah_keluar" method="post">
    <table>
        <tr>
            <td>Jenis Bawang</td>
            <td><input class="form-control" type="text" name="jenis_bawang"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input class="form-control" type="text" name="jumlah"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input class="form-control" type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Penerima</td>
            <td><input class="form-control" type="text" name="penerima"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
</form>

<script>
    function showAlert() {
        alert("Data Keluar berhasil ditambahkan!");
    }
</script>
