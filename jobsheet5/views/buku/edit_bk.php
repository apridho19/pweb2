<?php

include_once '../../config.php';
include_once '../../controllers/BukuController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['judul']))
{
    $judul = $_GET['judul'];

    $bukuController = new BukuController($db);
    $bukuData = $bukuController->getBukuById($judul);

    if ($bukuData) {
        if (isset($_POST['submit'])){
            $judul = $_POST['judul'];
            $pengarang = $_POST['pengarang'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $harga = $_POST['harga'];

            $result = $bukuController->updatebuku($judul, $pengarang, $tahun_terbit, $harga);

            if($result){
                header("location:buku");
            } else{
                header("location:edit_bk");
            }
        }
    } else{
        echo "Buku tidak ditemukan";
    }
}
?>

<h3>Edit Data Buku</h3>
<?php
if ($bukuData){
?>
    <form action="" method="post">
        <?php
        foreach ($bukuData as $d => $value){
        ?>
            <table border="0">
                <tr>
                    <td width="100">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
            <?php
        }
        ?>
        <tr>
            <td>
                <td>
                    <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                </td>
            </td>
        </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php    
}
?>