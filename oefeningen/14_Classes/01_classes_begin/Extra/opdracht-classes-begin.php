<?php

	function __autoload($klassennaam) 
	{
	    include 'classes/'. $klassennaam. '.php';
	}

	$aantal_keer	=	100;

	$nummer_1	=	rand(0,1000);
	$nummer_2	=	rand(0,1000);

	$percent = new Percent($nummer_1, $nummer_2);

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing classes: begin</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
   	<body>
   		<h1>Oplossing classes: begin</h1>

				<?php for( $i = 0; $i < $aantal_keer; ++$i ): ?>
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
					

				<?php endfor ?>

			
    </body>
</html>
