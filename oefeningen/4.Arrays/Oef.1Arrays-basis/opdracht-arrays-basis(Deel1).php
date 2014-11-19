<?php
	$dieren []	=	"Hond";
	$dieren []	=	"Kat";
	$dieren []	=	"Vogel";
	$dieren []	=	"Schildpad";
	$dieren []	=	"Cavia";
    $dieren []  =   "Schaap";

	var_dump($dieren);

	$dieren = array ('Hond', 'Kat', 'Vogel', 'Schildpad', 'Cavia', 'Schaap');
	
	var_dump($dieren);

	$voertuigen	=	array (	'landvoertuigen'=> array ('vespa', 'fiets'),
							'watervoertuigen' => array ('surfplank', 'vlot', 'schoener', 'driemaster'),
							'luchtvoertuigen' => array ('luchtballon', 'helicopter', 'B52'));

	var_dump($voertuigen);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht arrays basis: deel 1</h1>

            <ul>

                <li>Maak een array waarin je 10 dieren opslaat( doe dit op 2 verschillende manieren )</li>

                <li>Maak een nieuwe array met daarin 5 voertuigen, zorg er voor dat je kan bepalen om welke categorie van voertuig het gaat ( 2-dimensionele array), zoals 'landvoertuigen', 'watervoertuigen', 'luchtvoertuigen'. 
                <p>Wanneer je een <code>var_dump</code> van deze array doet, ziet het resultaat er ongeveer als volgt uit:</p>
                    
                    <ul class="array-notation pre">
                        <li>
                            [ 'landvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'Vespa'</li>
                                <li>[ 1 ] => 'fiets'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'watervoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'surfplank'</li>
                                <li>[ 1 ] => 'vlot'</li>
                                <li>[ 2 ] => 'schoener'</li>
                                <li>[ 3 ] => 'driemaster'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'luchtvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'luchtballon'</li>
                                <li>[ 1 ] => 'helicopter'</li>
                                <li>[ 2 ] => 'B52'</li>
                            </ul>
                        </li>
                    </ul>

                </li>

            </ul> 
        
        </section>

    </body>
</html>
