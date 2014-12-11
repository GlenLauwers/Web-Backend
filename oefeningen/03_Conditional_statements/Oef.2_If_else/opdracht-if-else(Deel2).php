<?php 
	$aantal_sec		=	221108521;
	$aantal_min		=	floor($aantal_sec	/ 60	);
	$aantal_uur		=	floor($aantal_min 	/ 60	);
	$aantal_dag		=	floor($aantal_uur 	/ 24	);
	$aantal_week	=	floor($aantal_dag 	/ 7		);
	$aantal_maand	=	floor($aantal_dag	/31		);
	$aantal_jaar	=	round($aantal_maand	/12		);

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing if else: deel 2</title> 
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

    		<h1 class="extra">Oplossing if else: deel 2</h1>

                <ul>
                    <li>minuten: <?= $aantal_min ?> </li>
                    <li>uren: <?= $aantal_uur ?></li>
                    <li>dagen: <?= $aantal_dag ?></li>
                    <li>weken: <?= $aantal_week ?> </li>
                    <li>maanden (31): <?= $aantal_maand ?> </li>
                    <li>jaren (365): <?= $aantal_jaar ?> </li>
                </ul>

        </section>

    </body>
</html>
