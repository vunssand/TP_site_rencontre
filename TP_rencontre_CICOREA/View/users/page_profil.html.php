<!DOCTYPE html>
<html>
    <head>
        <title>Profil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_pageprofil.css">
    </head>
    <body class="page_profil">
        <main class="main_form">
            <section>
                <form action="profil.php" method="POST">
                    <div class="recup-profil">
                        <!-- récupération du nom du profil pour intégration dans le h2 -->
                        <h2 class="card-text sous-titre">Profil de <?php echo $r_ps[0] ?></h2>
                    </div>
                    <h5 class="form-text" style="letter-spacing: 1px;">Mettre à jour le profil</h5>
                    <div class="form-champs">
                        <input type="text" name="login" class="form-conn" />
                        <label class="form-label">Connexion</label>
                    </div>
                    <div class="form-champs">
                        <input type="password" name="password" class="form-mdp" />
                        <label class="form-label">Mot de passe</label>
                    </div>
                    <div class="pt-1 mb-4">
                        <button class="btn-maj" name="validation" type="submit">Mettre à jour</button>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>
