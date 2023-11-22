<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h2>Itung itungan</h2>";

    $nomor1 = 10;
    $nomor2 = 5;

    //Tambah
    $total = $nomor1 + $nomor2;
    echo "Hasil dari $nomor1 + $nomor2 = $total <br>";

    //kurang
    $kurang = $nomor1 - $nomor2;
    echo "Hasil dari $nomor1 - $nomor2 = $kurang <br>";

    //kali
    $kali = $nomor1 * $nomor2;
    echo "Hasil dari $nomor1 x $nomor2 = $kali <br>";

    //bagi
    $bagi = $nomor1 / $nomor2;
    echo "Hasil dari $nomor1 / $nomor2 = $bagi <br>";

    //increment operator
    $nomor1++; //nambah 1
    echo "Hasil increment:" . $nomor1 . "<br>";

    //decrement operator
    $nomor1--; //kurang 1
    echo "Hasil increment:" . $nomor1 . "<br>";

    //decrement operator
    $nomor1 += 3; //tambah 3
    echo "Hasil increment:" . $nomor1 . "<br>";

    //decrement operator
    $nomor1 -= 3; //kurang 3
    echo "Hasil increment:" . $nomor1 . "<br>"
    ?>

    <?php
    $hasil = 10 + 5 * 2;
    echo $hasil . "<br>";

    ?>



</body>

</html>