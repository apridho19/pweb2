<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <!-- Form untuk mengirimkan angka ke server menggunakan metode POST -->
    <form method="POST">
        <label for="angka">Masukkan Angka:</label>
        <input type="number" name="angka">
        <input type="submit" value="periksa">
    </form>

    <?php
    // Memeriksa apakah ada data angka yang dikirimkan melalui formulir
    if (isset($_POST['angka'])){
        // Menyimpan angka yang dikirimkan dalam variabel $x
        $x = $_POST['angka'];

        echo "Nilai x = $x </br></br>";
        if($x > 0){ // Kondisi untuk memeriksa apakah nilai dari variabel $x lebih besar dari 0
            echo "$x adalah Bilangan Positif";
        }

        // Kondisi alternatif untuk memeriksa apakah nilai variabel $x kurang dari 0
        elseif($x < 0){ // Jika kondisi pertama tidak terpenuhi, maka kondisi ini akan diperiksa
            echo "$x adalah Bilangan Negatif";
        }

        else {
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>
</body>
</html>