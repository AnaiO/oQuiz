<?=view ('layout.header');?>

<div class=" d-flex container">
<!-- login form -->
    <section class="loginForm">
            <h1>Connectez-vous</h1> 
            
            <form action="" method="post">
            <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                    <small id="emailHelp" class="form-text text-muted">Nous ne communiquons jamais vos informations personnelles.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </section>
<!-- End login form -->

<!-- Sign up form  -->
   
    <section class="loginForm">
         <h1>Nouveau visiteur</h1> 
         <p>créez votre compte pour acceder aux Quizz</p>
        <form action="<?=route('signup');?>" method="post">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom" required>
                </div>
                <div class="form-group col-6">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" required>
                </div>
              </div>  
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                <small id="emailHelp" class="form-text text-muted">Nous ne communiquons jamais vos informations personnelles.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>

<?=view ('layout.footer');?>
