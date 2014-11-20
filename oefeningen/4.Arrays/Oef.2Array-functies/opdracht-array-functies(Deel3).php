<?php
    $lijst        =   array (8, 7, 8, 7, 3, 2, 1, 2, 4);
    var_dump($lijst);

    $unieke_lijst = array_unique($lijst);
    var_dump($unieke_lijst);

    $lijst_gest   = $unieke_lijst;
    sort($lijst_gest);
    var_dump($lijst_gest);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>

                <li>Maak een array met volgende waarden:
                    <p>8, 7, 8, 7, 3, 2, 1, 2, 4</p>
                </li>

                <li>Haal de duplicaten uit de array</li>

                <li>Sorteer de array van groot naar klein</li>

            </ul>

        </section>

    </body>
</html>