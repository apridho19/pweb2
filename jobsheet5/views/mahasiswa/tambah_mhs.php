<?php
require '../../index.php';
?>

<h3>Tambah Data Mahasiswa</h3>
<form action="proses_tambah" method="post">
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
            <td>Program Studi</td>
            <td>
                <select name="program_studi">
                    <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                    <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                    <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                    <option value="D3 Teknik Listrik">D3 Teknik Listrik</option>
                    <option value="D4 Pengembangan Produk Agroindustri">D4 Pengembangan Produk Agroindustri</option>
                    <option value="D4 Teknik Pengendalian Pencemaran Lingkungan">D4 Teknik Pengendalian Pencemaran Lingkungan</option>
                    <option value="D4 Rekayasa Keamanan Siber">D4 Rekayasa Keamanan Siber</option>
                    <option value="D4 Teknik Rekayasa Multimedia">D4 Teknik Rekayasa Multimedia</option>
                    <option value="D4 Teknik Mekatronika">D4 Teknik Mekatronika</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
</form>

<script>
    function showAlert() {
        alert("Data mahasiswa berhasil ditambahkan!");
    }
</script>
