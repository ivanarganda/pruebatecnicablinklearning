<?php 

$folderParam = $_GET['pathFolder'] ?? '';

if ( $folderParam !== '' ){

    if(isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }

    $hostname = $_SERVER['HTTP_HOST'];
    $uri = $uri = strtok($_SERVER['REQUEST_URI'], '?');
    require_once "$protocol://$hostname$uri$folderParam/";

}

?>