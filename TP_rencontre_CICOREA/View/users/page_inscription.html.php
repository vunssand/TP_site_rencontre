<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_pageconnexion.css" />
    <title>Authentification</title>

<body>
    <main class="main_form">
    <!-- Gestion des erreurs -->
    <?php if(!empty($errors)): ?>
            <div class="errors">
                <p>Veuillez remplir le formulaire correctement</p>
            </div>
    <?php endif; ?>

<section class="inscription">
       
            </div>

                <form action="inscription.php" method="POST">

                    <span class="form-text">Creez un compte</span>

                  </div>

                  <h4 class="form" style="letter-spacing: 1px;">Creez un compte</h4>

                  <div class="form-auth">
                    <input type="text" name="login" class="form-champs" />
                    <label class="form-label" for="form2Example17">Login</label>
                  </div>

                    <div class="form-auth">
                        <input type="text" name="firstname" class="form-champs" />
                        <label class="form-label" for="form2Example17">Prenom</label>
                    </div>

                    <div class="form-auth">
                        <input type="text" name="lastname" class="form-champs" />
                        <label class="form-label">Nom</label>
                    </div>


                    <div class="form-auth">
                        <label for="pet-select">Choose a gender:</label>

                        <select name="gender" id="choix-sexe">
                            <option value="femme">Femme</option>
                            <option value="homme">Homme</option>
                        </select>
                    </div>

                  <div class="form-auth">
                    <input type="password" name="password" class="form-champs" />
                    <label class="form-label">Mot de passe </label>
                  </div>

                  <div class="form-auth">
                    <input type="password" id="form2Example27" name="password_confirm" class="form-champs" />
                    <label class="form-label">Confirmation Mot de passe </label>
                  </div>

                  <div class="btn-form">
                    <button class="btn-auth"  name="submit" type="submit">Authentification</button>
                  </div>
                </form>

</section>
    </main>
</body>
</html>