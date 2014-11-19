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
        <title>Opdracht if else</title> 
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

    		<h1 class="extra">Opdracht if else: deel 2</h1>

    		<ul>
                <li>Maak een PHP-script dat achterhaalt hoeveel volledige jaren, maanden, weken, dagen, uren, minuten en seconden er in een gegeven aantal seconden zit (bv. 221108521)</li>

                <li>
                    Ga er van uit dat een maand 31 dagen kent en een jaar 365 dagen. Het resultaat ziet er ongeveer als volgt uit:
                    
                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

                        <p>in <?= $aantal_sec ?> seconden</p>

                        <ul>
                            <li>minuten: 3685142</li>
                            <li>uren: 61419</li>
                            <li>dagen: 2559</li>
                            <li>weken: 365</li>
                            <li>maanden (31): 82</li>
                            <li>jaren (365): 7</li>
                        </ul>

                        <h1>Oplossing</h1>
                        <ul>
                            <li>minuten: <?= $aantal_min ?> </li>
                            <li>uren: <?= $aantal_uur ?></li>
                            <li>dagen: <?= $aantal_dag ?></li>
                            <li>weken: <?= $aantal_week ?> </li>
                            <li>maanden (31): <?= $aantal_maand ?> </li>
                            <li>jaren (365): <?= $aantal_jaar ?> </li>
                        </ul>
                    </div>

                </li>
    		</ul>

        </section>

    </body>
</html>
