<?php

    var_dump($_POST);

    $resultaat      = '';
    $searchString   = '';
    $expression     = '';
    $replaceString  =   '<span>#</span>';



    if (isset($_POST['verzenden'])) 
    {
        $searchString   =   $_POST['string'];
        $expression     =   $_POST['expression'];

        

        $resultaat =   preg_replace('/' . $expression . '/' , $replaceString, $searchString);

    }

    $Deel2_1_expr = '[a-du-zA-DU-Z]';
    $Deel2_1_stri = "Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts.";
    $opl_deel_2_1 = preg_replace('/' . $Deel2_1_expr . '/' , $replaceString, $Deel2_1_stri);

    $Deel2_2_expr = 'colou?r';
    $Deel2_2_stri = "Zowel colour als color zijn correct Engels.";
    $opl_deel_2_2 = preg_replace('/' . $Deel2_2_expr . '/' , $replaceString, $Deel2_2_stri);

    $Deel2_3_expr = '1\d{3}';
    $Deel2_3_stri = "1020 1050 9784 1560 0231 1546 8745";
    $opl_deel_2_3 = preg_replace('/' . $Deel2_3_expr . '/' , $replaceString, $Deel2_3_stri);

    $Deel2_4_expr = '[0-9]{2}[\/\-\.][0-9]{2}[\/\-\.][0-9]{4}';
    $Deel2_4_stri = "24/07/1978 en 24-07-1978 en 24.07.1978";
    $opl_deel_2_4 = preg_replace('/' . $Deel2_4_expr . '/' , $replaceString, $Deel2_4_stri);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing Regular Expressions</title>

        <style type="text/css">

            input{
                display: block;
            }

            span{
                color: red;
                font-weight: bold;
            }

        </style>

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Oplossing Regular Expressions: deel 1</h1>

            <h2>RegEx-tester</h2>

            <form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST">
                <label for="expression">Regular expression:</label>
                    <input type="text" name="expression" id="expression" value="<?= $expression ?>">

                <label for="string">String:</label>
                    <input name="string" id="string" cols="30" rows="10" value="<?= $searchString ?>">

                <input type="submit" name="verzenden" id="verzenden" value="Verzenden">

            </form>

            <p><?= $resultaat ?></p>

            <h2>Oplossing Regular Expressions: Deel 2</h2>
            <h3>1.</h3>
            <ul>
                <li>Match alle letters tussen a en d, en u en z</li>
                <li><?= $Deel2_1_stri ?></li>
                <li><?= $Deel2_1_expr ?></li>
                <li><?= $opl_deel_2_1 ?></li>
            </ul>

            <h3>2.</h3>
            <ul>
                <li>Match zowel colour als color</li>
                <li><?= $Deel2_2_stri ?></li>
                <li><?= $Deel2_2_expr ?></li>
                <li><?= $opl_deel_2_2 ?></li>
            </ul>

             <h3>3.</h3>
            <ul>
                <li>Match enkel de getallen die een 1 als duizendtal hebben.</li>
                <li><?= $Deel2_3_stri ?></li>
                <li><?= $Deel2_3_expr ?></li>
                <li><?= $opl_deel_2_3 ?></li>
            </ul>

            <h3>4.</h3>
            <ul>
                <li>Match alle data zodat er enkel een reeks "en" overblijft.</li>
                <li><?= $Deel2_4_stri ?></li>
                <li><?= $Deel2_4_expr ?></li>
                <li><?= $opl_deel_2_4 ?></li>
            </ul>
            
        </section>
    </body>
</html>
