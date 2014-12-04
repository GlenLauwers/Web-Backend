<?php

	$lettertje		=	"e";
	$cijfertje		=	"3";
	$langsteWoord	=	"zandzeepsodemineralenwatersteenstralen";
	$Vervang		=	str_replace ($lettertje, $cijfertje, $langsteWoord);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing string extra functions: deel 3</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
                    
            <h1>Oplossing string extra functions: deel 3</h1>

            <ul> 
                <li><?=$lettertje?></li>
                <li><?=$cijfertje?></li>
                <li><?=$langsteWoord?></li>
                <li><?php echo $Vervang?>
                    <p class="remark">Je mag enkel gebruik maken van de variable names. De values  <code>'e'</code>, <code>'3'</code> en <code>'zandzeepsodemineralenwatersteenstralen'</code> mogen in totaal maar één keer in het php-document voorkomen.</p>
                </li>
            </ul>

        </section>

    </body>
</html>