<?php
    $aantal_rijen       =   4;
    $aantal_kolommen    =   10;

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing for: deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1>Oplossing for: deel 1</h1>

            <table>
               <?php for ( $rij = 0; $rij < $aantal_rijen; ++$rij): ?>
                    <tr>
                         <?php for ( $kolom = 0; $kolom < $aantal_kolommen; ++$kolom): ?>
                             <td>kolom</td>
                         <?php endfor ?>
                    </tr>
                 <?php endfor ?>
             </table>
        </section>

    </body>
</html>
