<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $basement ?>">
            <img src="<?= $basement ?>/public/img/logo.png" alt="" width="30" class="d-inline-block align-text-top">
            StudNet
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto pe-3">
                <li class="nav-item mx-3">
                    <a class="nav-link <?= $main == 'home' || $main == '' ? 'active' : '' ?>" aria-current="page" href="<?= $basement ?>/home"><i class="fa-solid fa-house"></i> Home</a>
                </li>

                <?php

                if (!isset($_SESSION['connected'])) {

                    echo "<li class='nav-item mx-3'>";
                    echo "<a class='nav-link " . ($main == 'sign-in' ? 'active' : '') . "' href='{$basement}/sign-in'><i class='fa-solid fa-right-to-bracket'></i> Se connecter</a>";
                    echo "</li>";
                } else {

                    echo "<li class='nav-item mx-3'>";
                    echo "<a class='nav-link " . ($main == 'students' || $main == '' ? 'active' : '') . " aria-current='page' href='$basement/students'><i class='fa-solid fa-graduation-cap'></i> Étudiants</a>";
                    echo "</li>";

                    echo "<li class='nav-item dropdown me-3'>";
                    echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>";
                    if ($_SESSION['role'] == 1) {
                        echo "<i class='fa-solid fa-crown'></i> ";
                    }
                    echo "{$_SESSION['firstname']} {$_SESSION['lastname']}";
                    echo "</a>";
                    echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                    echo "<li><a class='dropdown-item' href='{$basement}/profile'>Profil</a></li>";
                    echo "<li><a class='dropdown-item' href='#'>Another action</a></li>";
                    echo "<hr>";
                    echo "<li><a class='nav-link' href='{$basement}/sign-out'><i class='fa-solid fa-right-from-bracket'></i> Se déconnecter</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "</li>";
                }

                ?>

            </ul>
        </div>
    </div>
</nav>