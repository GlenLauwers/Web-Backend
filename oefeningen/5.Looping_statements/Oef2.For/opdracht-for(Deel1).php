<?php
    
    $nummer =  0;
    while ($nummer <= 100) 
    {
        echo $nummer . ', ';
        ++$nummer;
    }

    $nummer =   0;
    $lijst  =   array();
    while ($nummer <= 100) {
        if ($nummer %3== 0 && $nummer >40 && $nummer <80)
        {
            $antwoord[]   =   $nummer;
        }
    ++$nummer;
    }
    var_dump($antwoord);


?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht for</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1>Opdracht for: deel 1</h1>

            <ul>

                <li>Maak het eerste deel van de opdracht voor de while lus met behulp van de for-lus:
                    <ul>
                        <li>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en 
                        een spatie <code>' ,'</code>.</li>

                        <li>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.</li>
                    </ul>
                </li>

            </ul> 
            
        </section>

    </body>
</html>
