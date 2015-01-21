<?php
	$cursus 		= 	false;
	$voorbeelden 	= 	false;
	$opdrachten 	= 	false;
	$lijst_opdracht	=	new RecursiveDirectoryIterator( '/Users/glenlauwers/Documents/School/2. Webontwikkelaar/Backend/web-backend/oplossingen/oefeningen');
	$lijst_voorbeeld = new RecursiveDirectoryIterator('/Users/glenlauwers/Documents/School/2. Webontwikkelaar/Backend/web-backend/cursus/public/cursus/voorbeelden');
	//var_dump($lijst_voorbeeld);
	//var_dump($lijst_opdracht);



	if (isset ($_GET['link']))
	{
		switch ($_GET['link']) 
		{
			case 'cursus':
				$cursus = true;
				break;
			
			case 'voorbeelden':
				$voorbeelden=	$lijst_voorbeeld;
				break;

			case 'opdrachten':
				$opdrachten=	true;
				break;
		}
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing herhalingsopdracht 01</title>

    </head>
    <body>
        <section>
        	<h1>Oplossing herhalingsopdracht 01</h1>
        	<h2><a href = "opdracht-herhalingsopdracht-01.php"?>Indexpagina</h2>

        		<ul>
        			<li><a href="opdracht-herhalingsopdracht-01.php?link=cursus">Cursus</a></li>

        			<li><a href="opdracht-herhalingsopdracht-01.php?link=voorbeelden">Voorbeelden</a></li>

 					<li><a href="opdracht-herhalingsopdracht-01.php?link=opdrachten">Opdrachten</a></li>
				</ul>

	
 				<form action="opdracht-herhalingsopdracht_01.php" method="GET">
	
           	    	<label for="zoeken">Zoeken naar:</label>
           	    	<input type="text" name="zoeken" id="zoeken" value="Geef een zoekterm in">
 							
 					<input type="submit" name="Verzenden" value="Verzenden">

 				</form>


 			<?php if ($cursus) : ?>
 				<h2>Cursus</h2>
 				<iframe src="extra/web-backend-cursus.pdf" width="1000px" height="750px"></iframe>
 			<?php endif?>

 			<?php if ($voorbeelden):?>
 				<h2>Voorbeelden</h2>
 				<?php foreach (new RecursiveIteratorIterator ($lijst_voorbeeld) as $filename):?>
 				 <ul>
 					<li><?= $filename?> </li>
 				</ul>

 				<?php endforeach ?>
        	<?php endif ?>

 			<?php if ($opdrachten):?>
 				<h2>Opdrachten</h2>
 				<?php foreach (new RecursiveIteratorIterator ($lijst_opdracht) as $filename):?>
 				 <ul>
 					<li><?= $filename?> </li>
 				</ul>

 				<?php endforeach ?>
        	<?php endif ?>

		</section>
    </body>
</html>
