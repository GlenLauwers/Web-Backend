<?php
    $aantal_rijen       =   4;
    $aantal_kolommen    =   10;

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht for</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

        <style>
            .oneven
            {
                background-color    :   lightgreen;
            }
        </style>

            <h1>Opdracht for: deel 1</h1>

            <ul>

                <li>Bouw een <code>&lt;table&gt;</code> door gebruik te maken van een for-loop.</li>

                <li>Maak een variabele <code>$rijen</code> met waarde <code>4</code> en maak een variabele <code>$kolommen</code> met waarde <code>10</code>.</li>

                <li>
                    Probeer eerst 10 rijen in de <code>&lt;table&gt;</code> te tonen. Plaats hier voorlopig één kolom met het woordje test in. Het resultaat ziet er ongeveer als volgt uit:

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <table>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                            <tr>
                                <td>rij</td>
                            </tr>
                        </table>
                    </div>
                </li>

                <li>Werk verder met een geneste for-loop om de kolommen weer te geven.</li>

                <li>
                    Vervang de <code>&lt;td&gt;rij&lt;td&gt;</code> in je code door een for-loop die 10 kolommen zal afdrukken. Plaat hierin telkens het woord "kolom". Het resultaat ziet er ongeveer als volgt uit:

                     <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <table>
                            <tr>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                            </tr>
                            
                            <tr>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                            </tr>
                            
                            <tr>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                            </tr>

                            <tr>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                                <td>kolom</td>
                            </tr>
                        </table>
                    </div>
                </li>

            </ul> 
            
        </ul>

        <h1>Oplossingen</h1>
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
