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
        <title>Opdracht while</title>
        <style>
            .even {
                background-color: green;
            }
        </style>
    </head>
 <h1>Opdracht for: deel4 - uitbreiding</h1>

        <ul>
            
            <li>Maak een <code>&lt;thead&gt;</code> aan en plaats in een <code>&lt;th&gt;</code>  op de eerste kolom het woord "tafel" en op de volgende kolommen de producten waarmee de tafel wordt vermenigvuldigd.</li>

            <li>Zorg ervoor dat in de <code>&lt;tbody&gt;</code> op de eerste <code>&lt;td&gt;</code> de tafel komt te staan en op de volgende <code>&lt;thead&gt;</code>'s het product van de tafel.</li>

            <li>
                Het resultaat ziet er ongeveer als volgt uit:

                <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                    <table>
                
                        <thead>
                            <th>Tafel</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>        
                        </thead>

                        <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td class="oneven">1</td>
                                <td>2</td>
                                <td class="oneven">3</td>
                                <td>4</td>
                                <td class="oneven">5</td>
                                <td>6</td>
                                <td class="oneven">7</td>
                                <td>8</td>
                                <td class="oneven">9</td>
                                <td>10</td>
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>0</td>
                                <td>2</td>
                                <td>4</td>
                                <td>6</td>
                                <td>8</td>
                                <td>10</td>
                                <td>12</td>
                                <td>14</td>
                                <td>16</td>
                                <td>18</td>
                                <td>20</td>
                            </tr>
                            
                            <tr>
                                <td>3</td>
                                <td>0</td>
                                <td class="oneven">3</td>
                                <td>6</td>
                                <td class="oneven">9</td>
                                <td>12</td>
                                <td class="oneven">15</td>
                                <td>18</td>
                                <td class="oneven">21</td>
                                <td>24</td>
                                <td class="oneven">27</td>
                                <td>30</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </li>
        </ul>
        <h1>Oplossingen</h1>
		
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
