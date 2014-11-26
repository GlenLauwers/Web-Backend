<?php

    $maxrijen  =   10;
    $rijenteller    =   0;

    $maxkolom   = 10;
    $kolommenTeller =   0;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  


        <h1>Oplossingen</h1>
        <table>

        <?php while ($rijenteller < $maxrijen); ?>
        <tr>
             <?php while ($kolommenTeller < $maxkolom): ?>
                  <td><?= $rijenteller * $kolommenTeller?></td>
                <?php ++$kolommenTeller?>
            <?php endwhile ?>
        </tr>
             <?php ++ $rijenteller?>

     </table>
        </section>
    </body>
</html>
