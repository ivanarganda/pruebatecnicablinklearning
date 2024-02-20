<?php 

if(isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
    $protocol = 'https';
} else {
    $protocol = 'http';
}

require_once  $protocol . "://" . $_SERVER['HTTP_HOST']. strtok($_SERVER['REQUEST_URI'], '?') . "App/index.html";

?>