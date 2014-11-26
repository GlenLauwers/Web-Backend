<?php
	$text	=	file_get_contents('text-file.txt');
	//var_dump($text);

	$characterArray	=	str_split ($text);
	//var_dump($characterArray);

	//kopiëren omdat rsort invloed heeft op de originele array
	$gesorteerdeArray	=	$characterArray;

	rsort($gesorteerdeArray);
	//var_dump($gesorteerdeArray);

	$omgedraaideArray	=	array_reverse($gesorteerdeArray);
	//var_dump($omgedraaideArray);

	$characterArray	=	array();

	foreach( $omgedraaideArray as $character)
	{
		if (!isset( $characterArray [$character]))
		{
			$characterArray [$character] = 1;
		}
		else
		{
			++ $characterArray[$character];
		}
	}
	//var_dump($characterArray);

	$aantalKarakters	=	count($characterArray);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht foreach</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        <h1>Foreach</h1>
        <p>In totaal kwamen er <?= $aantalKarakters?> voor in de string.</p>
        <table>
        	<thead>
        		<tr>
        			<th>Karakter</th>
        			<th>ASCII-nummer</th>
        			<th>Aantal in tekst</th>
        		</tr>
        	</thead>
        	<tbody>
        	<?php foreach ($characterArray as $character =>$occurence): ?>
        		<tr>

        			<td><?= $character ?></td>
        			<td><?= ord ($character) ?></td>
        			<td><?= $occurence ?></td>
        		</tr>
        	<?php endforeach ?>
        	</tbody>
        </table>
    </body>
</html>
