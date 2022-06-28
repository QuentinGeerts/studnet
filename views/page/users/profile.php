<div class="container-fluid">
    <div class="row">

        <!-- PROFILE BANNER -->

        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <img src="<?= $basement ?>/public/img/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lastname . " " . $firstname ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">

                        <div class="row g-3">
                            <div class="col-1">
                                <?php

                                if ($gender == 'M') echo '<i class="fa-solid fa-mars"></i>';
                                if ($gender == 'F') echo '<i class="fa-solid fa-venus"></i>';
                                if ($gender == 'X') echo '<i class="fa-solid fa-genderless"></i>';

                                ?>
                            </div>
                            <div class="col-11">
                                <?php

                                if ($gender == 'M') echo 'Homme';
                                if ($gender == 'F') echo 'Femme';
                                if ($gender == 'X') echo 'Non binaire';

                                ?>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row g-3">
                            <div class="col-1">
                                <i class="fa-solid fa-cake-candles"></i>
                            </div>
                            <div class="col-11">
                                <?= $birthdate ?> <br>
                                <?= $birthplace ?> <br>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row g-3">
                            <div class="col-1">
                                <i class="fa-solid fa-map"></i>
                            </div>
                            <div class="col-11">
                                <?= $street . ' ' . $number ?> <br>
                                <?= $zip_code . ' ' . $city ?> <br>
                            </div>
                        </div>
                    </li>

                </ul>

                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-1">
                            <i class="fa-solid fa-at"></i> <br>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="col-11">
                            <a class="link-secondary" href="mailto:<?= $email ?>" class="card-link"> <?= $email ?></a> <br>
                            <a class="link-secondary" href="tel:<?= $phone_number ?>" class="card-link"><?= $phone_number ?></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- POSTS -->

        <div class="col-lg-6 col-sm-12">

            <div class="mb-3">
                <label for="post" class="form-label">Example textarea</label>
                <textarea class="form-control" id="post" rows="3"></textarea>
            </div>

            <div class="card mb-4">
                <div class="card-header hstack">
                    <?= date('d/m/Y') ?>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Modifier</a></li>
                            <li><a class="dropdown-item" href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header hstack">
                    <?= date('d/m/Y') ?>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Modifier</a></li>
                            <li><a class="dropdown-item" href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header hstack">
                    <?= date('d/m/Y') ?>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Modifier</a></li>
                            <li><a class="dropdown-item" href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header hstack">
                    <?= date('d/m/Y') ?>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Modifier</a></li>
                            <li><a class="dropdown-item" href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header hstack">
                    <?= date('d/m/Y') ?>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Modifier</a></li>
                            <li><a class="dropdown-item" href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>


        </div>

        <!-- OPTIONS -->

        <div class="col-lg-3 col-sm-12">

        </div>
    </div>
</div>