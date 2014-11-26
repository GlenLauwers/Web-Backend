<?php
    $namen  =    array ("Olga", "Boran", "Carl", "Yasmine");

    function drukArrayAf ($array)
    {
        $container  =   array ();

        foreach($array as $key => $value);
            $container [] = 'array['. $key.'] heeft waarde' . $value;
        return $container;
    }

    $namenBewerkt   =   drukArrayAf ($namen);
    var_dump($namenBewerkt);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
    <h1>Oplossingen</h1>


        </section>

    </body>
</html>