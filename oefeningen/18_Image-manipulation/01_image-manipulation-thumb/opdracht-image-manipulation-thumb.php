<?php
    
    $bestandsnaam = '';

    if (isset($_POST['uploaden']))
    {

        include ('file.php');
        include ('afbeelding.php');

    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing Image Manipulation: thumb</title>

        <style type="text/css">
            input{
                display: block;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1>Oplossing Image Manipulation: thumb</h1>


            <form method="POST" action="<?= $_SERVER[ 'PHP_SELF' ] ?>" enctype="multipart/form-data">
                <label for="file">Foto uploaden:</label>
                    <input type="file" name="file" id="file">

                <input type="submit" name="uploaden" value="Uploaden">
            </form>

            <?php if (isset($_POST['uploaden'])): ?>
                <img src="img/thumb/<?= $bestandsnaam ?>_thumb.jpg" alt="profielfoto">
            <?php endif ?>
        </section>        
        
    </body>
</html>
