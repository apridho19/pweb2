<?php
require '../../index.php';
?>

<h3>Tambah Data Dosen</h3>
<form action="proses_tambah_dosen" method="post">
    <table>
        <tr>
            <td>NIDN</td>
            <td><input class="form-control" type="text" name="nidn"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input class="form-control" type="text" name="nama_dsn"></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td><input class="form-control" type="text" name="prodi"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
</form>

<script>
    function showAlert() {
        alert("Data dosen berhasil ditambahkan!");
    }
</script>
