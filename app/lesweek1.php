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
    <h2>PHP basics</h2>
    <!-- Deze tekst zie je niet in de browswer -->
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

        echo "<p>Mijn naam is: $voornaam $tussenvoegsel $achternaam.</p>";
        echo "<p>Ik woon in de: $straatnaam $huisnummer te $woonplaats.</p>";
        echo "<p>Mijn leeftijd is: $leeftijd en ik heb schoenmaat $schoenmaat.</p>";

        $getal1 = 5;
        $getal2 = 2;

        // Ik bereken hier de som van twee getallen
        $som = $getal1 + $getal2;

        /* Ik bereken ook
           het product */
        $product = $getal1 * $getal2;

        # Hier bereken ik de deling van twee getallen
        $quotient = $getal1 / $getal2;

        /**
         * Dit is een docblock comment en nu maak ik een macht
         */
        $power = $getal2 ** 8;

        //Er is ook een andere manier om macht te verheffen
        $power2 = pow($getal1, $getal2);

        /**
         * Ik hieronder de wortel trekken van een getal
         */
        $getal3 = 169;
        $wortel = sqrt($getal3);

        echo "<p>De som van $getal1 + $getal2 = $som</p>";
        echo "<p>Het product van $getal1 x $getal2 = $product</p>";
        echo "<p>Het quotient van $getal1 / $getal2 = $quotient</p>";
        echo "<p>$getal2 tot de macht 8 = $power</p>";
        echo "<p>$getal1 tot de macht $getal2 = $power2</p>";
        echo "<p>De wortel uit $getal3 = $wortel</p>";
    ?>

    <a href="../index.html">home</a>   
</body>
</html>