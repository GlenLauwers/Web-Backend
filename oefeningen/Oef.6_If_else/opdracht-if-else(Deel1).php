<?php
	$jaartal		= 	2001;
	$jaartal_delen	=	($jaartal % 4==0) && (!$jaartal % 100==0) && ($jaartal % 400==0);

	if ($jaartal_delen == true)
	{
		$antwoord	=	"Ja";
	}

	else
	{
		$antwoord	=	"Nee";
	}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else</title> 
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else: deel 1</h1>

            <ul>
                <li>Maak een PHP-script dat kan bepalen of de variabele 'jaartal' al dan niet een schrikkeljaar is
                    <ul>
                        <li>Een jaar is een schrikkeljaar als het deelbaar is door 4</li>
                        <li>Een jaartal deelbaar door 100 is geen schrikkeljaar</li>
                        <li>Een jaartal deelbaar door 400 is wel een schrikkeljaar</li>
                    </ul>
                </li>
            </ul>  
            <p>Is <?= $jaartal ?> een schrikkeljaar? <?= $antwoord ?></p>
        </section>

    </body>
</html>
