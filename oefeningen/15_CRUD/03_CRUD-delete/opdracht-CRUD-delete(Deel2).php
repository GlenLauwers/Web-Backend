<?php
    
    $brouwers_naam  =   array();
    $brouwers       =   array();
    $verwijder      =   false;
    $bevestiging  =   false;

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
        $bericht    =   'Connectie met de database is gelukt.';

        if ( isset( $_POST[ 'confirm' ] ) )
        {
            $bevestiging  =   true;
            $verwijderen       =   $_POST[ 'confirm' ];
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

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing CRUD delete</title>

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
        </style>
    </head>

    <body>
        <section>
            
            <h1>Oplossing CRUD delete: deel 2</h1>
            <p><?= $bericht ?></p>
            <p><?= $verwijder ?></p>
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

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
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
                                    <button type="submit" name="confirm" value="<?= $brouwer['brouwernr'] ?>" class="delete-button">
                                        <img src="icon-delete.png" alt="Delete button">
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>                        
                    </tbody>       
                </table>
            </form>
        </section>
    </body>
</html>
