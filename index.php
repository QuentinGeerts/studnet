<?php

// Démarrage de la session
session_start();
ob_start();

include 'controllers/config.php';

include 'views/html/header.php';

include 'views/html/navbar.php';

echo '<div class="container">';

if ($dberror) {
    echo "<div class='alert alert-danger'><i class='fa-solid fa-triangle-exclamation'></i> $dberror</div>";
}

include 'controllers/router.php';

echo '</div>';

include 'views/html/footer.php';
