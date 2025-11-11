<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];
?>

<html>
    <head>
        <title>Contoh Request Post</title>
    </head>
    <body>
        <h1>Input Dua Bilangan</h1>
        <?php
        echo "<p>Anda telah memasukan bilangan pertama = ".$bilangan1. "</p>";
        echo "<p>Anda telah memasukan bilangan kedua = ".$bilangan2. "</p>"
        ?>
    </body>
</html>
