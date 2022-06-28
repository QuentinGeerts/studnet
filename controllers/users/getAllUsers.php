<?php

include "models/user.php";

if (!isset($_POST['connected'])) header("Location: home");

$students_cards = "";

$response = getAllUsers();

foreach ($response['data'] as $user) {

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
    ) = $user;

    $icon = $role == 0 ? '<i class="fa-solid fa-user"></i>' : '<i class="fa-solid fa-crown"></i>';

    $students_cards .= "<div class='col'>";
    $students_cards .= "<div class='card mb-3'>";
    $students_cards .= "<div class='row g-0'>";
    $students_cards .= "<div class='col-12 col-sm-2 col-md-4 align-self-center'>";
    $students_cards .= "<img src='$basement/public/img/logo.png' class='img-fluid rounded-start' alt='...'>";
    $students_cards .= "</div>";
    $students_cards .= "<div class='col-12 col-sm-10 col-md-8'>";
    $students_cards .= "<div class='card-body'>";
    $students_cards .= "<h6 class='card-title'>$icon $lastname $firstname</h6>";
    $students_cards .= "<p class='card-text'><a href='$basement/students/" . strtolower($id) . "'><button type='button' class='btn btn-secondary btn-sm'>Profil</button></a></p>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
}

include "views/page/users/getAllUsers.php";
