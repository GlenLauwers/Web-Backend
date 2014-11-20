<?php

    $getallen_1         =   array (1,2,3,4,5);
    $vermenigvuldiging  =   array_product($getallen_1);
    
    var_dump($getallen_1);
    var_dump($vermenigvuldiging);

    $oneven_getal       =   array();

    for ($counter = 0 ; $counter < count ($getallen_1); ++$counter)
    {
        $getal=    $getallen_1[$counter];
        if ($getal [$counter] % 2 != 0) 
        {
           $oneven_getal[] = $getal;        
        }
    }

    $getallen_2     =   array_reverse ($getallen_1);
    $som_array      =   array();

    foreach($getallen_1 as $key => $getal)
    {
            $getal_1=    $getal;
            $getal_2=    $getal_2 [$Key];

            $som    =   $getal_1 + $getal_2;
    }

    var_dump($som)
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1 class="extra">Opdracht arrays basis: deel 2</h1>

            <ul>
                <li>Maak een array waarin je de getallen 1, 2, 3, 4, 5 in plaatst</li>

                <li>Vermenigvuldig alle getallen met elkaar en druk af naar het scherm</li>

                <li>Druk de oneven getallen af (controle in script, niet zelf selecteren welke je afdrukt)</li>

                <li>Maak een tweede array waarin je de getallen 5, 4, 3, 2, 1 in plaatst</li>

                <li>Tel de getallen uit beide arrays met dezelfde index met elkaar op</li>
            </ul>
            <p>Het product van alle getallen uit de eerste array is <?=$vermenigvuldiging ?></p>
        </section>

    </body>
</html>
