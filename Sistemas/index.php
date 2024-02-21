<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<?php 

if(isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
    $protocol = 'https';
} else {
    $protocol = 'http';
}

$path = $protocol . "://" . $_SERVER['HTTP_HOST']. strtok($_SERVER['REQUEST_URI'], '?') . "SISTEMAS.pdf";


?>

<iframe class="h-screen w-full" src="<?php echo $path; ?>" frameborder="0"></iframe>