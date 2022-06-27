<?php

if ($base_url !== $_SERVER['REQUEST_URI']) {
    switch ($main_page) {

        case 'home':
            include_once 'views/page/home.php';
            break;

        /*
            Pages
        */

        case 'page2':
            include_once 'views/page/page2.php';
            break;

        /*
            Connection
        */

        case 'sign-in':
            include_once 'controllers/connection/sign-in.php';
            break;

        case 'sign-out':
            include_once 'controllers/connection/sign-out.php';
            break;

        case 'register':
            include_once 'controllers/connection/register.php';
            break;

        /*
            404
        */
        
        default:
            include_once 'views/errors/404.php';
    }
} else {
    include_once 'views/page/home.php';
}
