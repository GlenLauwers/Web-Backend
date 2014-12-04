<?php

    $wachtwoord   =   'azerty';
    $gebruiker   =   'stijn';
    $bericht    =   'Welkom';


    if( isset($_POST['Verzenden']))
    {
        if ($_POST['Gebruikersnaam'] == $gebruiker && $_POST['Wachtwoord'] == $wachtwoord)
        {
            $bericht    =   'Hallo ' . $gebruiker .'. Hoe gaat het ermee?';
        }
       
        else
        {
            $bericht    =   'Oei!! Hier liep iets mis. Gelieve opnieuw in te loggen.';
        }
    }

    //var_dump($_POST);
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing post</title>
    </head>

    <body class="web-backend-opdracht">
        
        <section>
        
            <h1>Oplossing post</h1>
            
            <h2>Log in.</h2>

            <p><?= $bericht ?></p>

            <form action="opdracht-post.php" method="POST">
                <ul>
                    <li>
                        <label for="Gebruikersnaam">Gebruikersnaam:</label>
                        <input type="text" name="Gebruikersnaam" id="Gebruikersnaam">
                    </li>
                    <li>
                        <label for="Wachtwoord">Wachtwoord:</label>
                        <input type="password" name="Wachtwoord" id="Wachtwoord">
                    </li>
                </ul>
    
                <input type="submit" name="Verzenden" value="Verzenden">
            </form>
        
        </section>

    </body>
</html>
