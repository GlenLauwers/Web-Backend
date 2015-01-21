<?php

  $bericht    = '';

	try
  {
    $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
    $bericht  = 'Connectie is gelukt.';
  }

  catch ( PDOException $e )
  {
    $bericht  = 'Er ging iets mis bij het inladen van de database: ' . $e->getMessage();
  }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing: CRUD query</title>

    </head>

    <body class="web-backend-opdracht">
      <section class="body">
        <h1>Oplossing: CRUD query: Deel 2</h1>
          <p><?php echo $bericht ?></p>

      </section>
    </body>
</html>
