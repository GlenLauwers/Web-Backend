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

        <h1>Oplossingen</h1>
        <p>Array.</p>
        <pre><?php var_dump($lijst) ?></pre>    
        <p>Haal de duplicaten uit de array.</p>
        <pre><?php var_dump($unieke_lijst) ?></pre> 
        <p>Sorteer de array van groot naar klein.</p>   
        <pre><?php var_dump($lijst_gest) ?></pre>
        </section>

    </body>
</html>