<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $titre ?>
        </title>
    </head>
    <body>
        <header>
            <?php 
            require 'nav.php'
            ?>
        </header>
        <?php
        $contenu_page
        ?>
    </body>
</html>