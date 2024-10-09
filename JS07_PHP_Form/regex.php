<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Matching</title>
</head>
<body>
    <h2>Hasil Pattern Matching</h2>

    <?php
    // Pencarian huruf kecil
    $pattern = '/[a-z]/';
    $text = 'This is a Sample Text.';
    echo "<h3>Text: '$text'</h3>";
    
    if (preg_match($pattern, $text)) {
        echo "<p>Huruf kecil ditemukan!</p>";
    } else {
        echo "<p>Tidak ada huruf kecil!</p>";
    }

    // Pencarian angka
    $pattern = '/[0-9]+/';
    $text = 'There are 123 apples.';
    echo "<h3>Text: '$text'</h3>";
    
    if (preg_match($pattern, $text, $matches)) {
        echo "<p>Cocokkan: " . $matches[0] . "</p>";
    } else {
        echo "<p>Tidak ada yang cocok</p>";
    }
    ?>
</body>
</html>
