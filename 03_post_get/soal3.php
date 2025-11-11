<html>
<head>
    <title>Form Pendaftaran</title>
</head>
<body>
    <h2>FORM PENDAFTARAN</h2>
    
    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tanggal" required>
                        <option value="">TGL</option>
                        <?php for($i=1; $i<=31; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="bulan" required>
                        <option value="">BLN</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                    <select name="tahun" required>
                        <option value="">THN</option>
                        <?php for($i=2024; $i>=1950; $i--): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita" required> Wanita
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" required></td>
            </tr>
            <tr>
                <td>Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilai_uan" required></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $nilai_uan = $_POST['nilai_uan'];
        
        // Format tanggal lahir
        $tanggal_lahir = "TGL-BLN-THN";
        if(!empty($tanggal) && !empty($bulan) && !empty($tahun)) {
            $tanggal_lahir = $tanggal . "-" . $bulan . "-" . $tahun;
        }
        
        echo "<hr>";
        echo "<h3>Terimakasih " . htmlspecialchars($nama) . " sudah mengisi form pendaftaran.</h3>";
        echo "<table>";
        echo "<tr><td>Nama Lengkap</td><td>:</td><td>" . htmlspecialchars($nama) . "</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>:</td><td>" . htmlspecialchars($tempat_lahir) . "</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>:</td><td>" . htmlspecialchars($tanggal_lahir) . "</td></tr>";
        echo "<tr><td>Alamat Rumah</td><td>:</td><td>" . htmlspecialchars($alamat) . "</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>:</td><td>" . htmlspecialchars($jenis_kelamin) . "</td></tr>";
        echo "<tr><td>Asal Sekolah</td><td>:</td><td>" . htmlspecialchars($asal_sekolah) . "</td></tr>";
        echo "<tr><td>Nilai UAN</td><td>:</td><td>" . htmlspecialchars($nilai_uan) . "</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>