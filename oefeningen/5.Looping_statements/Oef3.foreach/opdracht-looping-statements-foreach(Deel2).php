<?php
    $tekst              =   file_get_contents('text-file.txt');
    $tekst_hoodletters  =   strtoupper($tekst);
    $karakterlijst      =   count_chars($tekst_hoodletters, 1);
    $alfabetisch        =   array ();

    for($karakter_nummer = 65; $karakter_nummer <=90; ++$karakter_nummer)
    {
        if (isset($karakterlijst[$karakter_nummer]))
        {
            $karakter                   =   chr($karakter_nummer);
            $alfabetisch [$karakter]    =   $karakterlijst [$karakter_nummer];   
        }
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing foreach: deel 2</title>

    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1 class="extra">Oplossing foreach: deel 2</h1>
                <table>
                     <thead>
                         <tr>
                             <th>karakter</th>
                             <th>ASCII-nummer</th>
                             <th>Aantal in tekst</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php foreach ($alfabetisch as $karakter => $occurence): ?>
                             <tr>
                                 <td><?= $karakter ?></td>
                                 <td><?= ord( $karakter ) ?></td>
                                 <td><?= $occurence ?></td>
                             </tr>
                         <?php endforeach ?>
                     </tbody>
                </table>
        </section>
      

    </body>
</html>
