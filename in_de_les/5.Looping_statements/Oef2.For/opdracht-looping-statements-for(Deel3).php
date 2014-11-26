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

    var_dump($tafel);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
        <style>
            .even {
                background-color: green;
            }
        </style>
    </head>
<h1>Opdracht for: deel 2</h1>

            <ul>

                <li>Maak een <code>&lt;table&gt;</code> met daarin de tafels van 1 tot 10 naast elkaar.
                
                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <table>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4</td>
                                <td>6</td>
                                <td>8</td>
                                <td>10</td>
                                <td>12</td>
                                <td>14</td>
                                <td>16</td>
                                <td>18</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>6</td>
                                <td>9</td>
                                <td>12</td>
                                <td>15</td>
                                <td>18</td>
                                <td>21</td>
                                <td>24</td>
                                <td>27</td>
                                <td>30</td>
                            </tr>
                        </table>
                    </div>
                    
                </li>

                <li>Werk verder op het vorige deel.</li>

                <li>
                    Zorg er nu voor dat de cellen met even getallen een groene achtergrond krijgen, maak hiervoor gebruik van een css klasse en geen inline styles. 
                    <span class="tip">Werk met een shorthand if-statement</span>
                </li>                

            </ul> 


        <h1>Oplossingen</h1>


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
