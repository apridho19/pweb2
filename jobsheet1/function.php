<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    // Mendefinisikan fungsi untuk menghitung luas persegi panjang
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }

    // Mendefinisikan fungsi untuk menghitung luas lingkaran
    function lingkaran($r)
    {
        return 3.14*$r*$r; 
    }

    // Mengambil nilai panjang, lebar, dan radius dari parameter GET atau default kosong
    $p = $_GET["panjang"] ??"";
    $l = $_GET["lebar"] ??"";
    $radius = $_GET["radius"] ??"";
    ?>

    <!-- Formulir untuk memasukkan nilai panjang, lebar, dan radius lingkaran -->
    <form>
        Masukkan Panjang : <input type="text" name="panjang" value="<?=$p?>"> <br>
        Masukkan Lebar : <input type="text" name="lebar" value="<?=$l?>"> <br>
        Masukkan Jari-jari Lingkaran : <input type="text" name="radius" value="<?=$radius?>"> <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($p !="" && $l !=""){ // Memeriksa kedua variabel
        $luas_persegi = persegi_panjang ($p, $l); // Menghitung luas persegi panjang dengan memanggil fungsi persegi_panjang($p, $l)
        echo "<br><strong> Hasil Persegi Panjang : </strong><br>"; 
        echo "Luas Persegi Panjang = " . $luas_persegi . "<br>"; 

    }

    if ($radius !=""){ // Memeriksa apakah variabel $radius tidak kosong
        $luas_lingkaran = lingkaran ($radius); // Menghitung luas lingkaran dengan memanggil fungsi lingkaran($radius)
        echo "<br><strong>Hasil Lingkaran : </strong><br> "; 
        echo "Luas Lingkaran = " . $luas_lingkaran . "<br>"; 
    }
    ?>
</body>
</html>