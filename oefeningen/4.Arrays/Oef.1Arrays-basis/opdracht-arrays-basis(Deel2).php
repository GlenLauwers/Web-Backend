<?php

    $getallen_1         =   array (1,2,3,4,5);
    $vermenigvuldiging  =   array_product($getallen_1);
    
    //var_dump($getallen_1);
    //var_dump($vermenigvuldiging);

    $oneven_getal       =   array();

    for ($counter   =   0;  $counter < count ($getallen_1); ++$counter)
    {
        $getal  =   $getallen_1[$counter];

        if ($getal %2 !=0)
        {
            $oneven_getal[] =   $getal;
        }
    }
    var_dump($oneven_getal);

    $getallen_2     =   array_reverse ($getallen_1);
    $som_array      =   array ();

    foreach ($getallen_1 as $key => $getal)
    {
        $getal1     =   $getal;
        $getal2     =   $getallen_2 [$key];
        $som_array[]=   $getal1 + $getal2;  
    }

    var_dump($som_array)
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis: Deel 2</title>
    </head>
    <body class="web-backend-opdracht">
        <h1>Oplossing arrays basis: Deel 2</h1>

        <h2>Product</h2>
        <p>Het product van alle getallen is <?= $vermenigvuldiging ?>.</p>

        <h2>Oneven getallen</h2>
        <pre><?php var_dump($oneven_getal)?></pre>

        <h2>Som van de twee arrays</h2>
        <pre><?php var_dump($som_array) ?></pre>
    </body>
</html>
