<?php
	$text						=	file_get_contents( 'text-file.txt' );
	$textChars					=	str_split( $text );
	rsort( $textChars );
	$alfa = array_reverse( $textChars );

	$lijst = array();

	foreach($alfa as $value)
	{
		if ( isset ( $lijst[ $value ] ) )
		{
			++$lijst[ $value ];
		}
		else
		{
			$lijst[ $value ] = 1;
		}
		
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing foreach: deel 1</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Oplossing foreach: deel 1</h1>
		      <pre><?php var_dump ($lijst) ?></pre>
		

    </body>
</html>
