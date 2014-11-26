<?php
    $md5HashKey =   'd1fa402db91a7a93c4f414b8278ce073';
    $gezocht1   =   2;
    $gezocht2   =   8;
    $gezocht3   =   'a';

    function tel_functie1 ($gezocht1, $key)
    {
        $counter    =   strlen($gezocht1);
        $aantal     =   substr_count($gezocht1, $key);
        $procent    =   ($aantal / $counter) *100;
        return $procent;
    }

    $functie1  =   tel_functie1($md5HashKey, $gezocht1);
    //var_dump($functie1);

    function tel_functie2 ($gezocht2, $key)
    {
        $counter    =   strlen($gezocht2);
        $aantal     =   substr_count($gezocht2, $key);
        $procent    =   ($aantal / $counter) *100;
        return $procent;
    }

    $functie2  =   tel_functie2($md5HashKey, $gezocht2);
    //var_dump($functie2);

        function tel_functie3 ($gezocht3, $key)
    {
        $counter    =   strlen($gezocht3);
        $aantal     =   substr_count($gezocht3, $key);
        $procent    =   ($aantal / $counter) *100;
        return $procent;
    }

    $functie3  =   tel_functie3($md5HashKey, $gezocht3);
    //var_dump($functie3);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies gevorderd</title>

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies gevorderd: deel 1</h1>

            <ul>
                <li>Maak een global variable <code>$md5HashKey</code> met als value <code>'d1fa402db91a7a93c4f414b8278ce073'</code></li>

                <li>Maak drie verschillende functies die de global variable <code>$md5HashKey</code> telkens op een andere manier aanspreken. </li>

                <li>Het doel van deze functie is altijd hetzelfde: tellen hoeveel procent een bepaalde parameter voorkomt in <code>$md5HashKey</code>.</li>

                <li>Spreek elke functie één keer aan, telkens met een ander argument:
                    <ul>
                        <li>Argument Functie 1: <code>'2'</code></li>
                        <li>Argument Functie 2: <code>'8'</code></li>
                        <li>Argument Functie 3: <code>'a'</code></li>
                    </ul>
                </li>

                <li>
                    Zorg ervoor dat het volgende wordt weergegeven: 

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        <p>Functie 1: De needle '2' komt 6.25% voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'</p>
                        <p>Functie 2: De needle '8' komt 6.25% voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'</p>
                        <p>Functie 3: De needle 'a' komt 9.375% keer voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'</p>
                    </div>
                </li>

            </ul>
            <h1>Oplossingen</h1>
            <p>De needle '<?= $gezocht1?>' komt <?=$functie1 ?> % voor in de hash key '<?= $md5HashKey ?>'.</p>
            <p>De needle '<?= $gezocht2?>' komt <?=$functie2 ?> % voor in de hash key '<?= $md5HashKey ?>'.</p>
            <p>De needle '<?= $gezocht3?>' komt <?=$functie3 ?> % voor in de hash key '<?= $md5HashKey ?>'.</p>
        </section>

    </body>
</html>
