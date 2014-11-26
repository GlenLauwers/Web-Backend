<?php
    function drukArrayAf ($array)
    {
        $array  =   array ('Helden'[0] => 'Elon Musk');
    }

    $afd_array  =   drukArrayAf();

    var_dump($afd_array);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
    
            <h1 class="extra">Opdracht functies: deel 2</h1>

            <ul>
                <li>Maak een functie <code>drukArrayAf</code> die 1 parameter heeft, <code>$array</code></li>

                <li>Deze <code>$array</code> bevat enkele waarden die je zelf mag kiezen</li>

                <li>Zorg ervoor dat je uiteindelijk tot dit resultaat komt:

                    <ul>
                        <li>
                            <div class="facade-minimal" data-url="http://www.app.local/index.php">
                                
                                <h1>Opdracht functies</h1>
                                
                                <p>helden[ 0 ] heeft waarde 'Elon Musk'</p>  
                            
                            </div>
                            
                        </li>

                        <li>De naam van de array afdrukken is niet zo belangerijk (mag hardcoded of via een andere inventieve manier)</li>
                        
                        <li class="extension">Zorg ervoor dat je ook meerdimensionale arrays kan afdrukken op dezelfde manier</li>
                    </ul>
                </li>

                <li>Maak een functie <code>validateHtmlTag</code> die 1 parameter heeft, <code>$html</code>

                    <ul>
                        <li>Zorg ervoor dat deze functie kan valideren of er een correcte &lt;html&gt;&lt;/html&gt; tag aanwezig is in de gegeven string <code>$html</code></li>
                    </ul>
                </li>

                <li>Voer al deze functies uit en zorg ervoor dat de resultaten op het scherm verschijnen</li>

            </ul>

            <h1>Oplossingen</h1>


        </section>

    </body>
</html>
