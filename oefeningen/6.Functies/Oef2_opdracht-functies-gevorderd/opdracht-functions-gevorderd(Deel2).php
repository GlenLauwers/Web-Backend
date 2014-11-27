<?php
    $pig_health      =   5;
    $maximum_throws  =   8;
    $minimum_throws  =   0;

    $verloop_spel   =   array();

    function calculateHit ()
    {
        global $pig_health;
        $kans       =   rand(0,100);
        $raak       =   ( $kans <= 40 ) ? true : false;

        if ($raak)
        {
            --$pig_health;
            $array['geraakt']     =   true;
            $array['antwoord']    =   'Raak! Er zijn nog maar ' . $pig_health . ' varkens over.'; 
        }
        else
        {
            $array['geraakt']     =   false;
            $array['antwoord']    =   'Mis! Nog ' . $pig_health . ' varkens in het team.';
        }

        return $array;
    
    }

    function launchAngryBird ()
    {
        global $pig_health;
        global $maximum_throws;
        global $verloop_spel;

        if ( $maximum_throws != 0 && $pig_health > 0 )
        {
            $geraakt_resultaat = calculateHit( );
            --$maximum_throws;
            $verloop_spel[]  =   $geraakt_resultaat['antwoord'];
            launchAngryBird();
        }
        else
        {
            if ( $pig_health > 0 )
            {
               $verloop_spel[]   =   'Oh, jammer. Je hebt verloren.'; 
            }
            else
            {
                $verloop_spel[]   =   'Joepieeeeee! Je hebt gewonnen!';
            }
        }
    } 

    launchAngryBird( );
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies gevorderd: Deel 2</title>
    </head>
    <body>
    <h1>Oplossingen functies gevorderd: Deel 2</h1>
    <h2>Angry Birds</h2>
            <?php foreach( $verloop_spel as $resultaat ): ?>
                <p><?= $resultaat ?></p>
            <?php endforeach ?>
    </body>
</html>
