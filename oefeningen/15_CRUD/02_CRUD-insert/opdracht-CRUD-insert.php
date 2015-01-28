<?php

	$toegevoegd = '';

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
		$bericht	=	'Connectie is gelukt.';

		if (isset($_POST['submit'])) 
		{
			$brouwers_string 	= 'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet) 
									VALUES (:brnaam, :adres, :postcode, :gemeente, :omzet)';

			$statement 	= 	$db->prepare($brouwers_string);
	
			$statement->bindValue( ':brnaam', $_POST[ 'brouwernaam' ] );
			$statement->bindValue( ':adres', $_POST[ 'adres' ] );
			$statement->bindValue( ':postcode', $_POST[ 'postcode' ] );
			$statement->bindValue( ':gemeente', $_POST[ 'gemeente' ] );
			$statement->bindValue( ':omzet', $_POST[ 'omzet' ] );
	
			$statement->execute( );

			if ($statement = true) 
			{
				$id 		=	$db->lastInsertId();
				$toegevoegd =  'Brouwerij succesvol toegevoegd. Het unieke nummer van deze brouwerij is ' . $id . '.';
			}

			else
			{
				$toegevoegd =	'Er ging iets mis met het toevoegen. Probeer opnieuw.';
			}
			
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
        <title>Oplossing CRUD insert</title>

        <style>

    		form{
    			width: 100px;
    		}

    		li{
    			list-style-type: none;
    		}

        	input{
        		margin-bottom: 20px;
        	}

        </style>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Oplossing CRUD insert</h1>
            <p><?= $bericht ?></p>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            	<ul>
               	    <li>
               	        <label for="brouwernaam">Brouwernaam</label>
               	        <input type="text" id="brouwernaam" name="brouwernaam">
               	    </li>

               	    <li>
               	        <label for="adres">adres</label>
               	        <input type="text" id="adres" name="adres">
               	    </li>

               	    <li>
               	        <label for="postcode">postcode</label>
               	        <input type="text" id="postcode" name="postcode">
               	    </li>

               	    <li>
               	        <label for="gemeente">gemeente</label>
               	        <input type="text" id="gemeente" name="gemeente">
               	    </li>

               	    <li>
               	        <label for="omzet">omzet</label>
               	        <input type="text" id="omzet" name="omzet">
               	    </li>
               	</ul>

               	<input type="submit" name="submit">
            </form>

            <p><?=$toegevoegd ?></p>

        </section>     
    </body>
</html>
