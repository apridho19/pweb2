<?php
include '../class/database_buku.php';
$db = new database();
?>

<?php
include 'header.php';
?>

<h3>Edit Data Buku</h3>
<form action="proses_buku.php?aksi=update_buku" method="post">
<?php
foreach($db->edit_buku($_GET['judul']) as $d) {
    ?>
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="<?php echo $d['judul'] ?>"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" value="<?php echo $d['pengarang'] ?>"></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="number" name="tahun_terbit" min="1900" max="2099" value="<?php echo $d['tahun_terbit'] ?>"></td></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="<?php echo $d['harga'] ?>"></td>
        </tr>						
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" value="Simpan" onclick="showAlert()"></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form>

<script>
    function showAlert() {
        alert("Data buku berhasil diedit!");
    }
</script>