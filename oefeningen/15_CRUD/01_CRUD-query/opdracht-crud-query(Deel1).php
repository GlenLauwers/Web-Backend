<?php

	$bericht 		=	'';
	$bieren_array	=	array();
	$kolom_naam		=	array();
	$kolom_naam[]	=	'biernummer';

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
		$bericht	=	'Connectie is gelukt.';

		$query_string 	=	'SELECT *
								FROM bieren 
								INNER JOIN brouwers
									ON bieren.brouwernr = brouwers.brouwernr
								WHERE bieren.naam LIKE "Du%"
								  AND brouwers.brnaam LIKE "%a%"';

		$statement = $db->prepare( $query_string );

		$statement->execute( );

		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$bieren_array[] 	= $row;
		}
		//var_dump($bieren_array);
		
		foreach($bieren_array[0] as $key => $bier)
		{
			$kolom_naam[] = $key;
		}
	}

	catch ( PDOException $e )
	{
		$bericht	=	'Er ging iets mis bij het inladen van de database: ' . $e->getMessage();
	}

	

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing: CRUD query</title>

        <style>
			      .even
			      {
			      	background-color:lightgrey;
			      }
       
			      table
            {
                font-size:12px;
                overflow:auto;
            }

            table th,
            table td
            {
                padding:4px;
            }

            table th
            {
                background: #DFDFDF;
                text-align:center;
            }

            table tr
            {
                transition: all 1s ease-out;
            }

            table tr:hover
            {
                background-color:lightgreen;
            }

            .even
            {
                background: #F1F1F1;
            }

        </style>
    </head>

    <body class="web-backend-opdracht">
        <section class="body">
            <h1>Oplossing: CRUD query: Deel 1</h1>
           	<p><?php echo $bericht ?></p>
            
           	<table>
           		<thead>
           			<tr>
                  <th>#</th>
           				<?php foreach ($kolom_naam as $kolom_naam): ?>
           					<th><?= $kolom_naam ?></th>
           				<?php endforeach ?>
           			</tr>
           		</thead>

           		<tbody>	
					     <?php foreach ($bieren_array as $key => $bier): ?>
					     	<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'even' : '' ?>">
					     		<td><?= ($key + 1) ?></td>
					     		<?php foreach ($bier as $waarde): ?>
					     			<td><?= $waarde ?></td>
					     		<?php endforeach ?>
					     	</tr>
					     <?php endforeach ?>		
  				    </tbody>
           	</table>
            
        </section>  

    </body>
</html>
