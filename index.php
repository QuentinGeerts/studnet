<?php

// Démarrage de la session
session_start();
ob_start();

include_once "controllers/utils/errors.php";
include_once "controllers/utils/util.php";

include_once 'controllers/config.php';

include_once 'views/html/header.php';

include_once 'views/html/navbar.php';

echo '<div class="container">';

if ($dberror) {
    echo "<div class='alert alert-danger'><i class='fa-solid fa-triangle-exclamation'></i> $dberror</div>";
}

include_once 'controllers/router.php';

echo '</div>';

include_once 'views/html/footer.php';
