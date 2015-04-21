<?php

    session_start();

    function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }

    $db = new PDO('mysql:host=localhost;dbname=Bootstrap_2', 'root', '');
    $email  =    $_SESSION['registratie']['email'];
    
    $message    =   Message::getMessage();
    $gebruikers_type = '';
    
    
    $query  =   'SELECT *
                    FROM personeel
                    where gebruikersnaam = "'. $gebruikersnaam.'"';

    $statement = $db->prepare($query);
    $statement->execute();

    while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
    {
        $gebruiker[] =   $row; 
    }

    if ($gebruiker[0]['user_type'] === '1') 
    {
        $gebruikers_type  =   'Webmaster';
    }

    if ($gebruiker[0]['user_type'] === '2') 
    {
        $gebruikers_type  =   'Gebruiker';
    }
  
    $_SESSION['gebruikers']['type']        =   $gebruikers_type;
  
    if (!isset($_COOKIE['authenticated'])) 
        {
            header('location: index.php');
        }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Geschenken</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Geschenken</h1>

            <p>U bent ingelogd als "<?= $email ?>" (<?= $gebruikers_type ?>) | <a href="logout.php">Uitloggen</a> </p>

            <?php if ( $message ): ?>
                <div class="modal <?= $message['type'] ?>">
                    <?= $message['text'] ?>
                </div>
            <?php endif ?>

            <ul>
                <li><a href="artikels.php">Artikels</a></li>
                <?php if ($gebruiker[0]['user_type'] === '2') : ?>
                    <li><a href="gegevens.php">Mijn gegevens wijzigen</a></li>
                <?php endif ?>
                <?php if ($gebruiker[0]['user_type'] === '1') : ?>
                    <li><a href="gegevens.php">Gegevens wijzigen</a></li>
                <?php endif ?>
            </ul>

        </section>
        
    </body>
</html>