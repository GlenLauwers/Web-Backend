<?php
	$namen	=	array ("Wannes", "Jonas", "Floor", "Christoph", "Glen");


	/*function goeiemorgend ($naam)
	{
		$begroeting = 'Goeiemorgend, ' . $naam .' Hoe gaat het? ';
		return $begroeting;
	}*/

	/*function goedeavond ($naam)
	{
		$begroeting = 'Goedeavond, ' . $naam .' Hoe gaat het? ';
		return $begroeting;
	}*/

		function begroet ($naam, $isOchtend)
	{
		$hallostring	=	($isOchtend == true)? "Goeiemorgend, " : "Goedeavond, ";
		$begroeting 	= 	$hallostring . $naam .'. Hoe gaat het? ';
		return $begroeting;
	}

	/*foreach ( $namen as $naam)
	{
		var_dump(begroet ($naam));
	}*/

	//var_dump(goeiemorgend ($namen[0]));
	//var_dump(goedeavond ($namen[0]));

	$begroeting1 	=	begroet ($namen[4], true);
	$begroeting2	=	begroet ($namen[4], false);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Functies</title>
    </head>

   <body>
   <p><?= $begroeting1 ?></p>
   <p><?= $begroeting2 ?></p>
   </body>

  </html>