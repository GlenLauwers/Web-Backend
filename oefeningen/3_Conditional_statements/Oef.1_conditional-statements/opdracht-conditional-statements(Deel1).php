<?php

    $nummer     =       1; 
    $dag        =       "Deze dag bestaat niet";
    
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
        <title>Oplossing conditional statements: Deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Oplossing conditional statements: deel 1</h1>

                  <p>De <?php echo $nummer ?>e dag van de week is: <?php echo $dag ?></p>

        </section>

    </body>
</html>
