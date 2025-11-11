<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir</title>
</head>
<body>
    <h2>Hitung Saldo Akhir Tabungan</h2>
    <form method="post" action="">
        <label>Saldo Awal (Rp): </label>
        <input type="number" name="saldoAwal" required><br><br>

        <label>Bunga per Bulan (%): </label>
        <input type="number" step="0.01" name="bunga" required><br><br>

        <label>Lama (bulan): </label>
        <input type="number" name="bulan" required><br><br>

        <input type="submit" name="submit" value="Hitung">
        <input type="reset" value="Reset">
    </form>

    <hr>
=
    <?php
    if (isset($_POST['submit'])) {
        $saldoAwal = $_POST['saldoAwal'];
        $bungaPersen = $_POST['bunga'];
        $bulan = $_POST['bulan'];

        // ubah persen ke desimal
        $bunga = $bungaPersen / 100;

        // hitung saldo akhir
        $saldoAkhir = $saldoAwal + $saldoAwal * ($bunga * $bulan);

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Saldo awal: Rp " . number_format($saldoAwal, 0, ',', '.') . "<br>";
        echo "Bunga per bulan: " . $bungaPersen . "%<br>";
        echo "Lama menabung: " . $bulan . " bulan<br>";
        echo "<strong>Saldo akhir setelah $bulan bulan adalah: Rp " . number_format($saldoAkhir, 0, ',', '.') . 
        "</strong>";
    }
    ?>
</body>
</html>