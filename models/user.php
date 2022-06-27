<?php


function addUser($user)
{

    // Connexion à la base de données
    require_once "controllers/database.php";
    if (!isset($user)) return;

    list($guid, $lastname, $firstname, $gender, $email, $password, $phone_number) = $user;

    $query = "INSERT INTO user (id, lastname, firstname, gender, email, password, phone_number, created_at) VALUES (?,?,?,?,?,?,?,?)";

    $obj = $db->prepare($query);

    $params = [
        $guid,
        $lastname,
        $firstname,
        $gender,
        $email,
        $password,
        $phone_number,
        date("Y-m-d H:i:s")
    ];

    if ($obj->execute($params)) {
        echo "OK";
    } else {
        echo "KO";
    }
}
