<?php

    $artikels   =   array(  array ( 'titel' =>'Bondscoach Wilmots polst deze topper van Marseille voor Rode Duivels',
                                    'datum' =>'3 december 2014',
                                    'afbeelding' => '1.jpg',
                                    'foto_besch' => 'Voetballers spelen een voetbalwedstrijd.',
                                    'beschrijving' => 'Opvallend nieuws in L\'Equipe: de Franse sportkrant meldt dat bondscoach Marc 
                                     Wilmots heeft gepolst naar de intenties van Giannelli Imbula, een 22-jarige Frans-Congolese 
                                     middenvelder van Olympique Marseille die geboren werd in Vilvoorde. Imbula, die linksvoetig is en 
                                     een enorm actieradius heeft, kwam voorlopig nog niet verder dan de Franse beloftenploeg.'),
    
                            array ( 'titel' =>'Wippelgem krijgt Luc De Vos straat',
                                    'datum' =>'3 december 2014',
                                    'afbeelding' => '2.jpg',
                                    'foto_besch' => 'Man tekent het rouwregister.',
                                    'beschrijving' => 'Luc De Vos krijgt in zijn geboortedorp Wippelgem een straat of plein dat naar 
                                     hem wordt genoemd. Het gemeentebestuur van Evergem wil de betreurde artiest zo de eeuwigheid in sturen. 
                                     Op het Kasteel van Wippelgem is gisteren ook een rouwregister geopend dat al door enkele tientallen mensen 
                                     werd ondertekend. Het register ligt er nog tot vrijdag.'),

                            array ( 'titel' =>'Daar is de eerste sneeuw',
                                    'datum' =>'3 december 2014',
                                    'afbeelding' => '3.jpg',
                                    'foto_besch' => 'Sneeuw op de auto.',
                                    'beschrijving' => 'Een dag nadat de weerkundige winter van start ging, dwarrelden gisteravond de eerste 
                                     sneeuwvlokjes naar beneden in Vlaanderen. Ook aan de andere kant van het land zag het hier en daar 
                                     mooi wit met plaatselijk een laagje van 2 tot 4 cm. Van een perfecte timing gesproken.')
                            );


    $individueel_artikel        =   false;
    $niet_bestaand_artikel      =   false;

    if ( isset ( $_GET['id'] ) )
    {
        $id = $_GET['id'];

           if ( array_key_exists( $id , $artikels ) )
           {
               $artikels               =   array( $artikels[$id] );
               $individueel_artikel    =   true;
           }
           else
           {
               $niet_bestaand_artikel  =   true;
           }       
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php if ( !$individueel_artikel ): ?>
        <title>Oplossing get</title>

    <?php elseif ( $niet_bestaand_artikel ): ?>
        <title>Oplossing get - Het artikel bestaat niet</title>

    <?php else: ?>
        <title>Oplossing get. <?php echo $artikels[0]['titel'] ?></title>
    <?php endif ?>
        
    <style>
        .body
        {
            font-family:"Segoe UI";
            color:#423f37;
        }

        .container
        {
            width:  1024px;
            margin: 0 auto;
            width: 600px;
            float: left;
            background-color: lightgrey;
        }

        article
        {
            display: block;
        }
        img
        {
            width: 400px;
            margin-right: 100px;
            margin-left: 100px;
        }

        .beschrijving
        {
            text-align: center;
            font-weight: bold;
        }


    </style>
</head>
<body>

    <h1>Oplossing get</h1>

    <?php if (!$niet_bestaand_artikel): ?>

        <div class="container">

            <?php foreach ( $artikels as $id => $waarde ): ?>

                <article >
                    <h1><?php echo $waarde['titel'] ?></h1>

                    <p><?php echo $waarde['datum'] ?></p>

                    <img src="img/<?php echo $waarde['afbeelding'] ?>" alt="<?php echo $waarde['foto_besch'] ?>">  

                    <p><?php echo (!$individueel_artikel) ? substr( $waarde['beschrijving'], 0, 50 ) . '...': str_replace ( "\r\n", "</p><p>",$waarde['beschrijving'] ) ; ?></p>

                    <?php if (!$individueel_artikel): ?>
                        <a href="opdracht-get.php?id=<?php echo $id ?>">Lees meer</a>
                    <?php endif ?>

                </article>
            <?php endforeach ?>

        </div>

    <?php else: ?>
        <p>Niet gevonden.</p>
    <?php endif ?>

</body>
</html>