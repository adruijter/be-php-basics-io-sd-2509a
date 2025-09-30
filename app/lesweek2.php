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
        $wordIkMiljonair = true;
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


        /**
         * Maaak een associatief array met daarin 8 van je favoriete sneakers 
         * inclusief prijs en geef deze weer in  een lijst
         * 
         * Verwachte output:
         * 
         * ==========================
         * Mijn favoriete sneakers
         * ==========================
         * schoen 1: Addidas - 234,50
         * Schoen 2: ........
         * enz...
         * schoen 8: Nike - 199,00
         * 
         */

        $sneakers = [
            'Adidas Galaxy7' => 234.50,
            'Converse'       => 221.30,
            'Reebok'         => 198.00,
            'Puma'           => 24.95,
            'Vans'           => 133.00,
            'Asics'          => 210.45,
            'Nike'           => 457.10,
            'New Balance'    => 80.34
        ];

        echo "<p class='test'>===============</p>";
        echo "Mijn favoriete sneakers";
        echo "<p>===============</p>";

        echo "<p>Schoen 1: Addidas: {$sneakers['Adidas Galaxy7']}</p>";
        echo "<p>Schoen 2: Converse: {$sneakers['Converse']}</p>";
        echo "<p>Schoen 3: Reebok: {$sneakers['Reebok']}</p>";
        echo "<p>Schoen 4: Puma: {$sneakers['Puma']}</p>";
        echo "<p>Schoen 5: Vans: {$sneakers['Vans']}</p>";
        echo "<p>Schoen 6: Asics: {$sneakers['Asics']}</p>";
        echo "<p>Schoen 7: Nike: {$sneakers['Nike']}</p>";
        echo "<p>Schoen 8: New Balance: {$sneakers['New Balance']}</p>";

        /**
         * Maak een associatief array met de top 5 snelste auto's ter wereld
         *  met daarin de topsnelheid
         * 
         * Verwachte output:
         * *******************************
         * Top 5 snelste auto's ter wereld
         * *******************************
         * 1. Bugatti Veyron => 456 km/h
         * 2. ...
         *     enz...
         * 5. Rimec Nevera => 415 km/h 
         */

        $fastestCars = [
            'Koenigsegg Jesko Absolut' => 531,
            'Bugatti Chiron' => 490,
            'SSC Tuatara' => 475,
            'Hennessey Venom F5' => 437,
            'Rimec Nevera' => 415
        ];

        echo "<p>*****************************</p>";
        echo "<p>Top 5 snelste auto's</p>";
        echo "<p>*****************************</p>";
        echo "<ol>";
        echo "<li>Koenigsegg Jesko Absolut => {$fastestCars['Koenigsegg Jesko Absolut']}</li>";
        echo "<li>Bugatti Chiron => {$fastestCars['Bugatti Chiron']}</li>";
        echo "<li>SSC Tuatara => {$fastestCars['SSC Tuatara']}</li>";
        echo "<li>Hennessey Venom F5 => {$fastestCars['Hennessey Venom F5']}</li>";
        echo "<li>Rimec Nevera => {$fastestCars['Rimec Nevera']}</li>";
        
        echo "</ol>";

        ?>
    
    <a href="../index.html">home</a>
</body>
</html>