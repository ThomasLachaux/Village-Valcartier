<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Village Valcartier</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" type="text/css">
        <link rel="stylesheet" href="css/lightbox.min.css" type="text/css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    <body>

        <header>
            <nav>
                <span class="title">Village Valcartier 2019</span>
                <a href="https://github.com/HerelAdrastel/Village-Valcartier" target="_blank" rel="noopener noreferrer">
                    Code source
                </a>
            </nav>
        </header>

        <section>
            <div class="container">
                <?php

                $path = 'images/sortie/';
                $files = scandir($path);
                $files = array_diff($files, array('.', '..'));

                foreach ($files as $file)
                    echo '<a href="' . $path . $file . '" data-lightbox="Gallery"><img src="' . $path . $file . '" alt="Random Image"></a>';

                unset($file);

                ?>
            </div>
        </section>

        <footer>
            <a href="https://www.gnu.org/licenses/gpl-3.0-standalone.html" target="_blank" rel="noopener noreferrer">
                Licence GPL-3
            </a>
            <a href="https://github.com/HerelAdrastel/Village-Valcartier" target="_blank" rel="noopener noreferrer">
                Code source
            </a>
        </footer>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/lightbox.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>