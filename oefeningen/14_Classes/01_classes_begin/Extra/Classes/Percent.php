<?php

	class Percent
	{
		public $absolute	=	0;
		public $relative	=	0;
		public $hundred		=	0;
		public $nominal		=	'';
	
		public function __construct($nummer_1, $nummer_2)//Zo kun je communiceren met een klasse
		{
			$this->absolute 	= 	$this->formatNumber( $nummer_1 / $nummer_2 );
			$this->relative 	=	$this->formatNumber($this->absolute -1);
			$this->hundred 		=	$this->relative *100;
				if ( $this->absolute > 1)
				{
					$this->nominal	= "Positief";
				}
				elseif ( $this->absolute < 1 )
				{
					$this->nominal	= "Negatief";
				}	
				else
				{
					$this->nominal = "Status Quo";
				}
		}

		public function formatNumber($number)
		{
			return number_format($number, 2, '.', ' ');
		}
		
	}

?>