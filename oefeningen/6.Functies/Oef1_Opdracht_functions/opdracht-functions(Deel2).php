<?php
    $html_string    =   '<html>html-string</html';
    $test           =   'Dit is een test';
    $namen          =   array ('Olga', 'Boran', 'Carl', 'Yasmine');

    function druk_af ($array)
    {
        $container  =   array ();

        end ($GLOBALS);
        $array_naam =   key ($GLOBALS);

        foreach ($array as $key => $waarde)
        {
            $container[] = $array_naam . '[ ' . $key . ' ] heeft waarde "' . $waarde . '"';
        }

        return $container;
    }

    $namenBewerkt = druk_af( $namen );

    function validateHtmlTag( $string )
    {
        $isValid    =   false;

        $openingTag =   '<html>';
        $closingTag =   '</html>';

        $firstPos   =   strpos( $string, $openingTag );
        $lastPos   =   strpos( $string, $closingTag );

        $expectedLastClosingPos   =   strlen( $string ) - strlen( $closingTag );

        if ( $firstPos === 0  && 
            $lastPos == $expectedLastClosingPos )
        {
            $isValid    =   true;
        }

        return $isValid;
    }

    $validHtml = validateHtmlTag( $html_string );
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>plossingen functies: deel 2</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
    <h1>Oplossingen functies: deel 2</h1>

        <ul>
            <?php foreach ($namenBewerkt as $naam): ?>
                <li><?= $naam ?></li>
            <?php endforeach ?>
        </ul>

        <p>De HTML-string "<?= htmlentities( $html_string ) ?>" is <?= ( $validHtml ) ? 'geldig' : 'niet geldig' ?></p>


        </section>

    </body>
</html>