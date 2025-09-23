<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Basics</title>
</head>
<body>
    <?php
        echo "<p>Hallo Wereld!</p>";

        $voornaam = "Arjan";
        $tussenvoegsel = "de";
        $achternaam = "Ruijter";
        $straatnaam = "Van der Helststraat";
        $huisnummer = 147;
        $woonplaats = "Amsterdam";
        $leeftijd = 58;
        $schoenmaat = 47;

        echo "<p>Mijn voornaam is: $voornaam $tussenvoegsel $achternaam.</p>";
        echo "<p>Ik woon in de $straatnaam $huisnummer te $woonplaats.</p>";
        echo "Mijn leeftijd is: $leeftijd en ik heb schoenmaat $schoenmaat.";
    ?>    
</body>
</html>