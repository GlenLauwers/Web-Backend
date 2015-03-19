<?php

    session_start();

    function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=phpoefening030', 'root', '');
        $login   =   'index.php';
        $message    =   Message::getMessage();
        $gebruikers = array();
 
        if (isset($_COOKIE['authenticated'])) 
        {
            header('location: dashboard.php');
        }

        else
        {
            if (isset($_POST['submit'])) 
            {   

                $email  =   $_POST['email'];
                $wachtwoord = $_POST['wachtwoord'];

                $_SESSION['registratie']['email']        =   $email;
                $_SESSION['registratie']['wachtwoord']   =   $wachtwoord;

                $query  =   'SELECT email, password
                                FROM users
                                WHERE email = "'. $email.'"';

                $statement = $db->prepare($query);
                $statement->execute();

                while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
                {
                    $gebruikers[] =   $row; 
                }

                $hashed_wachtwoord =   hash( 'sha512', $wachtwoord );

                if (($gebruikers[0]['email'] === $email) && ($gebruikers[0]['password'] === $hashed_wachtwoord)) 
                {
                    header('location: dashboard.php');

                    $hashedEmail    =   hash( 'sha512', $email );
                    $cookieValue    =   $email . '##' . $hashedEmail;

                    $cookie =   setcookie( 'authenticated', $cookieValue, time() + 3600 );

                    $lastlogin  =   'UPDATE users 
                                        SET last_login  = NOW() 
                                        WHERE email = "'. $email.'"';

                    $statement  =   $db->prepare($lastlogin);
                    $statement->execute( );

                }

                else
                {
                    $inlogError = new Message ("error", "E-mailadres of wachtwoord is niet juist. Probeer opnieuw.");
                    header('location: ' . $login );
                }
               

            }
        }
    }
    
    catch ( PDOException $e )
    {
        $bericht    =   'Er ging iets mis bij het inladen van de database: "' . $e->getMessage().'"';
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing CRUD: CMS</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Oplossing CRUD: CMS</h1>

            <h2>Login</h2>

            

            <?php if ( $message ): ?>
                <div class="modal <?= $message['type'] ?>">
                    <?= $message['text'] ?>
                </div>
            <?php endif ?>

            <form action="index.php" method="post">
                <p>U bent nog niet ingelogd.</p>
                <label for="email">E-mail:</label> 
                    <input type="text" name="email" id="email">

                <label for="wachtwoord">Wachtwoord</label>
                    <input type="password" name="wachtwoord" id="wachtwoord">   

                <input type="submit" name="submit" value="log in">    

            </form>

            <p>Nog geen login? <a href="registreren.php">Registreer dan hier</a>.</p>
        </section>
        
    </body>
</html>