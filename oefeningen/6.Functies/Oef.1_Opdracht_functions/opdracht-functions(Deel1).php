<?php

	function berekenSom ($getal1, $getal2)
	{
		$berekening	=	$getal1 + $getal2;
		return $berekening; 
	}

	$oplossing_opt 	=	berekenSom(1,4);


	function bereken_verm ($getal1, $getal2)
	{
		$berekening	=	$getal1 * $getal2;
		return $berekening; 
	}

	$oplossing_ver 	=	bereken_verm(3,4);

	function even ($getal)
	{
		if ($getal %2 == 0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	$oplossing_even	=	even(3);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies: deel 1</h1>

            <ul>

                <li>Maak een functie <code>berekenSom</code> die 2 parameters heeft, <code>$getal1</code> en <code>$getal2</code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie de som van de twee getallen wordt berekend.</li>
                        <li>Deze functie returnt het resultaat</li>
                        <li>
                            <p class="remark">Zorg ervoor dat de functie enkel een waarde returnt. Het afdrukken moet buiten de functie gebeuren. 
                                Het combineren van meerdere functionaliteiten in één functie vermindert de herbruikbaarheid van de functie. Probeer vanaf nu te vermijden dat een functie meerdere dingen doet (zoals berekenen én afdrukken), ook al lijkt dit in het begin meer werk.</p>
                        </li>
                    </ul>
                </li>


                <li>Maak een functie <code>vermenigvuldig</code> die 2 parameters heeft, <code>$getal1</code> en <code>$getal2</code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie het product wordt berekend.</li>
                        <li>Deze functie returnt het resultaat</li>
                    </ul>
                </li>

                <li>Maak een functie <code>isEven</code> met 1 parameter <code>$getal</code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie een boolean returnt die afhankelijk van het gegeven getal <code>true</code> of <code>false</code> is.</li>
                    </ul>
                </li>

                <li>Voer al deze functies uit en zorg ervoor dat de resultaten op het scherm verschijnen</li>

                <li class="extension">Maak een functie aan die de lengte én de uppercase-versie van een string returnt. Druk daarna de lengte en de uppercase-versie van de string af buiten de functie. <span class="tip">return een array.</span></li>

            </ul>
       	<h1>Oplossingen</h1>
       	<p>Optelling:<?=$oplossing_opt ?></p>
       	<p>Vermenigvuldiging:<?=$oplossing_ver ?></p> </p>
       	<p>Is het getal even? <pre><?php var_dump($oplossing_even)?></pre></p>
        </section>

    </body>
</html>
