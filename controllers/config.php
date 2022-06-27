<?php

/*
    URL
*/

$full_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$base_url = str_replace(
    basename($_SERVER['PHP_SELF']),
    '',
    $_SERVER['PHP_SELF']
);

$params = array_slice(explode("/", $_SERVER['REQUEST_URI']), 3);

$main_page = $params[0];

// echo "<pre>"; print_r($_SERVER); die;


