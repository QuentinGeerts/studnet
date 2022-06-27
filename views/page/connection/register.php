<h1>Inscription</h1>

<form action="register" method="POST">

    <div class="row mb-4">

        <div class="col">
            <label for="lastname" class="form-label">Nom de famille :</label>
            <input type="text" class="form-control" id="lastname">
        </div>

        <div class="col">
            <label for="firstname" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="firstname">
        </div>

    </div>

    <div class="row mb-4">

        <div class="row">

            <div class="col">

                <div class="mb-3">
                    <label for="lastname" class="form-label">Lieu de naissance :</label>
                    <input type="text" class="form-control" id="lastname">
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">Date de naissance :</label>
                    <input type="date" class="form-control" id="lastname">
                </div>

            </div>

            <div class="col">

                <h3>Genre</h3>

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="gender" id="gender1">
                    <label class="form-check-label" for="gender1">
                        Homme
                    </label>

                </div>

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="gender" id="gender2">
                    <label class="form-check-label" for="gender2">
                        Femme
                    </label>

                </div>

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="gender" id="gender3">
                    <label class="form-check-label" for="gender3">
                        Non binaire
                    </label>

                </div>


            </div>

        </div>
        <div class="col"></div>
    </div>

    <button type="submit" class="btn btn-primary" name="register_request">Submit</button>
</form>