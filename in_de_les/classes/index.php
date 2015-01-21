<?php

	$leoniearray =	array(	'naam' => 'Leonie',
						'punten' => 10);
	$leoniearray['punten'] +=5;
	$leoniearray 	= voeg_punten_toe(5,$leonie);

	$floorarray 	=	array(	'naam' => 'Floor',
						'punten' => 10);
	$floorarray 	= voeg_punten_toe(5,$floor);

	$leonie 	= new Student ('Leonie', 10)
	class Student
	{
		private $naam 		= '';
		private $punten 	= '';

		public function __construct ($naam, $punten)
		{
			$this->naam = $naam;
		}
	}

	function voeg_punten_toe ($punten, $array)
	{
		$array['punten'] 	+= 	$punten;
		return $array;
	}

	function helft_van_de_punten ($array)
	{
		$helft 	= $array['punten'] 	/2;
		return $helft;
	}

	var_dump($leoniearray);
	var_dump($floorarray);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="" />
    <title>Titel</title>

    <!-- Style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>