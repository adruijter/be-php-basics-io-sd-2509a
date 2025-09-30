<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basics</title>
</head>
<body>
    <h2>Loops in PHP</h2>
    <?php
        echo "<p><u>De getallen 1 t/m 10</u></p>";
        for($i = 1; $i < 11; $i++) {
            echo "<p>$i</p>";
        }        
    ?>
    
    <p>=======================</p>
    De tafel van 7
    <p>=======================</p>

    <?php
        for ($i = 1; $i < 11; $i++) {
            echo "<p>$i x 7 =" . $i * 7 . "</p>";
        }
    ?>
</body>
</html>