<?php

include_once "models/user.php";


if (isset($_POST['register_request'])) {

    // Récupération des données (+ suppression des espaces autour de la données)
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $birthplace = htmlspecialchars(trim($_POST['birthplace']));
    $birthdate = htmlspecialchars(trim($_POST['birthdate']));
    $phone_number = htmlspecialchars(trim($_POST['phone_number']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $repeat_password = htmlspecialchars(trim($_POST['repeat_password']));
    $street = htmlspecialchars(trim($_POST['street']));
    $number = htmlspecialchars(trim($_POST['number']));
    $zip_code = htmlspecialchars(trim($_POST['zip_code']));
    $city = htmlspecialchars(trim($_POST['city']));

    // Vérification de la validité des données
    $lastname_validity = empty($lastname) ? "is-invalid" : "is-valid";
    $firstname_validity = empty($firstname) ? "is-invalid" : "is-valid";
    $gender_validity = empty($gender) ? "is-invalid" : "is-valid";
    $birthplace_validity = empty($birthplace) ? "is-invalid" : "is-valid";
    $birthdate_validity = empty($birthdate) ? "is-invalid" : "is-valid";
    $phone_number_validity = "is-valid";
    $email_validity = empty($email) ? "is-invalid" : "is-valid";
    $password_validity = empty($password) || $password !== $repeat_password ? "is-invalid" : "is-valid";
    $repeat_password_validity = empty($repeat_password) || $password !== $repeat_password ? "is-invalid" : "is-valid";
    $street_validity = "is-valid";
    $number_validity = "is-valid";
    $zip_code_validity = "is-valid";
    $city_validity = "is-valid";

    if (
        empty($lastname)
        || empty($firstname)
        || empty($gender)
        || empty($birthplace)
        || empty($birthdate)
        || empty($email)
        || empty($password)
        || empty($repeat_password)
        || $password != $repeat_password
    ) {

        if ($password !== $repeat_password) {
            $password_error .= "<div id='validationServer03Feedback' class='invalid-feedback'>";
            $password_error .= "Mots de passe différents";
            $password_error .= "</div>";
        }

        if (getUserByEmail($email)) {
            $email_error = feedback(false, "L'adresse email existe déjà.");
            $email_validity = 'is-invalid';
        }

    } else {

        $user_to_add = [
            $lastname,
            $firstname,
            $gender,
            $birthdate,
            $birthplace,
            $phone_number,
            $email,
            $password,
            $street,
            $number,
            $zip_code,
            $city
        ];

        $response = addUser($user_to_add);

        if ($response["success"]) {
            $register_information = alert(true, "Votre compte a bien été créé. <br>Vous allez être redirigé dans 5 secondes.");

            header("refresh:5; url=sign-in");
        } else {
            // $register_information = alert(false, "Il y a eu une erreur lors de la création.");

            if ($response["error"]['code'] == 500 && $response["error"]['message'] == 'DUPLICATE') {
                $email_error = feedback(false, "L'adresse email existe déjà.");
                $email_validity = 'is-invalid';
            }
        }
    }
}


// Inclure HTML
include_once 'views/page/connection/register.php';
