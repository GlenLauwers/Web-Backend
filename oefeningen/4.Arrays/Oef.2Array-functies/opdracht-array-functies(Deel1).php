<?php
    $dieren             = array('Hond', 'Kat', 'Schaap', 'Schildpad', 'Kip', 'Cavia' );
    $aantal             = count($dieren);
    $gezocht_dier       = 'Hond';
    $te_zoeken_dieren   = in_array($gezocht_dier, $dieren);

    if ($te_zoeken_dieren == true) 
    {
        $antwoord   = 'gevonden';
    }
    else
    {
        $antwoord   = 'niet gevonden';
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li>Maak een array waarin je meer dan 5 dieren plaatst</li>

                <li>Laat het script berekenen hoeveel elementen er in de array zitten en druk af naar het scherm</li>

                <li>Maak het mogelijk om met een variabele <code>$teZoekenDier</code> een dier te zoeken in de array, druk tevens een gepaste boodschap af (gevonden/niet gevonden).</li>

            </ul> 
            <h1>Oplossing</h1>
            <p>Aantal soorten dieren: <?= $aantal ?></p>
            <p>Het gezochte dier is <?=$antwoord ?></p>

        </section>

    </body>
</html>
