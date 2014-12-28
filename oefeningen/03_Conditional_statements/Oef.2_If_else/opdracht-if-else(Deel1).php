<?php
    $jaartal        =   2012;

    if ($jaartal == ($jaartal % 4==0) || (!$jaartal % 100==0) && ($jaartal % 400==0)) 
    {
        $bericht    =   'Het jaar '. $jaartal. ' is een schrikkeljaar.';
    }

    else
    {
        $bericht    =   'Het jaar '. $jaartal. ' is geen schrikkeljaar.';
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing if else: deel 1</title> 
    </head>
    <body class="web-backend-opdracht">
        
        <h1>Oplossing If-else: Deel 1</h1>
        <ul>
            <li>Jaartal: <?= $jaartal ?></li>
            <li><?= $bericht ?></li>
        </ul>

    </body>
</html>