<?php
    $Voornaam                   =   "Glen";
    $Achternaam                 =   " Lauwers";
    $Volledige_Naam             =   $Voornaam . $Achternaam;
    $Volledige_Naam_Lengte      =   strlen($Volledige_Naam);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing string concatenate: deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
    		<h1>Oplossing string concatenate: deel 1</h1>

    		<ul>
                <li><?= $Voornaam ?> <?= $Achternaam?></li>
                <li><?= $Volledige_Naam ?></li>
                <li><?= $Volledige_Naam ?></li>
                <li>Aantal karakters: <?php echo $Volledige_Naam_Lengte ?></li>
    		</ul>

        </section>

    </body>
</html>