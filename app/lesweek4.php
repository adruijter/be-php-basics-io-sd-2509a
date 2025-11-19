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
    
    <h2><u>Controlestructuren met PHP</u></h2>

    <?php

        /**
         * Hieronder staat een if else statement. Daarmee kan je beslissingen nemen
         * in je code 
         */
        $getal = 8;

        if ($getal == 5) {
            echo "<p>De waarde is gelijk aan 5</p>";
        } elseif ($getal < 5) {
            echo "<p>De waarde is kleiner dan 5 namelijk $getal</p>";
        } else {
            echo "<p>De waarde is groter dan 5 namelijk $getal</p>";
        }


        /**
         * Maak met een if else statement code die of goedemorgen of goedemiddag of
         * goedenavond toewenst
         */

        $dagdeel = 'middag'; # $dagdeel kan de waarden ochtend, middag en avond hebben

        if ($dagdeel ==  'ochtend') {
            echo "<p>Ik wens je een heel goede morgen!</p>";
        } elseif ($dagdeel == 'middag') {
            echo "<p>Ik wens je een heel goede middag!</p>";
        } elseif ($dagdeel == 'avond') {
            echo "<p>Ik wens je een heel goede avond!</p>";
        } elseif ($dagdeel == 'nacht') {
            echo "<p>Ik wens je een heel goede nacht!</p>";
        } else {
            echo "<p>Het is geen ochtend, middag, avond of nacht</p>";
        }



        /**
         * We kunnen ook gebruik maken van een switch-case
         * Maak deze voor de gebruikerrollen 
         * admin
         * customer
         * moderator
         * hacker
         * superuser
         */

        $userrole = 'hacker'; 

        switch ($userrole) {
            case 'admin':
                echo '<p>Welkom terug op de admin pagina</p>';
                break;
            case 'customer':
                echo '<p>Welkom terug op de customer pagina</p>';
                break;
            case 'moderator':
                echo '<p>Welkom terug op de moderator pagina</p>';
                break;
            case 'hacker':
                echo '<p>Helaas ben je niet zo welkom hacker</p>';
                break;
            case 'superuser':
                echo '<p>Welkom terug op de superuser pagina</p>';
                break;
            default:
                echo 'Deze gebruikersrol is niet bekent in het systeem' ;
        }


        /**
         * Maak een switch case die checked welk diploma je hebt gehaalt
         * VMBO Basis, VMBO Kader, VMBO Gemengd, VMBO TL, Havo en VWO
         * 
         * Wanneer $diplomaChecker = 'VMBO TL';
         * 
         * Dan zie je op het scherm:
         * Ik heb mijn VBMO TL diploma gehaald
         * 
         * Wanneer er een onbekende opleiding is komt er op het scherm:
         * Uw opleiding is bij ons niet bekent.
         */

        $diplomaChecker = 'VMBO TL';

        switch ($diplomaChecker) {
            case 'VMBO TL':
                echo '========================================';
                echo '<p>Ik heb mijn diploma VMBO TL behaald</p>';
                echo '========================================';
                break;
            case 'VMBO Gemengd':
                echo '<p>Ik heb mijn diploma VMBO Gemengd behaald</p>';
                break;
            case 'VMBO Kader':
                echo '<p>Ik heb mijn diploma VMBO Kader behaald</p>';
                break;
            case 'VMBO Basis':
                echo '<p>Ik heb mijn diploma VMBO Basis behaald</p>';
                break;
            case 'HAVO':
                echo '<p>Ik heb mijn HAVO diploma behaald</p>';
                break;
            case 'VWO':
                echo '<p>Ik heb mijn VWO diploma behaald</p>';
                break;
            Default:
                echo '<p>Uw opleiding is bij ons niet bekent in het systeem</p>';
        }



        // De dag van de week (bijvoorbeeld: maandag, dinsdag, etc.)
        $dag = 'woensdag';

        // We gebruiken match om een boodschap te kiezen
        $boodschap = match ($dag) {
            'maandag' => 'De week is begonnen, tijd om te knallen',
            'dinsdag' => 'Tweede dag van de week, je bent goed op weg!',
            'woensdag' => 'Het is woensdag - halverwege de week!',
            'donderdag' => 'Nog even doorzetten, het weekend komt eraan!',
            'vrijdag' => 'Vrijdag! Bijna weekend',
            'zaterdag' => 'Weekend! Tijd om te relaxen',
            'zondag' => 'Rustdag... of lekker gamen natuurlijk',
            default => 'Onbekende dag, controleer je invoer.'
        };

        // De boodschap tonen op de website
        echo "<p>$boodschap</p>";
    ?>

</body>
</html>