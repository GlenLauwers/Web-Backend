<?php
    #Deel 1
    $getal_lijst	= array();
    $nummer			=  0;
   	$max_getal		=	100;

    while ($nummer < $max_getal) 
    {
        $getal_lijst[] = $nummer;
        ++$nummer;

    }

	$opsomming_1	=	implode( ', ', $getal_lijst );

	#Deel 2
    $nummer =   0;
    $lijst  =   array();
    while ($nummer < $max_getal) 
    {
        if ($nummer %3== 0 && $nummer >40 && $nummer <80)
        {
            $antwoord[]   =   $nummer;
        }
    ++$nummer;
    }

    $opsomming_2	=	implode(', ', $antwoord);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing while: deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  
        
        <h1>Oplossing while: deel 1</h1>

        <h2>Getallen van 0 tot 100</h2>
        <p><?php echo $opsomming_1 ?></p>

        <h2>Getallen deelbaar door 3 en groter dan 40 maar kleiner dan 80</h2>
        <p><?php echo $opsomming_2 ?></p>

    </body>
</html>