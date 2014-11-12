<?php

    $fruit              =   "kokosnoot";
    $fruit_karakter     =   strlen($fruit);
    $letter             =   "o";
    $eerste_o           =   strpos($fruit,$letter);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht string extra functions</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht string extra functions: deel 1</h1>

            <ul>
                <li><?=$fruit?></li>
                <li>Bereken hoeveel karakters de variabele fruit telt, uiteraard door middel van een PHP-functie.</li>
                <li><?php echo $fruit_karakter?></li>
                <li>Positie van de eerste <?= $letter ?>: <?php echo $eerste_o?></li>
            </ul>
            
        </section>

    </body>
</html>