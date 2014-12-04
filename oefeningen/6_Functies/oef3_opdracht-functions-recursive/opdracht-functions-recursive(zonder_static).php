<?php
	function bereken_rente	($data_array)
	{
		if ($data_array ['teller'] <= $data_array ['looptijd'])
		{
			$rente 		=	floor( $data_array['kapitaal'] * ($data_array['procent'] / 100));
			$data_array['kapitaal'] +=	$rente;
			$data_array['historiek'] [$data_array['teller']]	=	'Na ' . $data_array['teller'] .' jaar sparen heeft Hans €' .floor ($data_array['kapitaal']). ' op z\'n rekening staan, en heeft hij een winst van €' .floor ($rente).'.';

			++$data_array ['teller'];

			return bereken_rente ($data_array);
		}
		else
		{
			return $data_array;
		}
	}

	$startKapitaal 	=	100000;
	$renteVoet		=	8;
	$aantalJaar		=	10;

	$winst_Hans = bereken_rente( array( 	'kapitaal' => $startKapitaal, 
											'procent' => $renteVoet, 
											'looptijd' => $aantalJaar,
											'teller'	=> 1,
											'historiek'	=>	array() ) );	

	//var_dump($winst_Hans);
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing recursive</title>

    </head>
    <body>
        <h1>Oplossing recursive</h1>

        <h2>De rekening van Hans</h2>
     	<ul>
			<?php foreach($winst_Hans ['historiek'] as $waarde): ?>
				<li><?php echo $waarde ?></li>
			<?php endforeach ?>
		</ul>
    </body>
</html>
