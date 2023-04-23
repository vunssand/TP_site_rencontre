<html lang="fr">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_pageconnexion.css" />
    <title>Page d'authentification</title>

    </head>

    <body>
    <main class="formulaire">
        <!--On va d'abord s'occuper des cas d'erreurs-->
    <?php
    if (!empty($erreurs)) :
    ?>
        <div class="erreurs">
            <p>Veuillez remplir le formulaire correctement, des erreurs ont été trouvées</p>
        </div>
        <?php endif; ?>

    <div class="container">
      <section>
        <form action="page_connexion.php" method="POST">
          <div class="d-flex align-items-center mb-3 pb-1">
            <span class="form-text">Authentification</span>
          </div>
          <h5 class="form-text" style="letter-spacing: 1px;">Connectez-vous</h5>
          <div class="form-champs">
            <input type="text" id="form2Example17" name="login" class="form-control form-control-lg" />
            <label class="form-label" for="form2Example17">Identifiant</label>
          </div>
          <div class="form-champs">
            <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
            <label class="form-label">Mot de passe</label>
          </div>
          <div class="btn-form">
            <button class="btn-auth" name="submit" type="submit">Authentification</button>
          </div>
          <p style="color: #393f81;"><a href="inscription.php" style="color: #393f81;">Créer un compte</a></p>
        </form>
      </section>
    </div>
  </body>
</html>
