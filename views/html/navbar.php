<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href=".">
            <img src="public/img/logo.png" alt="" width="30" class="d-inline-block align-text-top">
            StudNet
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $main_page == 'home' || $main_page == '' ? 'active' : '' ?>" aria-current="page" href="home"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $main_page == 'page2' ? 'active' : '' ?>" href="page2">page2</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">

                <?php

                if (!isset($_SESSION['connected'])) {
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link " . ($main_page == 'sign-in' ? 'active' : '') . "' href='sign-in'><i class='fa-solid fa-right-to-bracket'></i> Se connecter</a>";
                    echo "</li>";
                } else {
                    echo "<li class='nav-item'>Bonjour {$_SESSION['firstname']}</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='sign-out'><i class='fa-solid fa-right-from-bracket'></i> Se déconnecter</a>";
                    echo "</li>";
                }

                ?>

            </ul>
        </div>
    </div>
</nav>