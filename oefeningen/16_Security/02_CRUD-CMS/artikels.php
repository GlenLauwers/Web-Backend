<?php

    session_start();

    function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=phpoefening030', 'root', '');
        $artikel = array();
        
        $message    =   Message::getMessage();
        $email  =    $_SESSION['registratie']['email'];
        $gebruikers_type = $_SESSION['gebruikers']['type'];
        $verwijder = 1;

        $artikels  =   'SELECT *
                            FROM artikels
                            WHERE actief = 0';

        $statement  =   $db->prepare($artikels);
        $statement->execute( );

        while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
        {
            $artikel[] =   $row;
        }

        if (isset($_POST['wijzigen_artikel'])) 
        {
            $update_artikel    =   'UPDATE artikels
                                    SET     titel       =   :titel,
                                            artikel     =   :artikel,
                                            kernwoorden =   :kernwoorden,
                                            datum   =   NOW()
                                    WHERE id     =   :id';

            $statement = $db->prepare( $update_artikel );
            
            $statement->bindValue(":id", $_POST['id_edit']);
            $statement->bindValue(":titel", $_POST['titel_edit']);                      
            $statement->bindValue(":artikel", $_POST['artikel_edit']);                        
            $statement->bindValue(":kernwoorden", $_POST['kernwoorden_edit']); 

            $gedaan = $statement->execute( );

            if ($gedaan) 
            {
                $bewerk = new Message( "success", "De database is bewerkt." );

                header('location: artikels.php'); 
            }

            else
            {
                $bewerk = new Message( "error", "De database is niet bewerkt. Probeer opnieuw" ); 
                header('location: artikels.php'); 
            }
        }
        
        if (isset($_POST['confirm-verwijder'])) 
        {
            $update_artikel    =   'UPDATE artikels
                                        SET     actief    =   :actief,
                                                datum   =   NOW()
                                        WHERE id     =   :id';

            $statement = $db->prepare( $update_artikel );
            $statement->bindValue(":actief", $verwijder);
            $statement->bindValue(":id", $_POST['id']);
            
            $gedaan = $statement->execute( );

            if ($gedaan) 
            {
                $verwijder = new Message( "success", "Het artikel is verwijderd." );

                header('location: artikels.php'); 
            }

            else
            {
                $bewerk = new Message( "error", "Het artikel is niet verwijderd. Probeer opnieuw" ); 
                
                header('location: artikels.php'); 
            }
        }

        if (isset($_POST['toevoegen'])) 
        {
            $nieuw_artikel   =   'INSERT INTO artikels (titel, artikel, kernwoorden, actief, datum)
                                                VALUES (:titel, :artikel, :kernwoorden, 0, NOW()) ';

            $statement  =   $db->prepare($nieuw_artikel);
    
            $statement->bindValue(':titel', $_POST['titel']);
            $statement->bindValue(':artikel', $_POST['artikel']);
            $statement->bindValue(':kernwoorden', $_POST['kernwoorden']);

            $statement->execute( );

            $nieuwartikelsucces = new Message("success", "Nieuw artikel is toegevoegd.");
            header('location: artikels.php');
        }

        if (isset($_POST['confirm-edit'])) {
           
        
            $artikels  =   'SELECT *
                            FROM artikels
                            WHERE id = "'. $_POST['confirm-edit'].'"';

            $statement  =   $db->prepare($artikels);
            $statement->execute( );
    
            while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
            {
                $artikel_bewerk[] =   $row;
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

            <h2>Artikels</h2>

            <p>U bent ingelogd als "<?= $email ?>" (<?= $gebruikers_type ?>) | <a href="logout.php">Uitloggen</a> </p>

            <?php if ( $message ): ?>
                <div class="modal <?= $message['type'] ?>">
                    <?= $message['text'] ?>
                </div>
            <?php endif ?>

            <?php if ($gebruikers_type === 'Webmaster'): ?>
                <form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST">
                    <button class="nieuwartikel" type="submit" id="nieuw_artikel" name="nieuw_artikel">Nieuw artikel toevoegen</button>
                </form>
            <?php endif ?>
            
            <p>Terug naar <a href="dashboard.php">dashboard</a>.</p>
            <div class="links">
                <?php foreach ($artikel as $key => $value): ?>
                    <form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST">
                        <input type="hidden" name="id" id="id_edit" value="<?= $value['id'] ?>">
                        <h3>Titel: <?= $value['titel'] ?></h3>     
                            
                        <ul>
                            <li><b>Artikel: </b><?= $value['artikel'] ?></li>
                            <li><b>Kernwoorden: </b><?= $value['kernwoorden'] ?></li>
                            <li><b>Datum: </b><?= $value['datum'] ?></li>
                        </ul>    
                            <?php if ($gebruikers_type === 'Webmaster'): ?>
                                <button type="submit" id="confirm-edit" name="confirm-edit" value="<?= $value['id'] ?>">Wijzigen</button>
                                <button type="submit" id="confirm-verwijder" name="confirm-verwijder" value="<?= $value['id'] ?>">Verwijderen</button>
                            <?php endif ?>
                    </form>
                <?php endforeach ?>
            </div>

            <?php if (empty($artikel)): ?>
                <p>Geen artikels gevonden</p>
            <?php endif ?>
            <div class="rechts">
                <?php if (isset($_POST['confirm-edit'])): ?>
                    <?php foreach ($artikel_bewerk as $key => $value): ?>
                        <div class="formulier"> 
                            <h3>Bewerken</h3>
        
                            <form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST">
                                <input type="hidden" name="id_edit" id="id_edit" value="<?= $value['id'] ?>">
            
                                <label for="titel_edit">Titel:</label>
                                    <input type="text" name="titel_edit" id="titel_edit" value="<?= $value['titel'] ?>">
            
                                <label for="artikel_edit">Artikel: </label>
                                    <input type="text" name="artikel_edit" id="artikel_edit" value="<?= $value['artikel'] ?>">
            
                                <label for="kernwoorden_edit">Kernwoorden:</label>
                                    <input type="text" name="kernwoorden_edit" id="kernwoorden_edit" value="<?= $value['kernwoorden'] ?>">
            
                                <input type="submit" name="wijzigen_artikel" value="Wijzigen">
                            </form> 
                        </div>
                    <?php endforeach ?>
                <?php endif ?>

                <?php if (isset($_POST['nieuw_artikel'])): ?>
                    <div class="formulier"> 
                        <h3>Nieuw artikel toevoegen</h3>

                        <form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST">
                            <label for="titel">Titel: </label>
                                <input type="text" id="titel" name="titel">

                            <label for="artikel">Artikel: </label>
                                <input type="text" id="artikel" name="artikel">

                            <label for="kernwoorden">Kernwoorden: </label>
                                <input type="text" id="kernwoorden" name="kernwoorden">

                            <input type="submit" name="toevoegen" value="toevoegen">
                        </form>
                    </div>
                <?php endif ?>
            </div>
        </section>        
    </body>
</html>