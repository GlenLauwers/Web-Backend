<?php
    $maxGetal   =   100;
    $teller     =   0;

    $container  =   array();
    $product    = 1;
    while($teller <= $maxGetal)
    {
        $container[] .= $teller;
        ++$teller;
    }

    $getallenString =   join ($container, ', ');
    $product    =   array_product($container);

    var_dump($product)

    //var_dump($container);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  
        
        <h1>Opdracht while: deel 1</h1>

        <ul>

            <li>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en 
            een spatie ' , '.</li>

            <li>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.</li>
        </ul>

        <h1>Oplossingen</h1>
        <p><b>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en een spatie ' , '.</b></p>
            <p><?= $getallenString ?></p>

        <p><b>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.</b></p>


    </body>
</html>