<?php

	if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/png"))
                && ($_FILES["file"]["size"] < 2000000)) 
    {

        if ($_FILES["file"]["error"] > 0) 
        {
            $fout = "Fout." ;
        } 
                    
        else 
        {
            define('ROOT', dirname(__FILE__));
                        
            if (file_exists(ROOT . "/img/" . $_FILES["file"]["name"])) 
            {
                $fout = "Bestand bestaat al" ;

            } 

            else 
            {
                move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $_FILES["file"]["name"]));
            }
        }
    }

?>