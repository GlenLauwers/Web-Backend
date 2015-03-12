<?php
    
    include('database.php');

    try
    {
        $db                 =   new PDO('mysql:host=localhost;dbname=bieren', 'root', '');
        $bericht            =   'Connectie met de database is gelukt.';


        $kolom              =    'bieren.biernr';
        $order              =    'ASC';
        $volgorde           =    '';
        $switch             =    ''; 
        
    
        if (isset( $_GET['orderBy']))
        {
            $lijst          =   explode('-', $_GET['orderBy']);
            $kolom          =   $lijst[0];
            $volgorde       =   $lijst[1];
        }

        $switch         =   ($volgorde != 'DESC') ? 'DESC':'ASC';

        $ordenen            =   $kolom. ' '. $volgorde; 

        

        $bieren_database    =   new database ($db);

        $bieren_query       =   "SELECT bieren.biernr,
                                        bieren.naam,
                                        brouwers.brnaam,
                                        soorten.soort,
                                        bieren.alcohol
                                    FROM bieren 
                                    INNER JOIN brouwers
                                    ON bieren.brouwernr = brouwers.brouwernr
                                    INNER JOIN soorten
                                    ON bieren.soortnr = soorten.soortnr 
                                    ORDER BY ".$ordenen;

        $resultaten         =   $bieren_database->query( $bieren_query );

        $kolomnaam          =   array_keys($resultaten[0]);

    }

    catch ( PDOException $e )
    {
        $bericht            =   'Er ging iets mis bij het inladen van de database: "' . $e->getMessage().'"';
    }

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing CRUD query - order by</title>
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
        </style>
    </head>

    <body class="web-backend-opdracht">

        <section class="body">
            
            <h1>Oplossing CRUD query - order by</h1>
            <p><?= $bericht ?></p>
            <a href="<?= $_SERVER['PHP_SELF'] ?>">Home</a>

            <form action="<?= $_SERVER['PHP_SELF'] ?>"  method="POST">

                <table>
                    <thead>
                        <tr>
                            <?php foreach ($kolomnaam as $key => $value): ?>
                                <th><a href="<?= $_SERVER['PHP_SELF'] ?>?orderBy=<?= $kolomnaam[ $key ] ?>-<?= $switch ?>"><?= $value ?></a></th>
                            <?php endforeach ?>
                        </tr>
                    </thead>
    
                    <tbody>
                        <?php foreach ($resultaten as $nummer => $resultaat): ?>
                            <tr >
                                <?php foreach ($resultaat as $kolomValue): ?>
                                    <td><?= $kolomValue ?></td>
                                <?php endforeach ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
        
            </form>
            
        </section>

    </body>
</html>
