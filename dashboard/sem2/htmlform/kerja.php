<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP</title>
</head>
<body>
    <h2>LATIHAN PHP</h2>

    <h3>1. Paparkan ayat</h3>
    <?php
    echo "<p><b>Selamat datang ke dunia PHP!</b></p>";
    ?>

    <h3>2. Paparkan dua baris teks</h3>
    <?php
    echo "Saya sedang belajar PHP.<br>";
    echo "PHP sangat menyeronokkan!";
    ?>

    <h3>3. Operasi tambah, tolak, darab dan bahagi</h3>
    <?php
    $x = 10;
    $y = 5;

    echo "Hasil tambah: " . ($x + $y) . "<br>";
    echo "Hasil tolak: " . ($x - $y) . "<br>";
    echo "Hasil darab: " . ($x * $y) . "<br>";
    echo "Hasil bahagi: " . ($x / $y);
    ?>

    <h3>4. Maklumat tempat tinggal</h3>
    <?php
    $bandar = "Kota Bharu";
    $negeri = "Kelantan";
    $poskod = 16100;

    echo "Saya tinggal di $bandar, $negeri ($poskod)";
    ?>

    <h3>5. Luas segi empat</h3>
    <?php
    $panjang = 8;
    $lebar = 5;
    $luas = $panjang * $lebar;

    echo "Luas segi empat ialah $luas unit persegi.";
    ?>
</body>
</html>
