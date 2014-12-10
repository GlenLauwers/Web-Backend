<?php
	$cursus 		= 	false;
	$voorbeelden 	= 	false;
	$opdrachten 	= 	false;

	if (isset ($_GET['link']))
	{
		switch ($_GET['link']) 
		{
			case 'cursus':
				$cursus = true;
				break;
			
			case 'voorbeelden':
				$voorbeelden=	true;
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

        <style>

        </style>
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

 			<h2>Inhoud</h2>

 			<?php if ($cursus) : ?>
 				<iframe src="extra/web-backend-cursus.pdf" width="1000px" height="750px"></iframe>
 			<?php endif?>

		</section>
    </body>
</html>
