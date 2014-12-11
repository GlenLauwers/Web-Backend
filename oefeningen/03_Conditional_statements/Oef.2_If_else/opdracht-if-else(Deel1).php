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
        <title>Oplossing if else: deel 1</title> 
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Oplossing if else: deel 1</h1>
 
            <p>Is <?= $jaartal ?> een schrikkeljaar? <?= $antwoord ?></p>
        </section>

    </body>
</html>