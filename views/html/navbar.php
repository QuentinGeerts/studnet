<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $basement ?>">
            <img src="public/img/logo.png" alt="" width="30" class="d-inline-block align-text-top">
            StudNet
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $main == 'home' || $main == '' ? 'active' : '' ?>" aria-current="page" href="<?= $basement ?>/home"><i class="fa-solid fa-house"></i> Home</a>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto">

                <?php

                if (!isset($_SESSION['connected'])) {
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link " . ($main == 'sign-in' ? 'active' : '') . "' href='{$basement}/sign-in'><i class='fa-solid fa-right-to-bracket'></i> Se connecter</a>";
                    echo "</li>";
                } else {
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='{$basement}/sign-out'><i class='fa-solid fa-right-from-bracket'></i> Se déconnecter</a>";
                    echo "</li>";
                }

                ?>

            </ul>
        </div>
    </div>
</nav>