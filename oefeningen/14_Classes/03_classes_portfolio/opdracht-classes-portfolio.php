<?php

    function autoload ($klassennaam)
    {
    	include_once ('classes/' .$klassennaam. '.php');
    }

    spl_autoload_register('autoload');

    $website 	=	new HTMLBuilder ('header', 'body', 'footer');

?>



        



