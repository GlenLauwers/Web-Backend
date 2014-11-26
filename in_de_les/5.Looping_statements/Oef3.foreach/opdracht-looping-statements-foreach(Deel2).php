<?php
    $text   =   file_get_contents('text-file.txt');
    //var_dump($text);

    $textUppercase  =   strtoupper($text);
    $characterArray =   count_chars($textUppercase ,1);
    //var_dump($characterArray);

    $alfhabetarray  =   array();

    for ($karakterNumber = 65; $karakterNumber <=90; ++$karakterNumber)
    {
        if(isset($characterArray[$karakterNumber]))
        {
            $karakter = chr($karakterNumber);
            $alfhabetarray[$karakter] = $characterArray[$karakterNumber];
        }
    }
    var_dump($alfhabetarray);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht foreach</title>

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        <h1>Oplossingen</h1>
                <table>
            <thead>
                <tr>
                    <th>Karakter</th>
                    <th>ASCII-nummer</th>
                    <th>Aantal in tekst</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($alfhabetarray as $character =>$occurence): ?>
                <tr>

                    <td><?= $character ?></td>
                    <td><?= ord ($character) ?></td>
                    <td><?= $occurence ?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

        </section>
      

    </body>
</html>
