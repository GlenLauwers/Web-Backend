<?php

	$toegevoegd = '';


	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
		$bericht	=	'Connectie met de database is gelukt.';

		if (isset($_POST['submit'])) 
		{
			$brouwers_string 	= 'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet) 
									VALUES (:brnaam, :adres, :postcode, :gemeente, :omzet)';

			$statement 	= 	$db->prepare($brouwers_string);
	
			$statement->bindValue(':brnaam', $_POST[ 'brouwernaam']);
			$statement->bindValue(':adres', $_POST[ 'adres']);
			$statement->bindValue(':postcode', $_POST[ 'postcode']);
			$statement->bindValue(':gemeente', $_POST[ 'gemeente']);
			$statement->bindValue(':omzet', $_POST[ 'omzet']);
	
			$statement->execute( );

			if ($statement = true) 
			{
				$id 		=	$db->lastInsertId();
				$toegevoegd =  'Brouwerij succesvol toegevoegd. Het unieke nummer van deze brouwerij is "' . $id . '".';
			}

			else
			{
				$toegevoegd =	'Er ging iets mis met het toevoegen. Probeer opnieuw.';
			}
		}
	}

	catch ( PDOException $e )
	{
		$bericht	=	'Er ging iets mis bij het inladen van de database: "' . $e->getMessage().'"';
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing CRUD insert</title>

        <style>
        	#error{
        		color: red;
        	}

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

        <script src="script.js"></script>
    </head>

    <body>
        
        <section>
            
            <h1>Oplossing CRUD insert</h1>
            <p><?= $bericht ?></p>
            <div id="error"></div>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="formulier" onsubmit="return (valideren())">
            	<ul>
               	    <li>
               	        <label for="brouwernaam">Brouwernaam</label>
               	        <input type="text" id="brouwernaam" name="brouwernaam">
               	    </li>

               	    <li>
               	        <label for="adres">Adres</label>
               	        <input type="text" id="adres" name="adres">
               	    </li>

               	    <li>
               	        <label for="postcode">Postcode</label>
               	        <input type="text" id="postcode" name="postcode">
               	    </li>

               	    <li>
               	        <label for="gemeente">Gemeente</label>
               	        <input type="text" id="gemeente" name="gemeente">
               	    </li>

               	    <li>
               	        <label for="omzet">Omzet</label>
               	        <input type="text" id="omzet" name="omzet">
               	    </li>
               	</ul>

               	<input type="submit" name="submit">
            </form>

            <p><?=$toegevoegd ?></p>

        </section>     
    </body>
</html>