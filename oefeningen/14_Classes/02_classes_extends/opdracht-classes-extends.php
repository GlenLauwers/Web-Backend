<?php

		function __autoload( $classnaam )
	{
		require( 'classes/' .$classnaam . '.php' );
	}

	$kikker	=	new Animal('Kermit', 'man', 100);
	$kat	=	new Animal('Felix', 'man', 100);
	$dolfijn=	new Animal('Flipper', 'vrouw', 100);

	$kat->changeHealth(-10);
	$dolfijn->changeHealth(+20);

	$simba 	=	new Lion('Simba','man', 120, 'Congolese leeuw');
	$scar 	=	new Lion('Scar', 'man', 150, 'Keniaanse leeuw');

	$zeke 	=	new Zebra('Zeke', 'man', 90, 'Quagga');
	$zana 	=	new Zebra('Zana', 'vrouw', 90, 'Selous');


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing classes: extends</title>
    </head>
    <body>
        <h1>Oplossing classes: extends</h1>
        	<h2>Instanties van de Animal class</h2>
        		<ul>
        			<li><?=$kikker->getname() ?> is van het geslacht <?=$kikker->getGender() ?> en heeft momenteel <?=$kikker->getHealth() ?> levenspunten</li>
        			<li><?=$kat->getname() ?> is van het geslacht <?=$kat->getGender() ?> en heeft momenteel <?=$kat->getHealth() ?> levenspunten</li>
        			<li><?=$dolfijn->getname() ?> is van het geslacht <?=$dolfijn->getGender() ?> en heeft momenteel <?=$dolfijn->getHealth() ?> levenspunten</li>
        		</ul>

        	<h2>Instanties van de Lion class</h2>
        		<ul>
        			<li>De speciale move van <?= $simba->getname()?> (soort: <?= $simba->getSpecies() ?>): <?= $simba->doSpecialMove() ?></li>
        			<li>De speciale move van <?= $scar->getname()?> (soort: <?= $scar->getSpecies() ?>): <?= $scar->doSpecialMove() ?></li>
        		</ul>

        	<h2>Instanties van de Zebra class</h2>
        		<ul>
        			<li>De speciale move van <?= $zeke->getname() ?> (soort: <?= $zeke->getSpecies() ?>): <?= $zeke->doSpecialMove() ?></li>
        			<li>De speciale move van <?= $zana->getname() ?> (soort: <?= $zana->getSpecies() ?>): <?= $zana->doSpecialMove() ?></li>
        		</ul>	
    </body>
</html>
