<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pecahan Uang</title>
</head>
<body>
    <h2>Kalkulator Pecahan Uang Tabungan</h2>
    
    <form method="POST" action="">
        <label>Masukkan jumlah uang tabungan (Rp):</label><br>
        <input type="number" name="jumlah_uang" required><br><br>
        
        <input type="submit" name="submit" value="Hitung Pecahan">
        <input type="reset" value="Reset">
    </form>
    
    <hr>
    
    <?php
    if(isset($_POST['submit'])) {
        $jumlah_uang = $_POST['jumlah_uang'];
        
        // Validasi input
        if($jumlah_uang <= 0) {
            echo "<p>Jumlah uang harus lebih dari 0!</p>";
        } else {
            echo "<h3>Hasil Perhitungan:</h3>";
            echo "<p>Total uang tabungan: Rp. " . number_format($jumlah_uang, 0, ',', '.') . "</p>";
            
            // Array pecahan uang yang tersedia
            $pecahan = array(100000, 50000, 20000, 5000, 100, 50);
            $sisa = $jumlah_uang;
            
            echo "<table border='1' cellpadding='10' cellspacing='0'>";
            echo "<tr><th>Pecahan (Rp)</th><th>Jumlah Lembar</th><th>Total (Rp)</th></tr>";
            
            foreach($pecahan as $nilai) {
                $jumlah_lembar = floor($sisa / $nilai);
                $total_nilai = $jumlah_lembar * $nilai;
                
                if($jumlah_lembar > 0) {
                    echo "<tr>";
                    echo "<td>Rp. " . number_format($nilai, 0, ',', '.') . "</td>";
                    echo "<td>" . $jumlah_lembar . " lembar</td>";
                    echo "<td>Rp. " . number_format($total_nilai, 0, ',', '.') . "</td>";
                    echo "</tr>";
                    
                    $sisa -= $total_nilai;
                }
            }
            
            echo "</table>";
            
            // Jika ada sisa uang yang tidak bisa dipecah
            if($sisa > 0) {
                echo "<p><b>Sisa uang yang tidak dapat dipecah: Rp. " . number_format($sisa, 0, ',', '.') . "</b></p>";
            }
        }
    }
    ?>
</body>
</html>