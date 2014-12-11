<?php
    $tekst_bestand  =   file_get_contents('tekst1.txt');
    $array          =   explode( ',', $tekst_bestand);  
    $bericht        =   false;
    $uniek          =   false;

    if (isset( $_GET['loguit']))
    {
        setcookie('uniek', '', time() - 1000);
        header('location: opdracht-cookies(Deel2).php');
    }

    if (!isset($_COOKIE['uniek']))
    {
        if (isset($_POST['submit']))
        {
            if ( $_POST['gebruikersnaam']   == $array[0] &&
                 $_POST['paswoord']         == $array[1] &&
                 $_POST['onthouden']       ==  false)
            {
                setcookie('uniek', true, time() + 3600);
                header('location: opdracht-cookies(Deel2).php');
            }
            
            if ( $_POST['gebruikersnaam']   == $array[0] &&
                 $_POST['paswoord']         == $array[1] &&
                 $_POST['onthouden']        == true)
            {

                setcookie('uniek', true, time() + 2595600);
                header('location: opdracht-cookies(Deel2).php');
            }

            else
            {
                $bericht = 'Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.';
            }
        }
    }
    else
    {
        $bericht    =   'Welkom, u bent ingelogd.';
        $uniek      =   true;
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing cookies: deel 2</title>
    </head>
    <body>
    <section>
        <h1>Oplossing cookies: deel 2</h1>
        
        <?php if ($bericht): ?>
            <?= $bericht ?>
        <?php endif ?>

        <?php if (!$uniek ): ?>
            <form action="opdracht-cookies(Deel2).php" method="post">      
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
                <p><a href="opdracht-cookies(Deel2).php?loguit=true">klik hier</a> om uit te loggen.</p>
        <?php endif ?>

    </section>
    </body>
</html>
