<?php

    $fruit              =   "ananas";
    $fruit_karakter     =   strlen($fruit);
    $letter             =   "a";
    $laatste_a          =   strrpos($fruit,$letter);
    $hoofdletters       =   strtoupper($fruit);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht string extra functions</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht string extra functions: deel 2</h1>

            <ul>
                <li><?=$fruit?></code></li>
                <li>Bepaal de positie van de laatste 'a' in de variabele <code>$fruit</code>.</li>
                <li><?php echo $laatste_a?></li>
                <li><?php echo $hoofdletters?></li>
            </ul>
      
        </section>

    </body>
</html>
