<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler :<br /> index.php?lastname=Nemare&firstname=Jean</p>
    <a href="http://partie6php/index2.php?lastname=Nemare&firstname=Jean"></a>
    <?php
  if (isset($_GET['age'])){
      echo $_GET['age']; 
  }
 else {
      echo 'Veuillez entrer votre age';
  }
   ?> 

</html>

