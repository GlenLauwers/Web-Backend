<?php
	/*$beginwaarde	=	100000;
	$rentevoet		=	8;
	$aantal_jaar	=	10;*/

	$lijst	=	array 	(	'beginwaarde' 		=> 	100000,//beginsaldo
							'aantal_jaar'		=>	10,//aantal jaar
							'rentevoet'			=>	8,//procent
							'jaar'				=>	1, //interval van het jaar
							'historiek'			=>	array()//Lege array.
						);
	
	var_dump($lijst);
	/*function bereken_rente	($beginwaarde, $rentevoet, $aantal_jaar)
	{
		static $jaar_bijtellen	=	1; //begin van de berekening (na 1 jaar)
		static $lijst			=	array();

		$winst		=	$beginwaarde * ($rentevoet/100);
		$totaal		=	$beginwaarde + $winst;

		$lijst[]	=	'Na ' .$jaar_bijtellen.' jaar sparen heeft Hans €' .floor ($totaal). ' op z\'n rekening staan, en heeft hij een winst van €' .floor ($winst).'.';

		if ($jaar_bijtellen<$aantal_jaar)
		{
			++ $jaar_bijtellen;
			bereken_rente ($totaal, $rentevoet, $aantal_jaar);

		}

		return $lijst;
	}

	$winst_Hans	=	bereken_rente ($beginwaarde, $rentevoet, $aantal_jaar);*/

	function bereken_rente	($lijst)
	{
		while ( $jaar <= $aantal_jaar) 
		{
						
		}
		
	}

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing recursive</title>

    </head>
    <body>
        <h1>Oplossing recursive</h1>


    </body>
</html>
