<html>
    <head>
        <title>Menghitung Komisi Salesman</title>
    </head>
    <body>
        <h1>Menghitung Komisi Salesman</h1>
        <?php
        $nilaiJual = $_POST['penjualan'];
        $persenKomisi = $_POST['komisi'];

        $komisi = $nilaiJual * $persenKomisi / 100;

        echo "<p>Nilai Penjualan Salesman : Rp.".$nilaiJual. "</p>";
        echo "<p>Persentase Komisi : ".$persenKomisi. "%</p>";
        echo "<p>Jadi, Komisi yang didapat Salesman adalah : Rp.".$komisi. "</p>";
        ?>
    </body>
</html>  