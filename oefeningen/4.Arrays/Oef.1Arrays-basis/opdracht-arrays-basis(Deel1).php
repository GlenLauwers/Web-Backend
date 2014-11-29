<?php
	$dieren1 []	=	"Hond";
	$dieren1 []	=	"Kat";
	$dieren1 []	=	"Vogel";
	$dieren1 []	=	"Schildpad";
	$dieren1 []	=	"Cavia";
    $dieren1 []  =   "Schaap";
    //var_dump($dieren1)

	$dieren2 = array ('Hond', 'Kat', 'Vogel', 'Schildpad', 'Cavia', 'Schaap');
	
	//var_dump($dieren);

    $voertuigen['landvoertuigen']   =   array( 'vespa', 'fiets');
    $voertuigen['watervoertuigen']  =   array( 'surfplank', 'vlot', 'schoener', 'driemaster' );
    $voertuigen['luchtvoertuigen']  =   array( 'luchtballon', 'helicopter', 'B52');

	//var_dump($voertuigen);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossingen arrays basis: Deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        
        <h1>Oplossingen arrays basis: Deel 1</h1>
        <h2>Eerste methode dieren</h2>
            <pre><?php var_dump($dieren1) ?></pre>

        <h2>Tweede methode dieren</h2>
            <pre><?php var_dump($dieren2) ?></pre>

        <h2>Voertuigen</h2>
            <pre><?php var_dump($voertuigen) ?></pre>
    </body>
</html>
