<?php

// Si non connecté, redirection
if (!isset($_SESSION['connected'])) header("Location: 404");

include "models/user.php";

if (isset($_POST['deleteUser'])) {
    debug($_POST, false);
}


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

    if ($gender == "M" || $gender == "X") {
        $students_cards .= "<img src='$basement/public/img/avatar_m.png' class='img-fluid rounded-start' alt='...'>";
    }
    if ($gender == "F") {
        $students_cards .= "<img src='$basement/public/img/avatar_f.png' class='img-fluid rounded-start' alt='...'>";
    }

    $students_cards .= "</div>";
    $students_cards .= "<div class='col-12 col-sm-10 col-md-8'>";
    $students_cards .= "<div class='card-body'>";
    $students_cards .= "<h6 class='card-title'>$icon $lastname $firstname</h6>";
    $students_cards .= "<div class='d-grid gap-1 d-md-flex'>";
    $students_cards .= "<a href='$basement/students/" . strtolower($id) . "'><button type='button' class='btn btn-secondary btn-sm'><i class='fa-solid fa-id-card-clip'></i></button></a>";
    $students_cards .= "<form action='$basement/students/' method='post'><a href='$basement/students/" . strtolower($id) . "'><button type='button' class='btn btn-danger btn-sm' name='deleteUser'><i class='fa-solid fa-trash'></i></button></a></form>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
    $students_cards .= "</div>";
}

include "views/page/users/getAllUsers.php";
