<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br />
        index.php?building=12&room=101</p>
    <a href="http://partie6php/index6.php?building=12&room=101"></a>
    <?php
     if (isset($_GET['building']) && isset($_GET['room'])){
      echo 'building n°' . $_GET['building'] . ' chambre n° ' . $_GET['room']; 
    }
 else {
      echo 'Veuillez entrer vos informations';
  }
    ?>

</html>

