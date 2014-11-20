<?php
    $dieren             = array('Hond', 'Kat', 'Schaap', 'Schildpad', 'Kip', 'Cavia' );
    $aantal             = count($dieren);
    $gezocht_dier       = 'Hond';
    $te_zoeken_dieren   = in_array($gezocht_dier, $dieren);

    if ($te_zoeken_dieren == true) 
    {
        $antwoord   = 'gevonden :-)';
    }
    else
    {
        $antwoord   = 'niet gevonden :-(';
    }

    var_dump($dieren);

    $dieren_alfa    =   $dieren;
    sort($dieren_alfa);
    var_dump($dieren_alfa);

    $zoogdieren     =   array ('Dolfijn', 'Konijn', 'Muis');
    $dierenlijst    =   array_merge($dieren_alfa, $zoogdieren);

    var_dump($dierenlijst);

    $dierenlijst_alfa    =  $dierenlijst;
    sort($dierenlijst_alfa);
    var_dump($dierenlijst_alfa);
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

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <ul>
                <li>Ga verder op deel 1 (maar maak een aparte kopie voor, overschrijf het origineel niet!)</li>

                <li>Zorg ervoor dat de array volgens het alfabet gesorteerd wordt ( A -> Z )</li>

                <li>Maak een array <code>$zoogdieren</code> en plaats hier 3 dieren in, voeg vervolgens de 2 arrays met dieren samen in de array <code>$dierenlijst</code></li>
            </ul>

        </section>

    </body>
</html>