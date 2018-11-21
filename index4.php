<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br />
        index.php?language=PHP&server=LAMP</p>
    <a href="http://partie6php/index4.php?language=PHP&server=LAMP"></a>
    <?php
    if (isset($_GET['language']) && isset($_GET['server'])){
      echo $_GET['language'] . ' et ' . $_GET['server']; 
  }
 else {
      echo 'Veuillez entrer vos informations';
  }
   ?> 

</html>

