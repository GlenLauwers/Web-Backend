<?php

	function __autoload($klassennaam) 
	{
	    include 'classes/' .$klassennaam. '.php';
	}

	$nummer_1	=	150;
	$nummer_2	=	100;

	$percent = new Percent($nummer_1, $nummer_2);

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing classes: begin</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
   	<body>
   		<h1>Oplossing classes: begin</h1>
   		
			<p>Hoeveel procent is <?php echo $nummer_1 ?> van <?php echo $nummer_2 ?>?</p>

			<table>
					<tr>
						<td>Absoluut</td>
						<td><?= $percent->absolute ?></td>
					</tr>

					<tr>
						<td>Relatief</td>
						<td><?= $percent->relative ?></td>
					</tr>

					<tr>
						<td>Geheel getal</td>
						<td><?= $percent->hundred ?>%</td>
					</tr>

					<tr>
						<td>Nominaal</td>
						<td><?= $percent->nominal ?></td>
					</tr>
			</table>
    </body>
</html>
