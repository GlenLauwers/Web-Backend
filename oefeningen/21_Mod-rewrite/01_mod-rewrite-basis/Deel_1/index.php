<?php
    
    $baseName = '/' . basename(__FILE__) . '/';

    $root = preg_replace($baseName, '', __FILE__);
    $htaccess = file_get_contents($root .'/.htaccess');

?>
