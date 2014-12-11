<?php
    $lijst        =   array (8, 7, 8, 7, 3, 2, 1, 2, 4);

    $unieke_lijst = array_unique($lijst);

    $lijst_gest   = $unieke_lijst;
    arsort($lijst_gest);

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing array functies: deel 3</title> 
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1>Oplossing array functies: deel 3</h1>

            <h2>Array</h2>
                <pre><?php var_dump($lijst) ?></pre>    
            
            <h2>Verwijder de duplicaten</h2>
                <pre><?php var_dump($unieke_lijst) ?></pre> 

            <h2>Gesorteerde array</h2> 
                <pre><?php var_dump($lijst_gest) ?></pre>
        </section>

    </body>
</html>