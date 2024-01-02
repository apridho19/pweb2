<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for($x = 0; $x <= 10; $x += 2) // Inisialisasi variabel penghitung $x dengan nilai awal 0
        echo "$x </br>";

    echo "</br> Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y=1; // Inisialisasi variabel penghitung $y dengan nilai awal 1
    while($y <= 10){ // Perulangan akan terus berlangsung selama nilai variabel $y kurang dari atau sama dengan 10.
        echo "$y </br>";
        $y += 2; // Supaya nilai $y selalu bertambah 2, sehingga hanya nilai ganjil yang dihasilkan
    }

    echo "</br> Perulangan DO WHILE bilangan prima kurang dari 20 </br>";
    $angka = 2; // Inisialisasi variabel penghitung $angka dengan nilai awal 2

    do {
        $prima = true; // Inisialisasi variabel untuk menyimpan informasi apakah bilangan $angka adalah bilangan prima

        // For untuk Menguji apakah $angka adalah bilangan prima
        for ($i = 2; $i <= sqrt($angka); $i++){
            if ($angka % $i == 0) {
                $prima = false; // Jika $angka memiliki pembagi selain 1 dan dirinya sendiri, maka bukan bilangan prima
                break;
            }
        }

        // Jika variabel $prima bernilai true, maka $angka adalah bilangan prima
        if ($prima){
            echo $angka. "<br>";
        }

        $angka++; // Untuk menguji bilangan berikutnya

    } while ($angka <= 20); // Perulangan akan terus berlanjut hingga $angka mencapai 20
    ?>
</body>
</html>