<?php

    $getallen           =   array (1,2,3,4,5);
    $vermenigvuldiging  =   array_product($getallen);
    $aantal				=	count($getallen);
    $getallen_omgek		=	array_reverse($getallen);

    $oneven;
    foreach ($getallen as $value) 
    {
    	if ($value % 2 !=0) 
    	{
    		$oneven[] = $value;
    	}
    }

    $optellen;
    foreach ($$getallen as $key => $value) 
    {
    	if (isset($getallen_omgek [$key])) 
    	{
    		$getallenOpgeteld[ $key ]  =  $getallenReverse[ $key ] + $value;
    	}
    }

    var_dump(getallen)
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
        
            <h1 class="extra">Opdracht arrays basis: deel 2</h1>

            <ul>
                <li>Maak een array waarin je de getallen 1, 2, 3, 4, 5 in plaatst</li>

                <li>Vermenigvuldig alle getallen met elkaar en druk af naar het scherm</li>

                <li>Druk de oneven getallen af (controle in script, niet zelf selecteren welke je afdrukt)</li>

                <li>Maak een tweede array waarin je de getallen 5, 4, 3, 2, 1 in plaatst</li>

                <li>Tel de getallen uit beide arrays met dezelfde index met elkaar op</li>
            </ul>

        
        </section>

    </body>
</html>
