<?php

	function __autoload( $classname )
    {
        require_once( $classname . '.php' );
    }

    var_dump($_POST);
    var_dump($_FILES);

    if (isset($_POST['wijzigen'])) 
    {
    	 $extensions = array( '.jpg', '.jpeg', '.png' );

    	 $types = array( 'image/jpeg', 'image/jpeg', 'image/png');

    	 $file = $_FILES['afbeelding']['name'];

    	 $path = 'img/';

    	 $upload = new Files ( $extensions, $types );

    	 $upload->upload( $file, $path );

    	 echo $upload->errors( 'upload_errors' );

    }

   
?>