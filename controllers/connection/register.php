<?php

if (isset($_POST['register_request'])) {

    $guid = bin2hex(openssl_random_pseudo_bytes(16));

    echo "<pre>" . print_r($guid, true) . "</pre>";

    $lastname = ($_POST['lastname']);
    $firstname = ($_POST['firstname']);
    $gender = ($_POST['gender']);


}


// Inclure HTML
include_once 'views/page/connection/register.php';
