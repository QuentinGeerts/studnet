<?= $register_information ?>

<h1 class="mb-3">Inscription</h1>

<form action="register" method="POST">

    <fieldset>

        <legend class="mb-4">Informations personnelles</legend>

        <div class="row mb-4">

            <div class="col-lg-4 col-xs-12">
                <label for="lastname" class="form-label"><i class="fa-solid fa-address-card"></i> Nom de famille :</label>
                <input type="text" name="lastname" class="form-control <?= $lastname_validity ?>" id="lastname" value="<?= $lastname ?>" autofocus required>
            </div>

            <div class="col-lg-4 col-xs-12">
                <label for="firstname" class="form-label"><i class="fa-solid fa-address-card"></i> Prénom :</label>
                <input type="text" name="firstname" class="form-control <?= $firstname_validity ?>" id="firstname" value="<?= $firstname ?>" required>
            </div>


            <div class="col-lg-4 col-xs-12">
                <h4>Genre</h4>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="M" <?= !isset($gender) || isset($gender) && $gender == 'M' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender1"><i class="fa-solid fa-mars"></i> Homme</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="F" <?= isset($gender) && $gender == 'F' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender2"><i class="fa-solid fa-venus"></i> Femme</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender3" value="X" <?= isset($gender) && $gender == 'X' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender3"><i class="fa-solid fa-genderless"></i> Non binaire</label>
                </div>
            </div>

        </div>

        <div class="row mb-4">

            <div class="col-lg-4 col-xs-12">

                <div class="mb-3">
                    <label for="birthplace" class="form-label"><i class="fa-solid fa-location-dot"></i> Lieu de naissance :</label>
                    <input type="text" name="birthplace" class="form-control <?= $birthplace_validity ?>" id="birthplace" value="<?= $birthplace ?>">
                </div>
            </div>

            <div class="col-lg-4 col-xs-12">

                <div class="mb-3">
                    <label for="birthdate" class="form-label"><i class="fa-solid fa-cake-candles"></i> Date de naissance :</label>
                    <input type="date" name="birthdate" class="form-control <?= $birthdate_validity ?>" id="birthdate" value="<?= $birthdate ?>">
                </div>

            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="mb-3">
                    <label for="phone_number" class="form-label"><i class="fa-solid fa-phone"></i> Numéro de téléphone :</label>
                    <input type="tel" name="phone_number" class="form-control <?= $phone_number_validity ?>" name="phone_number" id="phone_number" value="<?= $phone_number ?>">
                </div>
            </div>
        </div>

    </fieldset>

    <!-- 
        DONNEES DE CONNEXION
     -->

    <div class="row mb-4">
        <div class="col-lg-6 col-xs-12">
            <fieldset>
                <legend>Données de connexion</legend>
                <div class="col">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="fa-solid fa-at"></i> Email :</label>
                        <input type="text" name="email" class="form-control <?= $email_validity ?>" id="email" value="<?= $email ?>" required>
                        <?= $email_error ?>
                    </div>
                </div>

                <div class="col">

                    <div class="mb-3">
                        <label for="password" class="form-label"><i class="fa-solid fa-key"></i> Mot de passe :</label>
                        <input type="text" name="password" class="form-control <?= $password_validity ?>" id="password" value="<?= $password ?>" required>
                        <?= $password_error ?>
                    </div>

                    <div class="mb-3">
                        <label for="repeat_password" class="form-label"><i class="fa-solid fa-arrow-rotate-right"></i> Répéter le mot de passe :</label>
                        <input type="text" name="repeat_password" class="form-control <?= $repeat_password_validity ?>" id="repeat_password" value="<?= $repeat_password ?>" required>
                        <?= $password_error ?>
                    </div>

                </div>
            </fieldset>
        </div>

        <div class="col-lg-6 col-xs-12">
            <fieldset>
                <legend>Adresse</legend>

                <div class="mb-3">
                    <label for="street" class="form-label"><i class="fa-solid fa-location-dot"></i> Rue :</label>
                    <input type="text" name="street" class="form-control <?= $street_validity ?>" id="street" value="<?= $street ?>">
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label"><i class="fa-solid fa-hashtag"></i> Numéro :</label>
                    <input type="text" name="number" class="form-control <?= $number_validity ?>" id="number" value="<?= $number ?>">
                </div>

                <div class="mb-3">
                    <label for="zip_code" class="form-label"><i class="fa-solid fa-book"></i> Code postal :</label>
                    <input type="text" name="zip_code" class="form-control <?= $zip_code_validity ?>" id="zip_code" value="<?= $zip_code ?>">
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label"><i class="fa-solid fa-city"></i> Ville :</label>
                    <input type="text" name="city" class="form-control <?= $city_validity ?>" id="city" value="<?= $city ?>">
                </div>

            </fieldset>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" name="register_request">Submit</button>
</form>