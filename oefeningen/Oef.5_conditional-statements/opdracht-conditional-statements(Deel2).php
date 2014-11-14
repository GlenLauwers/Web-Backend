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

    $dag        =   strtoupper( $dag );
    $laatste_a  =   strrpos($dag, "A");
    $dag        =   substr_replace($dag, "a", $laatste_a, 1);
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

    		<h1 class="extra">Opdracht conditional statements: deel 2</h1>

    		<ul>
                <li>Maak een kopie van deel 1</li>
    			<li>Zet de naam van de dag (bv <code>'maandag'</code>) doormiddel van een string-functie dan naar hoofdletters om (bv <code>'MAANDAG'</code>).</li>
                <li>Zet alle letters in hoofdletters, behalve de 'a'</li>
                <li>Zet alle letters in hoofdletters, behalve de laatste 'a'</li>
    		</ul>
                <p>De <?php echo $nummer ?>e dag van de week is: <?php echo $dag ?></p>
        </section>

    </body>
</html>
