<?php

   function __autoload( $classname )
    {
        require_once( 'classes/' . $classname . '.php' );
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oplossing image manipulation gallery</title>

    <style type="text/css">

      input{
        display: block;
        margin-bottom: 10px;
      }

    </style>

  </head>
  <body>
    <h1>Oplossing image manipulation gallery</h1>

    <p><a href="fotogalerij.php">Fotogalerij</a></p>
    
    <form method="POST" action="upload.php" enctype="multipart/form-data">
      <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel">

      <label for="beschrijving">Beschrijving:</label>
        <input type="text" name="beschrijving" id="beschrijving">

      <label for="afbeelding">Afbeelding uploaden:</label>
        <input type="file" name="afbeelding" id="afbeelding">

      <input type="submit" name="toevoegen" value="Toevoegen">
    </form>

  </body>
</html>