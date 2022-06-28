<?php

include "models/user.php";

if (!isset($_SESSION['connected'])) header("Location: 404");

$selected_user_id = isset($second) ? strtoupper($second) : $_SESSION['id'];

$response = getUserById($selected_user_id);

if ($response['success']) {

    // debug($response['data'], false);

    list(
        $id,
        $lastname,
        $firstname,
        $gender,
        $birthdate,
        $birthplace,
        $email,
        $password,
        $phone_number,
        $street,
        $number,
        $zip_code,
        $city,
        $role,
        $created_at,
        $updated_at
    ) = $response['data'];



}

include_once "views/page/users/profile.php";
