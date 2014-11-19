<?php
    $getal  =   2;

    switch ($getal) 
    {
        case "1":
            $antwoord = "maandag";
        break;

        case "2":
            $antwoord = "dinsdag";
        break;

        case "3":
            $antwoord = "woensdag";
        break;

        case "4":
            $antwoord = "donderdag";
        break;

        case "5":
            $antwoord = "vrijdag";
        break;

        case "6":
            $antwoord = "zaterdag";
        break;

        case "7":
            $antwoord = "zondag";
        break;
        
        default:
         $antwoord = "Je hebt geen correcte nummer ingegeven. :-(";
        break;
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht switch</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht switch: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
                <li>Maak gebruik van een switch en probeer alles te herschrijven i.p.v. te kopiëren.</li>
            </ul>  

            <p>Mijn getal: <?= $getal ?></p>
            <p><?=$antwoord ?></p>

        </section>

    </body>
</html>
