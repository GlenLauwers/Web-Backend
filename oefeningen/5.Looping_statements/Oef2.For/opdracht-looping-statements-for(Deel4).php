<?php
    $tafelsMax    =    10;
    $tafels       =    array();

    for ($tafelcount =0; $tafelcount  <= $tafelsMax ; ++$tafelcount) 
    { 
        $tafelcontainer =   array();
       for ($product=0; $product <= 10 ; ++$product) 
       { 
           $tafelcontainer[ ] = $tafelcount * $product;
       }
    $tafel[$tafelcount] = $tafelcontainer;
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing for: deel4</title>
    </head>

 <h1>Oplossing for: deel4</h1>

		<table>	
			<thead>
				<th>Tafel</th>

				<?php for ( $productCounter = 0; $productCounter <= $tafelsMax; ++$productCounter): ?>
					
					<th><?= $productCounter ?></th>
					
				<?php endfor ?>
			</thead>
            
			<tbody>
			<?php foreach ($tafel as $tafels => $producten): ?>
				<tr>
					<td><?= $tafels ?></td>
					<?php foreach ($producten as $product ): ?>
						<td class="<?= ( $product % 2 > 0 ) ? 'oneven' : '' ?>"><?= $product ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
			</tbody>

		</table>
    </body>
</html>
