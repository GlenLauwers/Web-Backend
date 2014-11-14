<?php

    $nummer     =       1; 
    $dag        =       "_dag";
    
    if ($nummer == 1) 
    { 
        $dag = "maandag"; 
    } 
      
    if ($nummer == 2) 
    { 
        $dag = "dinsdag"; 
    } 
      
    if ($nummer == 3) 
    { 
        $dag = "woensdag"; 
    } 
      
    if ($nummer == 4) 
    { 
        $dag = "donderdag"; 
    } 
      
    if ($nummer == 5) 
    { 
        $dag = "vrijdag"; 
    } 
      
    if ($nummer == 6) 
    { 
        $dag = "zaterdag"; 
    } 
      
    if ($nummer == 7) 
    { 
        $dag = "zondag"; 
    }   
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht conditional statements</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht conditional statements: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
                <li>Bijvoorbeeld, wanneer <code>$getal</code> gelijk is aan 1 dan wordt de string <code>'maandag'</code> op het scherm getoond</li>
            </ul>  
                  <p>De <?php echo $nummer ?>e dag van de week is: <?php echo $dag ?></p>

        </section>

    </body>
</html>
