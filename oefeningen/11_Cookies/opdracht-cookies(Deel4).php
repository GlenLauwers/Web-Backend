<?php
    $tekst_bestand  =   file_get_contents('tekst2.txt');
    $array          =   JSON_decode( $tekst_bestand, true);
    $bericht        =   false;
    $uniek          =   false;

   //var_dump($array);
   
    if (isset( $_GET['loguit']))
    {
        setcookie('uniek', '', time() - 1000);
        header('location: opdracht-cookies(Deel4).php');
    }

	if (isset($_POST['submit']))
		{
			foreach ($array as $id => $lijst)
			{
				if ( $_POST['gebruikersnaam'] 	=== $lijst['username'] &&
					 $_POST['paswoord'] 		=== $lijst['password'])
				{
					$tijd_bewaring	=	(isset($_POST['onthouden']) ? (time() + 60*60*24*30) : time() + 3600);
					setcookie('uniek', $id, $tijd_bewaring);
					header('location: opdracht-cookies(Deel4).php');
				}
			}
	
			$bericht = 'Oeps!! Er ging iets mis. :-(  Probeer opnieuw.';		
		}
	
	if (isset($_COOKIE['uniek']))
	{
		$userId		=	$_COOKIE['uniek'];
		$bericht	=	'Welkom ' . $array[$userId]['username'] . '. U bent ingelogd.';
		$uniek		=	true;
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing cookies: deel 4</title>
    </head>
    <body>
    
    <section>
        <h1>Oplossing cookies: deel 4</h1>
        
        <?php if ($bericht): ?>
            <p><?= $bericht ?></p>
        <?php endif ?>

        <?php if (!$uniek ): ?>
            <form action="opdracht-cookies(Deel4).php" method="post">      
                <ul>
                    <li><label for="gebruikersnaam">gebruikersnaam: </label>
                    <input type="text" name="gebruikersnaam" id="gebruikersnaam"></li>
        
                    <li><label for="paswoord">paswoord:</label>
                    <input type="password" name="paswoord" id="paswoord"></li>

                    <li><label for="onthouden">Mij onthouden: </label>
                    <input type="checkbox" name="onthouden" id="onthouden"></li>

                </ul>

                    <input type="submit" name="submit" value="Verzenden">
            </form>

        <?php else: ?>
                <p><a href="opdracht-cookies(Deel4).php?loguit=true">klik hier</a> om uit te loggen.</p>
        <?php endif ?>

    </section>
    </body>
</html>
