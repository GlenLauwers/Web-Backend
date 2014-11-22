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
        <title>Opdracht while</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  
        
        <h1>Opdracht while: deel 1</h1>

        <ul>

            <li>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en 
            een spatie ' , '.</li>

            <li>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.</li>
        </ul>

        <h1>Oplossingen</h1>
        <p><b>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en een spatie ' , '.</b></p>
        <p><?php echo $opsomming_1 ?></p>

        <p><b>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.</b></p>
        <p><?php echo $opsomming_2 ?></p>

    </body>
</html>