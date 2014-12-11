<?php
    $tafelsMax    =    10;
    $tafels       =    array();

    for ($tafelcount =0; $tafelcount  <= $tafelsMax ; ++$tafelcount) 
    { 
        $tafelcontainer =   array();
       for ($product=0; $product <= 10 ; ++$product) 
       { 
           $tafelcontainer[ ] = $tafelcount * $product;
       }
    $tafel[$tafelcount] = $tafelcontainer;
    }

    //var_dump($tafel);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing for: deel 3</title>
        <style>
            .even {
                background-color: green;
            }
        </style>
    </head>

    <h1>Oplossing for: deel 3</h1>

    <h2>multi-dimensionele array</h2>
        <pre><?echo var_dump($tafel) ?></pre>

    <h2>Kolom</h2>
        <table>
             <?php foreach ($tafel as $value): ?>
                <tr>
                    <?php foreach ($value as $uitkomst): ?>
                        <td class="<?= ( $uitkomst % 2 > 0 ) ? '' : 'even' ?>">
                            <?php echo $uitkomst ?></td>
                      <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
