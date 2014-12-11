<?php

    $boodschappenlijstje    =   array( 'eieren', 'cola', 'choco', 'chocola', 'snoep' );
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OOplossing while: deel 2</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  

        <h1>Oplossing while: deel 2</h1>

        <ul>
            <?php 
                $boodschap  =   0;
            ?>
            
            <?php while( isset($boodschappenlijstje [$boodschap])):  ?>
                
                <li><?= $boodschappenlijstje [$boodschap] ?></li>
                <?php $boodschap++ ?>

            <?php endwhile ?>
        </ul>
        </section>
    </body>
</html>
