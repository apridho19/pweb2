<?php
include 'header.php';
?>

<h3>Tambah Data Dosen</h3>
<form action="proses_dsn.php?aksi=tambah_dsn" method="post">
    <table>
        <tr>
            <td>NIDN</td>
            <td><input type="text" name="nidn"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_dsn"></td>
        </tr>
        <tr>
            <td>Prodi</td>
		    <td>
		        <select name="prodi" >
			        <option value="Teknik Informatika">Teknik Informatika</option>
			        <option value="Teknik Elektro">Teknik Elektro</option>
			        <option value="Teknik Mesin">Teknik Mesin</option>
			        <option value="Teknik Listrik">Teknik Listrik</option>
                    <option value="TPPL">TPPL</option>
			        <option value="ALKS">ALKS</option>
			        <option value="PPA">PPA</option>
		        </select>
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
        alert("Data dosen berhasil ditambahkan!");
    }
</script>