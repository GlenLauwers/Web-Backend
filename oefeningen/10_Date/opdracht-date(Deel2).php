<?php

    $timestamp      =   mktime (22, 35, 25, 1, 21, 1904);
    //var_dump($timestamp);

    $datum_engels   =   date ('d F Y, h:i:s a' , $timestamp);
    //var_dump($datum);

    setlocale(LC_ALL, 'nl_NL');

    $datum_nl       =   strftime("%d %B %Y, %H:%M:%S", $timestamp);
    //var_dump($datum_nl);



?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing date: deel 2</title>
    </head>

    <body>
        <section class="body">

            <h1>Oplossing date: deel 2</h1>

            <h2>Engels</h2>           
            <ul>
                <li>Timestamp: <?= $timestamp ?></li>
                <li>Date: <?= $datum_engels ?></li>
            </ul>

            <h2>Nederlands</h2>
            <ul>
                <li>Datum: <?= $datum_nl ?></li>
            </ul>

        </section>
    </body>
</html>
