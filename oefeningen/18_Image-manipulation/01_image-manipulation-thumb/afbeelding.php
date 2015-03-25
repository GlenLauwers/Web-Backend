<?php

	$foto   =   'img/'.$_FILES['file']['name'];
    
        
    $onderdelen =   pathinfo($foto);
    $bestandsnaam = $onderdelen['filename'];
    $extensie   =   $onderdelen['extension'];

    $thumbDimensions['w']   =   100;
    $thumbDimensions['h']   =   100;

    list($width, $height)   =   getimagesize($foto);

    switch ($extensie)
    {
        case ('jpg'):    
            $source     =   imagecreatefromjpeg($foto);
            break;

        case ('jpeg'):
            $source     =   imagecreatefromjpeg($foto);
            break;
            
        case ('png'):
            $source     =   imagecreatefrompng($foto);
            break;

        case ('gif'):
            $source     =   imagecreatefromgif($foto);
            break;
    }

    $thumb  =   imagecreatetruecolor($thumbDimensions['w'], $thumbDimensions['h']);

    imagecopyresampled($thumb, $source, 0, 0, 210, 190, 100, 100, 250, 250);
   // imagecopyresized($thumb, $source, 0,0,0,0, $thumbDimensions['w'],$thumbDimensions['h'], $width, $height);

    $bestandsnaam = time().'_'.$bestandsnaam;
    
    switch ($extensie)
    {
        case ('jpg'):
        case ('jpeg'):
            $resized    =   imagejpeg($thumb, ('img/thumb/' . $bestandsnaam. '_thumb.' . $extensie), 100);
            break;
            
        case ('png'):
            $resized    =   imagepng($thumb, ('img/thumb/' . $bestandsnaam. '_thumb.' . $extensie), 100);
            break;

        case ('gif'):
            $resized    =   imagegif($thumb, ('img/thumb/' . $bestandsnaam. '_thumb.' . $extensie));
            break;
    } 

?>