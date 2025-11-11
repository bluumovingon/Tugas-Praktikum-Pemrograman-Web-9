    <?php
    
        $nama = $_GET['nama'];
        $tempat_lahir = $_GET['tempat_lahir'];
        $tanggal = $_GET['tanggal'];
        $bulan = $_GET['bulan'];
        $tahun = $_GET['tahun'];
        $alamat = $_GET['alamat'];
        $jenis_kelamin = $_GET['jenis_kelamin'];
        $asal_sekolah = $_GET['asal_sekolah'];
        $nilai_uan = $_GET['nilai_uan'];
        
        // Format tanggal lahir
        $tanggal_lahir = "TGL-BLN-THN";
        if(!empty($tanggal) && !empty($bulan) && !empty($tahun)) {
            $tanggal_lahir = $tanggal . "-" . $bulan . "-" . $tahun;
        
        
        echo "<hr>";
        echo "<h3>Terima kasih " . $nama . " sudah mengisi form pendaftaran.</h3>";
        echo "<table>";
        echo "<tr><td>Nama Lengkap</td><td>:</td><td>" . $nama . "</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>:</td><td>" . $tempat_lahir . "</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>:</td><td>" . $tanggal_lahir . "</td></tr>";
        echo "<tr><td>Alamat Rumah</td><td>:</td><td>" . $alamat . "</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>:</td><td>" . $jenis_kelamin . "</td></tr>";
        echo "<tr><td>Asal Sekolah</td><td>:</td><td>" . $asal_sekolah . "</td></tr>";
        echo "<tr><td>Nilai UAN</td><td>:</td><td>" . $nilai_uan . "</td></tr>";
        echo "</table>";
    }
    ?>
    <a href="http://localhost/PWEB-ARI/Pertemuan%2010/03_post_get/soal4.php?nama=Ariandra&tempat_lahir=Tenggarong&tanggal=9&bulan=Agustus&tahun=2004&alamat=Jalan%20Belimbing&jenis_kelamin=Laki-Laki&asal_sekolah=Sma%20Negeri%201%20Tenggarong&nilai_uan=88">Atau Bisa Klik disini untuk ke url nya</a>
</body>
</html>