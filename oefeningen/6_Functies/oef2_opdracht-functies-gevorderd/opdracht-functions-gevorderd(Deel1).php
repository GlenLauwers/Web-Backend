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
        <title>Oplossingen functies gevorderd: deel 1</title>

    </head>
    <body>

        <h1>Oplossingen functies gevorderd: deel 1</h1>
        
        <p>De needle '<?= $gezocht1?>' komt <?=$functie1 ?> % voor in de hash key '<?= $md5HashKey ?>'.</p>
        <p>De needle '<?= $gezocht2?>' komt <?=$functie2 ?> % voor in de hash key '<?= $md5HashKey ?>'.</p>
        <p>De needle '<?= $gezocht3?>' komt <?=$functie3 ?> % voor in de hash key '<?= $md5HashKey ?>'.</p>

    </body>
</html>
