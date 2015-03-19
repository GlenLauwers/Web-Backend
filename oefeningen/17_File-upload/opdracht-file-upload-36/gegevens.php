<?php

    session_start();

    function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=phpoefening030', 'root', '');
       
        $message    =   Message::getMessage();
        $email  =    $_SESSION['registratie']['email'];
        $gebruikers_type = $_SESSION['gebruikers']['type'];
        $fout =  '';


        $query  =   'SELECT *
                    FROM users
                    where email = "'. $email.'"';

        $statement = $db->prepare($query);
        $statement->execute();

        while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
        {
            $gebruiker[] =   $row; 
        }     

        $_SESSION['afbeelding'] = $gebruiker[0]['foto'];

        if (isset($_POST['wijzigen_gebruiker'])) 
        {
            if (!empty($_FILES['file']['name'])) 
            {
                if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/png"))
                && ($_FILES["file"]["size"] < 2000000)) 
                {
                    if ($_FILES["file"]["error"] > 0) 
                    {
                        $fout = "Fout." ;
                        header('location: gegevens.php');
                    } 
                    
                    else 
                    {
                        define('ROOT', dirname(__FILE__));
                        
                        if (file_exists(ROOT . "/img/" . $_FILES["file"]["name"])) 
                        {
                           $fout = "Bestand bestaat al" ;
                           header('location: gegevens.php');
                        } 
        
                        else 
                        {
                            move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $_FILES["file"]["name"]));
                            
                            $message[ 'type' ]  =   'success';
                            $message[ 'text' ]  =   '<p>Upload: ' . $_FILES["file"]["name"] .'</p>';
                            $message[ 'text' ]  =   '<p>Type: ' . $_FILES["file"]["type"] .'</p>';
                            $message[ 'text' ]  =   '<p>Size: ' . $_FILES["file"]["size"] / 1024 .'</p>';
                            $message[ 'text' ]  =   '<p>Temp file: ' . $_FILES["file"]["tmp_name"] .'</p>';
                            $message[ 'text' ]  =   '<p>Opgeslagen in: : ' . ROOT . "/img/" . $_FILES["file"]["name"] .'</p>';
                        }
                    }
        
                } 
                
                else 
                {
                    $fout = "Ongeldig bestand" ;
                    header('location: gegevens.php');
            
                }
        }
    
            $wachtwoord = $_POST['password'];
            
            $hashed_wachtwoord =   hash( 'sha512', $wachtwoord );
            $update_artikel    =   'UPDATE users
                                    SET     email   =   :email,
                                            password    =   :password,
                                            foto       =    :foto
                                    WHERE id     =   :id
                                    LIMIT 1';
            $statement = $db->prepare( $update_artikel );
            
            $statement->bindValue(":email", $_POST['email']); 
            $statement->bindValue(":id", $_POST['id']); 
            $statement->bindValue(":password", $hashed_wachtwoord);

            if ((!empty($_FILES['file']['name']) && ($_FILES['file']['type']  == "image/gif")
                                                    || ($_FILES["file"]["type"] == "image/jpeg")
                                                    || ($_FILES["file"]["type"] == "image/png")))
            {                    
                $statement->bindValue(":foto", 'img/'.$_FILES['file']['name']); 
            }

            else
            {
                $statement->bindValue(':foto', $_SESSION['afbeelding']);
            }

            $gedaan = $statement->execute( );
            if ($gedaan) 
            {
                $bewerk = new Message( "success", "De database is bewerkt." );
                header('location: gegevens.php');
            }
            else
            {
                $bewerk = new Message( "error", "De database is niet bewerkt. Probeer opnieuw" ); 
                header('location: gegevens.php');
                
            }                  
    }

    if (!isset($_COOKIE['authenticated'])) 
            {
                header('location: index.php');
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

            <h2>Gegevens</h2>

            <p>U bent ingelogd als "<?= $email ?>" (<?= $gebruikers_type ?>) | <a href="logout.php">Uitloggen</a> </p>

            <?php if ( $message ): ?>
                <div class="modal <?= $message['type'] ?>">
                    <?= $message['text'] ?>
                </div>
            <?php endif ?>

            <p>Terug naar <a href="dashboard.php">dashboard</a>.</p>

            <h3>Mijn gegevens aanpassen</h3>

            <?php foreach ($gebruiker as $key => $value): ?>
                
            <form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?= $value['id'] ?>" >
            
                <label for="email">E-mailadres:</label>
                    <input type="text" name="email" id="email" value="<?= $value['email'] ?>">
            
                <label for="password">Wachtwoord: </label>
                    <input type="password" name="password" id="password">

                <label for="file">Profielfoto:</label>
                    <input type="file" name="file" id="file" value="<?= $value['foto'] ?>">

                <input type="submit" name="wijzigen_gebruiker" value="Wijzigen">
            </form>

                <img class="profielfoto" src="<?= $value['foto']?>" alt="Profielfoto">
            <?php endforeach ?>
        </section>
        
    </body>
</html>