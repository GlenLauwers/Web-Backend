<?php

    $getal1 =   10;
    $getal2 =   9;
    $string =   'Hierin komt de tekst die we gaan berekenen en in hoofdletter gaan plaatsen.';

    //naam binnen de functie heeft niets te maken met hetgeen erboven. Enkel hetgeen binnen de functie is bekend.
	function berekenSom ($getal1, $getal2)
	{
		$som	=	$getal1 + $getal2;
		return $som; 
	}

	function bereken_verm ($getal1, $getal2)
	{
		$product	=	$getal1 * $getal2;
		return $product; 
	}

	function even ($getal)
	{
		$even = false;

        if ($getal %2 == 0) 
		{
			$even = true;
		}

        return $even;
	}
	
    function calculateLengthAndUppercase ($string)
    {
        $container  =   array();

        $lengte     =   strlen($string);
        $hoofdletter=   strtoupper($string);

        $container ['lengte']       =   $lengte;
        $container ['hoofdletter']  =   $hoofdletter;

        return $container;
    }

    $som            =   berekenSom ($getal1, $getal2);
    $product        =   bereken_verm ($getal1, $getal2);
    $even           =   even ($getal1); 
    $stringarray    =   calculateLengthAndUppercase ($string);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing functies: deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Oplossing functies: deel 1</h1>

                <p>De som van <?= $getal1 ?> en <?=$getal2 ?> is <?= $som ?>.</p>
                <p>Het product van <?= $getal1 ?> en <?=$getal2 ?> is <?=$product ?></p>
                <p>Het getal <?= $getal1 ?> is <?= ($even) ? "even" : "oneven" ?></p>
                <p>De lengte van de string "<?= $string ?>" is <?= $stringarray['lengte']?> karakters.</p>
                <p>In uppercase ziet de string er zo uit: <?= $stringarray['hoofdletter']?> </p>
        </section>

    </body>
</html>
