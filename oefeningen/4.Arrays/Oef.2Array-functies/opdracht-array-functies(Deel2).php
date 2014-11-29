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

    //var_dump($dieren);

    $dieren_alfa    =   $dieren;
    sort($dieren_alfa);
    //var_dump($dieren_alfa);

    $zoogdieren     =   array ('Dolfijn', 'Konijn', 'Muis');
    $dierenlijst    =   array_merge($dieren_alfa, $zoogdieren);

    //var_dump($dierenlijst);

    $dierenlijst_alfa    =  $dierenlijst;
    sort($dierenlijst_alfa);
    //var_dump($dierenlijst_alfa);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing array functies: deel 2</title> 

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
           
            <h1>Oplossing array functies: deel 1</h1>
           
            <p>Aantal soorten dieren: <?= $aantal ?></p>
            <p>Het gezochte dier is <?=$antwoord ?></p>


            <h1>Oplossing array functies: deel 2</h1>
           
            <h2>Alfabetische volgorde</h2>
            <pre><?echo var_dump($dieren_alfa)?></pre>

            <h2>Aangevulde dierenlijst</h2>
            <pre><?echo var_dump($dierenlijst)?></pre>

            <h2>Aangevulde dierenlijst in alfabetische volgorde</h2>
            <pre><?echo var_dump($dierenlijst_alfa)?></pre>
        </section>

    </body>
</html>