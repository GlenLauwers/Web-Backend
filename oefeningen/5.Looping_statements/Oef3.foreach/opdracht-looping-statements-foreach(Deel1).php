<?php
	$text						=	file_get_contents( 'text-file.txt' );
	$textChars					=	str_split( $text );
	rsort( $textChars );
	$alfa = array_reverse( $textChars );

	$lijst = array();

	foreach($alfa as $value)
	{
		if ( isset ( $lijst[ $value ] ) )
		{
			++$lijst[ $value ];
		}
		else
		{
			$lijst[ $value ] = 1;
		}
		
	}
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
        
            <h1>Opdracht foreach: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li> 

                <li>
                    Lees de tekst (text-file.txt) in en stop de tekst in een variabele <code>$text</code>
                    <span class="tip">Misschien helpt de functie <code>file_get_contents</code></span>
                </li>

                <li>Splits de tekst op per karakter en sla deze op in een array <code>$textChars</code> ( dus een array die bestaat uit waarden van maximum 1 karakter)</li>

                <li>Zorg ervoor dat deze array gesorteerd wordt van Z naar A</li>

                <li>Draai nu de volgorde van de array volledig om</li>

                <li>Zorg er nu voor dat je via een for-lus alle karakters van de tekst overloopt en bijhoudt hoeveel keer elk karakter voorkomt. Toon een lijst met:
                    <ul>
                        <li>Hoeveel verschillende karakters er in totaal voorkomen</li>
                        <li>Hoeveel elk karakter voorkomt.</li>
                    </ul>
                </li>
            </ul>

        </section>
      	<h1>Oplossing</h1>
		<pre><?php var_dump ($lijst) ?></pre>
		

    </body>
</html>
