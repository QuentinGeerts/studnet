<?php

if (isset($_SESSION['connected'])) {
    header("Location: home");
}

if (isset($_POST['email'], $_POST['password'])) {
    
    
    
    $_SESSION['connected'] = true;
    $_SESSION['lastname'] = 'Lastname';
    $_SESSION['firstname'] = 'Firstname';

    header("Location: home");
}


// Inclure HTML
include_once 'views/page/connection/sign-in.php';