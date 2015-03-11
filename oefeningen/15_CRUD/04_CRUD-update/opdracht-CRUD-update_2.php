<?php
    
    $brouwers_naam  =   array();
    $brouwers       =   array();
    $verwijder      =   false;
    $bevestiging    =   false;
    $edit           =   false;
    $bewerken       =   false;
    $gedaan         =   false;
    $toegevoegd     =   false;

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
        $bericht    =   'Connectie met de database is gelukt.';

        if (isset($_POST['submit'])) 
        {
            $brouwers_string    = 'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet) 
                                             VALUES (:brnaam, :adres, :postcode, :gemeente, :omzet)';

            $statement  =   $db->prepare($brouwers_string);
    
            $statement->bindValue(':brnaam', $_POST[ 'brouwernaam']);
            $statement->bindValue(':adres', $_POST[ 'adres']);
            $statement->bindValue(':postcode', $_POST[ 'postcode']);
            $statement->bindValue(':gemeente', $_POST[ 'gemeente']);
            $statement->bindValue(':omzet', $_POST[ 'omzet']);
    
            $statement->execute( );

            if ($statement = true) 
            {
                $id         =   $db->lastInsertId();
                $toegevoegd =  'Brouwerij succesvol toegevoegd. Het unieke nummer van deze brouwerij is "' . $id . '".';
            }

            else
            {
                $toegevoegd =   'Er ging iets mis met het toevoegen. Probeer opnieuw.';
            }
        }

        if ( isset( $_POST[ 'confirm-delete' ] ) )
        {
            $bevestiging  =   true;
            $verwijderen       =   $_POST[ 'confirm-delete' ];
        }

        if (isset($_POST['delete'])) 
        {
            $verwijder_query =  'DELETE FROM brouwers 
                                    WHERE brouwernr = :brouwernr
                                    LIMIT 1';

            $del_statement  =   $db->prepare($verwijder_query);
            $del_statement->bindValue( ':brouwernr', $_POST['delete'] );
            $deleted  =   $del_statement->execute();


            if ($deleted) 
            {
                $verwijder  =   'De datarij werd goed verwijderd.';
            }
    
            else
            {
                $verwijder =   'De datarij kon niet verwijderd worden. Probeer opnieuw.';
            }
        }

        if (isset($_POST['confirm-edit']))
        {
            $edit   =   query( $db, 'SELECT * FROM brouwers WHERE brouwernr = :brouwernr', array( ':brouwernr' => $_POST[ 'confirm-edit' ] ) );
        
        }
        if (isset($_POST['edit'])) 
        {
            $update_query    =   'UPDATE brouwers
                                    SET brnaam          =   :brnaam,
                                            adres       =   :adres,
                                            postcode    =   :postcode,
                                            gemeente    =   :gemeente,
                                            omzet       =   :omzet
                                    WHERE brouwernr = :brouwernr
                                    LIMIT 1';

            $statement = $db->prepare( $update_query );
            
            $statement->bindValue( ":brouwernr",  $_POST[ 'brouwernr' ] );                      
            $statement->bindValue( ":brnaam",  $_POST[ 'brnaam' ] );                        
            $statement->bindValue( ":adres",  $_POST[ 'adres' ] );                      
            $statement->bindValue( ":postcode",  $_POST[ 'postcode' ] );                        
            $statement->bindValue( ":gemeente",  $_POST[ 'gemeente' ] );                        
            $statement->bindValue( ":omzet",  $_POST[ 'omzet' ] );
    
            $gewijzigd = $statement->execute( );

            if ($gewijzigd) 
            {
                $gedaan    =   'Update op de brouwer ' . $_POST[ 'brnaam' ] . ' succesvol uitgevoerd.';
            }

            else
            {
                $gedaan     =   'Update op de brouwer ' . $_POST[ 'brnaam' ] . ' kon niet uitgevoerd worden. Probeer opnieuw. Bij aanhoudende problemen, contacteer de <a href="mailto:bilgates@microsoft.com">systeembeheerder</a>.';
            }
        }
        

        $brouwer_query  =   'SELECT *
                                FROM brouwers';

        $br_statement  =   $db->prepare($brouwer_query);
        $br_statement->execute( );

        for ( $fieldNumber = 0; $fieldNumber < $br_statement->columnCount(); ++$fieldNumber )
        {
            $brouwers_naam[]   =   $br_statement->getColumnMeta( $fieldNumber )['name'];
        }

        while( $row = $br_statement->fetch( PDO::FETCH_ASSOC ) )
        {
            $brouwers[] =   $row;
        }

    }

    catch ( PDOException $e )
    {
        $bericht    =   'Er ging iets mis bij het inladen van de database: "' . $e->getMessage().'"';
    }

        function query( $db, $query, $tokens = false )
    {
        $statement = $db->prepare( $query );
        
        if ( $tokens )
        {
            foreach ( $tokens as $token => $tokenValue )
            {
                $statement->bindValue( $token, $tokenValue );
            }
        }

        $statement->execute();

        $fieldnames =   array();

        for ( $fieldNumber = 0; $fieldNumber < $statement->columnCount(); ++$fieldNumber )
        {
            $fieldnames[]   =   $statement->getColumnMeta( $fieldNumber )['name'];
        }

        $data   =   array();

        while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
        {
            $data[] =   $row;
        }

        $returnArray['fieldnames']  =   $fieldnames;
        $returnArray['data']        =   $data;

        return $returnArray;
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing CRUD update</title>

        <style>

            table
            {
                font-size:12px;
                overflow:auto;
            }

            table th,table td
            {
                padding:4px;
            }

            table th
            {
                background: #DFDFDF;
                text-align:center;
            }

            table tr
            {
                transition: all 0.2s ease-out;
            }

            table tr:hover
            {
                background-color:lightgreen;
            }

            tr:nth-child(odd)
            {
                background: #F1F1F1;
            }

            .confirm-delete
            {
                background-color    :   red;
                color               :   white;
            }

            .lijst{
                float: left;
            }

            .formulier{
                float: right;
                margin-right: 90px;
                width: 100px;
            }

            li{
                list-style-type: none;
            }

            input{
                margin-bottom: 20px;
            }



        </style>
    </head>

    <body>
        <section>
            
            <h1>Oplossing CRUD update: deel 1</h1>
            <p><?= $bericht ?></p>
            <p><?= $verwijder ?></p>
            <p><?= $gedaan ?></p>
            <?php if ( $bevestiging ): ?>
                <div>
                    Bent u zeker dat u deze record wilt verwijderen?
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <button type="submit" name="delete" value="<?= $verwijderen ?>">
                            ja
                        </button>
        
                        <button type="submit">
                            neen
                        </button>
                    </form>
                </div>
            <?php endif ?>

            <?php if ( $edit ): ?>
        <div>
            <h1>Brouwerij <?= $edit['data'][0]['brnaam']?> (#<?= $edit['data'][0]['brouwernr']?>) wijzigen</h1>
            <form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST">
                <ul>
                    <?php foreach ($edit['data'][0] as $fieldname => $value): ?>
                        
                        <?php if ( $fieldname != "brouwernr" ): ?>
                            <li>
                                <label for="<?= $fieldname ?>"><?= $fieldname ?></label>
                                <input type="text" id="<?= $fieldname ?>" name="<?= $fieldname ?>" value="<?= $value ?>">
                            </li>
                        <?php endif ?>
                        
                    <?php endforeach ?>
                </ul>
                <input type="hidden" value="<?= $edit['data'][0]['brouwernr'] ?>" name="brouwernr">
                <input type="submit" name="edit" value="Wijzigen">
            </form>
        </div>
    <?php endif ?>

            <form class="lijst" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <?php foreach ($brouwers_naam as $naam): ?>
                                <th><?= $naam ?></th>
                            <?php endforeach ?>
                            <th></th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php foreach ($brouwers as $key => $brouwer): ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <?php foreach ($brouwer as $value): ?>
                                    <td><?= $value ?></td>
                                <?php endforeach ?>

                                <td>
                                    <button type="submit" name="confirm-delete" value="<?= $brouwer['brouwernr'] ?>" class="delete-button">
                                        <img src="icon-delete.png" alt="Delete button">
                                    </button>

                                    <button type="submit" name="confirm-edit" value="<?= $brouwer['brouwernr'] ?>" class="edit-button">
                                        <img src="icon-edit.png" alt="edit button">
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>                        
                    </tbody>       
                </table>
            </form>

            <form class="formulier" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="formulier" onsubmit="return (valideren())">
                <h1>Brouwerij toevoegen</h1>
                <ul>
                    <li>
                        <label for="brouwernaam">Brouwernaam</label>
                        <input type="text" id="brouwernaam" name="brouwernaam">
                    </li>

                    <li>
                        <label for="adres">Adres</label>
                        <input type="text" id="adres" name="adres">
                    </li>

                    <li>
                        <label for="postcode">Postcode</label>
                        <input type="text" id="postcode" name="postcode">
                    </li>

                    <li>
                        <label for="gemeente">Gemeente</label>
                        <input type="text" id="gemeente" name="gemeente">
                    </li>

                    <li>
                        <label for="omzet">Omzet</label>
                        <input type="text" id="omzet" name="omzet">
                    </li>
                </ul>

                <input type="submit" name="submit">
            </form>

            <p><?=$toegevoegd ?></p>
        </section>
    </body>
</html>
