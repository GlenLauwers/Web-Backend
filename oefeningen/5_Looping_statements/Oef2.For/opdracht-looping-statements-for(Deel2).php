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

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing for: deel 2</title>
        <style>
            .even {
                background-color: green;
            }
        </style>
    </head>

    <h1>Oplossing for: deel 2</h1>
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
