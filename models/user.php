<?php

include_once "models/errors.php";

function addUser($user)
{

    // Récupération de la fonction de création de GUID
    require_once "controllers/util.php";

    // Connexion à la base de données
    require_once "controllers/database.php";

    if (!isset($user)) return;

    list($lastname, $firstname, $gender, $birthdate, $birthplace, $phone_number, $email, $password, $street, $number, $zip_code, $city) = $user;

    try {
        $query = "
        INSERT INTO user (id, lastname, firstname, gender, birthdate, birthplace, email, password, phone_number, street, number, zip_code, city) 
        VALUES 
            ( :id, :lastname, :firstname, :gender, :birthdate, :birthplace, :email, :password, NULLIF(:phone_number, ''), NULLIF(:street, ''), NULLIF(:number, ''), NULLIF(:zip_code, ''), NULLIF(:city, '') )";

        $obj = $db->prepare($query);

        $params = [
            ':id' => createGUID(),
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':gender' => $gender,
            ':birthdate' => $birthdate,
            ':birthplace' => $birthplace,
            ':phone_number' => $phone_number,
            ':email' => $email,
            ':password' => sha1($password),
            ':street' => $street,
            ':number' => $number,
            ':zip_code' => $zip_code,
            ':city' => $city
        ];

        if ($obj->execute($params)) {
            return response(true, 201, "OK");
        }
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) return response(false, 500, "DUPLICATE");
    }
}
