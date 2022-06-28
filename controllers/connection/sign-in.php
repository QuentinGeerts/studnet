<?php

include_once "models/user.php";

// ! Déjà connecté, rien à faire ici :]
if (isset($_SESSION['connected'])) {
    header("Location: home");
}

if (isset($_POST['email'], $_POST['password'])) {

    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($email) || empty($password)) {

        $email_validity = empty($email) ? "is-invalid" : "is-valid";
        $password_validity = empty($password) ? "is-invalid" : "is-valid";

        $signin_information = alert(false, "Vous devez entrer un email et un mot de passe.");
    } else {

        $response = signIn($email, $password);

        if ($response['success']) {
            $signin_information = alert(true, "Connexion réussie");

            $_SESSION['connected'] = true;
            $_SESSION['id'] = $response['data'][0];
            $_SESSION['lastname'] = $response['data'][1];
            $_SESSION['firstname'] = $response['data'][2];
            $_SESSION['gender'] = $response['data'][3];
            $_SESSION['birthdate'] = $response['data'][4];
            $_SESSION['birthplace'] = $response['data'][5];
            $_SESSION['email'] = $response['data'][6];
            $_SESSION['phone_number'] = $response['data'][7];
            $_SESSION['street'] = $response['data'][8];
            $_SESSION['number'] = $response['data'][9];
            $_SESSION['zip_code'] = $response['data'][10];
            $_SESSION['city'] = $response['data'][11];
            $_SESSION['role'] = $response['data'][12];

            header("Location: home");

        } else {
            if ($response['error']['code'] == 500) {
                switch ($response['error']['message']) {

                    case 'NOT_EXIST':
                        $signin_information = alert(false, "Email introuvable.");
                        break;

                    case 'BAD_CREDENTIALS':
                        $signin_information = alert(false, "Email et/ou mot de passe incorrects.");
                        break;
                }
            }
        }
    }
}


// Inclure HTML
include_once 'views/page/connection/sign-in.php';
