<!-- <h1>Connexion</h1> -->
<div class="sm-12 signin-container">

    <form action="sign-in" method="POST">

        <div class="row align-items-center ms-auto">

            <div class="col-lg-6">
                <img src="<?= $basement ?>/public/img/logo.png" alt="Logo" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">

                <?php
                
                if(!empty($signin_information)) {
                    echo '<div class="form-floating mb-3 my-4">';
                    echo $signin_information;
                    echo '</div>';
                }
                
                ?>

                <!-- EMAIL -->
                <div class="form-floating mb-3 my-4">
                    <input type="email" name="email" class="form-control <?= $email_validity ?>" id="email" placeholder="Email" value="<?= $email ?>">
                    <label for="email"><i class="fa-solid fa-at"></i> Email</label>
                    <?= $email_error ?>
                </div>

                <!-- PASSWORD -->
                <div class="form-floating my-4">
                    <input type="password" name="password" class="form-control <?= $password_validity ?>" id="password" placeholder="Password" <?= ($password_error == 'is-invalid' ? 'autofocus' : '') ?>>
                    <label for="password"><i class="fa-solid fa-key"></i> Mot de passe</label>
                    <?= $password_error ?>
                </div>

            </div>

            <button type="submit" class="btn btn-primary w-25 ms-auto mb-3">Se connecter</button>

            <!-- S'enregistrer -->
            <p class="text-center">Toujours pas inscrit ? C'est par <a href="<?= $basement?>/register">ici</a> !</p>

        </div>


    </form>
</div>