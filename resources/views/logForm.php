<?=view ('layout.header');?>

<div class=" d-flex container">
    <section class="loginForm">
        <h1>Connectez-vous</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Nous ne communiquons jamais vos informations personnelles.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <section class="loginForm">
        <h1>Nouveau visiteur</h1> 
        <p>créez votre compte pour acceder aux Quizz</p>
         <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Nom et prénom</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Adresse</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Ecole</label>
                <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">Classe</label>
                <select id="inputState" class="form-control">
                    <option selected>2NDE</option>
                    <option>1ERE</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">F/M</label>
                <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </section>
</div>

<?=view ('layout.footer');?>
