<?php

if (isset($_POST['register_request'])) {

    echo "Je test";

    $lastname = ($_POST['lastname']);
    $firstname = ($_POST['firstname']);
    $gender = ($_POST['gender']);


}


// Inclure HTML
include_once 'views/page/connection/register.php';
