<?php
    $dieren             = array('Hond', 'Kat', 'Schaap', 'Schildpad', 'Kip', 'Cavia' );
    $aantal             = count($dieren);
    $gezocht_dier       = 'lama';
    $te_zoeken_dieren   = in_array($gezocht_dier, $dieren);

    if ($te_zoeken_dieren == true) 
    {
        $antwoord   = 'gevonden :-)';
    }
    else
    {
        $antwoord   = 'niet gevonden. Jammer :-(';
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing array functies: deel 1</title> 

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Oplossing array functies: deel 1</h1>

            <p>Aantal soorten dieren: <?= $aantal ?></p>
            <p>Het gezochte dier is <?=$antwoord ?></p>

        </section>

    </body>
</html>
