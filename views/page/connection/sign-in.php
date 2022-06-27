<div class="sm-12 signin-container">
    <h1>Connexion</h1>

    <form action="sign-in" method="POST">

        <!-- 
            EMAIL
         -->
        <div class="form-floating mb-3 my-4">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            <label for="email"><i class="fa-solid fa-at"></i> Email</label>
        </div>

        <!-- 
            PASSWORD
         -->
        <div class="form-floating my-4">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label for="password"><i class="fa-solid fa-key"></i> Mot de passe</label>
        </div>

        <!-- S'enregistrer -->
        <p class="">Toujours pas inscrit ? C'est par <a href="register">ici</a> !</p>

        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>