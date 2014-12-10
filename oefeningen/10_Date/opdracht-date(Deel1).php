<?php
    $timestamp      =   mktime (22, 35, 25, 1, 21, 1904);
    //var_dump($timestamp);
    
    $datum          =   date ('d F Y, h:i:s a' , $timestamp);
    //var_dump($datum);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing date: deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        <section class="body">
            <h1>Oplossing date: deel 1</h1>

            <h2>Engels</h2>
            <ul>
                <li>Timestamp: <?= $timestamp ?></li>
                <li>Date: <?= $datum ?></li>
            </ul>
        </section>
    </body>
</html>
