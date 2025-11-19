<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>functies</title>
</head>
<body>
    <h2><u>Functies in PHP</u></h2>

    <?php

        $voornaam_1 = 'Arjan';
        $tussenvoegsel_1 = 'de';
        $achternaam_1 = 'Ruijter';

        // echo "<p>Mijn naam is: $voornaam_1 $tussenvoegsel_1 $achternaam_1</p>";

        $voornaam_2 = 'Bert';
        $tussenvoegsel_2 = 'de';
        $achternaam_2 = 'Vries';

        // echo "<p>Mijn naam is: $voornaam_2 $tussenvoegsel_2 $achternaam_2</p>";

        function volledigeNaam(
            $voornaam,  
            $tussenvoegsel, 
            $achternaam, 
            $geboortedatum, 
            $adres, 
            $huisnummer, 
            $postcode, 
            $woonplaats
        ) {
            return "<p>Mijn naam is $voornaam $tussenvoegsel $achternaam</p>
                    <p>Mijn geboortedatum is: $geboortedatum</p>
                    <p>Mijn adres is: $adres $huisnummer, $postcode $woonplaats</p><hr>";
        }

        echo volledigeNaam('Arjan', 'de', 'Ruijter', '20-12-2002', 'Prinsenstraat', 16, '1001XN', 'Den Haag');
        echo volledigeNaam('Bert', 'van', 'Dolden', '12-03-2000', 'Hoogheweid', 34, '1901FG', 'Amsterdam');
        echo volledigeNaam('Johan', '', 'Terhaar', '31-01-1999', 'Teerstalstraat', '44B', '1234AB', 'Rotterdam');
        echo volledigeNaam('Youssef', 'El', 'Yassidi', '04-03-2006', 'De Meent', 200, '3412AB', 'Delft');

    
/**
 * Bedenk een functie die door de aanroep in de code:
 * echo berekening(4, 5, '+') de getallen 4 en 5 optelt en als output geeft: * De som van 4 + 5 = 9
 * echo berekening(4, 5, '-') de getallen 4 en 5 aftrekt en als output geeft:Het verschil van 4 - 5 = -1
 * echo berekening(4, 5, 'x') de getallen 4 en 5 vermenigvuldigt en als output geeft:Het product van 4 x 5 = 20
 * echo berekening(4, 5, '/') de getallen 4 en 5 deelt en als output geeft:Het quotiënt van 4 / 5 = 0.8
 */

    function berekening($getal_1, $getal_2, $teken)
    {
        if ($teken == '+') {
            $som = $getal_1 + $getal_2;
            return "<p>De som van $getal_1 + $getal_2 = $som</p>";
        } elseif ($teken == '-'){
            $verschil = $getal_1 - $getal_2;
            return "<p>Het verschil van $getal_1 - $getal_2 = $verschil</p>";
        } elseif($teken == 'x') {
            $product = $getal_1 * $getal_2;
            return "<p>Het product van $getal_1 x $getal_2 = $product</p>";
        } elseif($teken == '/') {
            $quotient = $getal_1 / $getal_2;
            return "<p>Het quotient van $getal_1 : $getal_2 = $quotient</p>";
        } else {
            return "De bewerking $teken is bij ons niet bekent";
        }        
    }

    echo berekening(5, 10, '+');
    echo berekening(5, 10, '-');
    echo berekening(5, 10, 'x');
    echo berekening(5, 10, '/');
    echo berekening(5, 10, '?');


/**
 * Bedenk een functie die een array meekrijgt met getallen en het grootste getal in het array teruggeeft
 * echo grootsteGetal([20, 4, 2, -23, 400]) geeft het als output:
 * Het grootste getal uit het array is: 400
 */
    function grootsteGetal($getallenArray)
    {
        $max = $getallenArray[0];
        foreach ($getallenArray as $getal) {
            if ($getal > $max) {
                $max = $getal;
            }
        }
        return "<p>Het grootste getal uit het array is: $max</p><hr>";
    }

    echo grootsteGetal([20, 800, 4, 2, -23, 400]);


    /**
     * Bedenk een functie die het aantal keren telt dat een letter wordt gebruikt in een naam:
     * echo aantalLetters('Arjan de Ruijter', 'r') 
     * geeft als output:
     * De letter R wordt 3 keer gebruikt in de naam Arjan de Ruijter. 
     */

    ?>
</body>
</html>