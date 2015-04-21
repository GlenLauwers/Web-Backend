<?php

    $baseName = '/' . basename(__FILE__) . '/';

    $root = preg_replace($baseName, '', __FILE__);
    $htaccess = file_get_contents($root .'/.htaccess');

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing mod_rewrite: basis (Deel 1)</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Oplossing mod_rewrite: basis (Deel 1)</h1>
            <p>Deze pagina is het redirect-bestand. Veel succes ermee.</p>

        </section>    
        
    </body>
</html>
