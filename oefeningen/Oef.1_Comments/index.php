<?php

	$naam 			=	"Glen";
	$achternaam 	=	"Lauwers" ;
	$volledige_naam	=	$naam . " " . $achternaam;

	/*Dit is commentaar
	in een blok*/

	#dit is een commentaarlijn. Niets plaatsen op de volgende lijn.

?>


<!DOCTYPE html>
<html>
<head>
	<title>Voorbeeld echo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<h1>Dit is de website van <?= $naam?> <?=$achternaam?>.</h1>
		<p><?= $volledige_naam?></p>
		<p>Hallo, ik ben <?= $naam?> <?= $achternaam?>.</p>
		<p>Van <?=$naam?>.</p>

</body>
</html>