<?php
    $getal  =   2;

    switch ($getal) 
    {
        case 1:
            $antwoord = "maandag";
        break;

        case 2:
            $antwoord = "dinsdag";
        break;

        case 3:
            $antwoord = "woensdag";
        break;

        case 4:
            $antwoord = "donderdag";
        break;

        case 5:
            $antwoord = "vrijdag";
        break;

        case 6:
            $antwoord = "zaterdag";
        break;

        case 7:
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
        <title>plossing switch</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Oplossing switch</h1>

            <p>Mijn getal: <?= $getal ?></p>
            <p><?=$antwoord ?></p>

        </section>

    </body>
</html>