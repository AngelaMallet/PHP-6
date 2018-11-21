<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: <br />
        index.php?lastname=Nemare&firstname=Jean</p>
    <a href="http://partie6php/index.php?lastname=Nemare&firstname=Jean"></a>
    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname'])){
      echo $_GET['lastname'] . '  ' . $_GET['firstname']; 
  }
 else {
      echo 'Veuillez entrer votre nom';
  }
   ?> 

</html>

