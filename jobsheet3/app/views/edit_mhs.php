<?php
include '../classes/database.php';
$db = new database();
?>

<?php
include 'header.php';
?>

<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['npm']) as $d) {
    ?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="text" name="npm" value="<?php echo $d['npm'] ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form>

<script>
    function showAlert() {
        alert("Data mahasiswa berhasil diedit!");
    }
</script>