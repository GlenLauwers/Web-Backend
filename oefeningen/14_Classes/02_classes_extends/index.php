<?php
	function __autoload($klassennaam) 
	{
	    include 'Classes/' .$klassennaam. '.php';
	}
	//Animal Class
	$kermit 	= new Animal('Kermit', 'man', 100);
	$dikkie 	= new Animal('Dikkie', 'man', 100);
	$flipper 	= new Animal('Flipper', 'vrouw', 100);

	$dikkie->changehealth(-10);
	$flipper->changehealth(+20);

	//Lion Class
	$simba 	= new Lion('Simba', 'man', 150, 'Congolese leeuw');
	$scar	= new Lion('Scar', 'man', 200, 'Keniaanse leeuw');

	//Zebra Class
	$zeke 	= new Zebra('Zeke', 'man', 80, 'Quagga');
	$zana 	= new Zebra('Zana', 'vrouw', 75, 'Selous');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Oplossing: Classes: Extends</title>
        <meta charset="utf-8">
        <meta name="Keywords" content="trefwoorden,voor,SEO,gescheiden,door,kommas" />
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h1>Oplossing: Classes: Extends</h1>

        	<h2>Instanties van de Animal class</h2>
        		<ul>
        			<li><?=$kermit->getname() ?> is van het geslacht <?=$kermit->getGender() ?> en heeft momenteel <?=$kermit->getHealth() ?> levenspunten.</li>
        			<li><?=$dikkie->getname() ?> is van het geslacht <?=$dikkie->getGender() ?> en heeft momenteel <?=$dikkie->getHealth() ?> levenspunten.</li>
        			<li><?=$flipper->getname() ?> is van het geslacht <?=$flipper->getGender() ?> en heeft momenteel <?=$flipper->getHealth() ?> levenspunten.</li>
        		</ul>

        	<h2>Instanties van de Lion class</h2>
        		<ul>
        			<li>De speciale move van <?=$simba->getname() ?> (soort: <?=$simba->getSpecies() ?>): '<?=$simba->doSpecialMove() ?>'.</li>
        			<li>De speciale move van <?=$scar->getname() ?> (soort: <?=$scar->getSpecies() ?>): '<?=$scar->doSpecialMove() ?>'.</li>
        		</ul>

        	<h2>Instanties van de Zebra class</h2>
        		<ul>
        			<li>De speciale move van <?=$zeke->getname() ?> (soort: <?=$zeke->getSpecies() ?>): '<?=$zeke->doSpecialMove() ?>'.</li>
        			<li>De speciale move van <?=$zana->getname() ?> (soort: <?=$zana->getSpecies() ?>): '<?=$zana->doSpecialMove() ?>'.</li>
        		</ul>
    </body>
</html>