<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br />
        index.php?week=12</p>
    <a href="http://partie6php/index5.php?week=12"></a>
    <?php
    if (isset($_GET['week'])) {
        echo 'Semaine = ' . $_GET['week'];
    } else {
        echo 'Veuillez entrer vos informations';
    }
    ?> 

</html>

