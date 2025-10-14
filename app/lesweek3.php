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

    <?php
        // For loop
        for ($i=1; $i<6; $i++) {
             echo '<p>' . str_repeat('*', $i) . '</p>' ;
        }         
    ?>


    <?php
        // Dit is een indexed array
        $dieren = [
            'hond',
            'kat',
            'vis'
        ];

        // Zet de dieren onder elkaar op het scherm met een foreach

        foreach ($dieren as $dier) {
            echo "<p>" . $dier . "</p>";
        }

        $snoep = [
            'Mars',
            'Snickers',
            'Twix',
            'Milky Way',
            'Nuts',
            'Lion',
            'Bounty'
        ];

        // Maak een top 7 snoeplijstje met een foreach-loop
        echo "<p>============</p>";
        echo "Mijn top 7 snoeplijst";
        echo "<p>============</p>";
        echo "<ol>";
        foreach ($snoep as $reep) {
            echo "<li>$reep</li>";
        }
        echo "</ol>";


        // Maak een associatief array $leeftijden met een voornaam en de leeftijd van die persoon
        $leeftijden = [
            'Sarah' => 25,
            'Sieben' => 30,
            'Leontien' => 17
        ];


        foreach ($leeftijden as $naam => $leeftijd) {
            echo "<p>Mijn naam is $naam en ik ben $leeftijd jaar oud</p>";
        }


        //  maak een associatief array met daarin 5 sportclubnamen en de stad waaruit ze komen. 
        //  Geef de inhoud van het array weer met behulp van een foreach-loop.

        $sportclubs = [
            'FC Utrecht' => 'Utrecht',
            'Ajax' => 'Amsterdam',
            'Feyenoord' => 'Rotterdam',
            'FC Den Haag' => 'Den Haag',
            'FC Zwolle' => 'Zwolle'
        ];

        echo "<p><u>Sportclubs en hun steden</u></p>";
        foreach ($sportclubs as $club => $stad ) {
            echo "<p>De club $club komt uit $stad</p>";
        }


        // While loop

        echo "<p><u>while loop</U></p>";

        $teller = 1;

        while ($teller < 11) {
            echo "<p>Teller: $teller</p>";
            $teller++;
        }

        /**
         * Maak een indexed array $dieren met daarin 8 dierennamen. Geef de inhoud van deze lijst weer met een while loop. 
         * Tip: je kunt het aantal dieren in de lijst tellen met count($dieren)
         */

        $dieren = [
            'Hond',
            'Kat',
            'Olifant',
            'Leeuw',
            'Aap',
            'Paard',
            'Slang',
            'Koe',
            'Haas'
        ];

        echo "<p><u>Lijst van dieren</u></p>";
        $teller = 0;
        
        while ($teller < count($dieren)) {
            echo '<p>' . ($teller + 1) . '&period; ' . $dieren[$teller] . '</p>';
            $teller++;
        }


    ?>

</body>
</html>