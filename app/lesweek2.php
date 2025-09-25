<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon2.ico" type="image/x-icon">
    <title>PHP Basics</title>
</head>
<body>
    <h2>Datatypen in PHP</h2>



    <?php
        // Dit is een variabele van het datatype string (gewoon tekst)
        $sport = '400 meter hordelopen';

        echo "<p>Mijn favoriete sport is: $sport</p>";

        // Dit is variabele van het datatype integer (dat is een geheel positief of negatief getal)
        $leeftijd = 57;
        echo "<p>Mijn leeftijd is $leeftijd</p>";

        # Dit is een variabele van het datatype float (een positief of negatief kommagetal)
        $prijs = 3.27;
        echo "<p>De prijs van de chocoladereep is $prijs</p>";

        /* Hieronder staat het datatype boolean (een boolean kan twee waarden aannemen true of false) */
        $wordIkMiljonair = false;
        echo "<p>Word ik miljonair over 30 jaar, antwoord: $wordIkMiljonair</p>";

        // Hieronder een voorbeeld van een samengesteld datatype het array (meerdere waarden in een variabele)
        // Dit is een indexed array
        $snoep = [
            'Mars',
            'Snicker',
            'Milky Way',
            'Nuts',
            'Lion',
            'Twix',
            'KitKat',
            'Bounty',
            'Galaxy'
        ];

        echo "<p>Op de eerste plaats van de snoeplijst staat: $snoep[6]</p>";

        /**
         * Opdracht maak een indexed-array met je favo games en maak een top 5 lijstdaarvan op het scherm
        */
        
        $games = [
            'Tomb Raider',
            'Kings Valley',
            'Donkey Kong',
            'War of the world',
            'Texmex'
        ];
        
        echo "<h3>Mijn favoriete games</h3>";
        echo "=================";
        echo "<ol>";
        echo "<li>$games[1]</li>";
        echo "<li>$games[0]</li>";
        echo "<li>$games[2]</li>";
        echo "<li>$games[3]</li>";
        echo "<li>$games[4]</li>";
        echo "</ol>";


        /**
         * Je kunt ook een associatief array maken. De indexen worden dan vervangen door strings
         * Opdracht maak een assiatief array persoonsgegevens met daarin de voornaam, tussenvoegsel, achternaam
         * straatnaam, huisnummer, postcode en woonplaats
         */

        $persoonsgegevens = [
            'naam' => 'Arjan',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Ruijter',
            'straatnaam' => 'Jupiterstraat',
            'huisnummer' => 42,
            'postcode' => '1051XM',
            'woonplaats' => 'Den Haag'
        ];

        echo "<p>Mijn naam is: {$persoonsgegevens['naam']} {$persoonsgegevens['tussenvoegsel']} {$persoonsgegevens['achternaam']}</p>";
        echo "<p>Mijn adres is: {$persoonsgegevens['straatnaam']} {$persoonsgegevens['huisnummer']}</p>";
        echo "<p>Mijn postcode is: {$persoonsgegevens['postcode']}</p>";
        echo "<p>Mijn woonplaats is: {$persoonsgegevens['woonplaats']}</p>";

        ?>
    
    <a href="../index.html">home</a>
</body>
</html>