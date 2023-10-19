<!DOCTYPE html>
<html>
<head>
    <title>Konverter Suhu</title>
</head>
<body>
    <h2>Konverter Suhu</h2>
    <form method="post" action="">
        Nilai Suhu: <input type="number" name="nilai" required><br>
        Konversi ke:
        <select name="jenis_suhu">
            <option value="celsius_ke_fahrenheit">Celsius ke Fahrenheit</option>
            <option value="fahrenheit_ke_celsius">Fahrenheit ke Celsius</option>
            <option value="celsius_ke_kelvin">Celsius ke Kelvin</option>
        </select><br>
        <input type="submit" value="Konversi">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
        $jenis_suhu = $_POST["jenis_suhu"];
        $hasil = 0;

        if ($jenis_suhu === "celsius_ke_fahrenheit") {
            $hasil = ($nilai * 9/5) + 32;
        } elseif ($jenis_suhu === "fahrenheit_ke_celsius") {
            $hasil = ($nilai - 32) * 5/9;
        } elseif ($jenis_suhu === "celsius_ke_kelvin") {
            $hasil = $nilai + 273.15;
        }

        echo "Hasil konversi: $nilai $jenis_suhu = $hasil";
    }
    ?>
</body>
</html>
