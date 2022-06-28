<?php

/*
------ CREATE ------ 
*/

function addUser($user)
{

    // Connexion à la base de données
    include "controllers/database.php";

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

/*
    ------ Read ------ 
*/

function getUserByEmail($email)
{

    // Connexion à la base de données
    include "controllers/database.php";

    $query = "SELECT id FROM user WHERE email = :email";

    $obj = $db->prepare($query);

    $params = [ ':email' => $email ];

    if ($obj->execute($params)) {
        $users = $obj->fetchAll()[0];

        return (count($users) > 1) ? true : false;
    }

    return false;
}


function signIn($email, $pwd)
{
    // Connexion à la base de données
    include "controllers/database.php";

    // Email existe ?
    if (!getUserByEmail($email)) return response(false, 500, 'NOT_EXIST');

    try {
        $query = "
        SELECT id, lastname, firstname, gender, birthdate, birthplace, email, phone_number, street, number, zip_code, city, role
        FROM user
        WHERE email = :email AND password = :password";

        $obj = $db->prepare($query);

        $params = [
            ':email' => $email,
            ':password' => sha1($pwd),
        ];

        if ($obj->execute($params)) {
            $user = $obj->fetchAll()[0];

            if (count($user) > 1) {
                return response(true, 200, "OK", $user);
            } else {
                return response(false, 500, "BAD_CREDENTIALS");
            }
        } else {
        }
    } catch (PDOException $e) {
        // if ($e->getCode() == 23000) return response(false, 500, "DUPLICATE");
    }
}
