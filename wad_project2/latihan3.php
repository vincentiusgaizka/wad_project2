<!DOCTYPE html>
<html>
<head>
    <title>hasil latian 2</title>
</head>
<body>
    <h2>Konverter Suhu</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
        $jenis_suhu = $_POST["jenis_suhu"];
        $hasil = 0;

        if ($jenis_suhu === "celsius_ke_fahrenheit") {
            $hasil = ($nilai * 9/5) + 32;
            $konversi_ke = "Fahrenheit";
        } elseif ($jenis_suhu === "fahrenheit_ke_celsius") {
            $hasil = ($nilai - 32) * 5/9;
            $konversi_ke = "Celsius";
        } elseif ($jenis_suhu === "celsius_ke_kelvin") {
            $hasil = $nilai + 273.15;
            $konversi_ke = "Kelvin";
        }

        echo "Hasil konversi: $nilai Celsius ke $konversi_ke = $hasil";
    } else {
        echo "Tidak ada data yang dikirimkan.";
    }
    ?>

    <br>
    <a href="input.php">Kembali ke Halaman Input</a>
</body>
</html>
