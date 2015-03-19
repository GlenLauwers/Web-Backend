<?php

    session_start();

    function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }



    $connection     =    new PDO( 'mysql:host=localhost;dbname=phpoefening029', 'root', '' );
    if ( Gebruikers::validate( $connection ) )
    {
        $message    =   Message::getMessage();
    }
    else
    {
        Gebruikers::logout();
        new Message('error', 'Er ging iets mis tijdens het inloggen, probeer opnieuw.');
        header( 'location: index.php' );
    }
?>

<!DOCTYPE html>
    <html>
    <head>
    
        <style>
            .modal
            {
                margin:5px 0px;
                padding:5px;
                border-radius:5px;
            }
            
            .succes
            {
                color:#468847;
                background-color:#dff0d8;
                border:1px solid #d6e9c6;
            }
            
            .fout
            {
                color:#b94a48;
                background-color:#f2dede;
                border:1px solid #eed3d7;
            }
            
            .fout p
            {
                font-style:italic;
            }
            
            .warning
            {
                color:#3a87ad;
                background-color:#d9edf7;
                border:1px solid #bce8f1;
            }

        </style>
    </head>
    <body>
    
        <h1>Dashboard</h1>
        
        <?php if ( $message ): ?>
            <div class="modal <?= $message['type'] ?>">
                <?= $message['text'] ?>
            </div>
        <?php endif ?>
        
       <p>Hallo,</p>
        
        <a href="loguit.php">uitloggen</a>
    </body>
</head>