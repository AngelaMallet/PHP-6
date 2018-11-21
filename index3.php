<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <p>Faire une page index.php Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br /> 
        index.php?startDate=2/05/2016&endDate=27/11/2016</p>
    <a href="http://partie6php/index3.php?startDate=2/05/2016&endDate=27/11/2016"></a>
    <?php
    if (isset($_GET['startDate']) && isset($_GET['endDate'])){
      echo $_GET['startDate'] . ' au ' . $_GET['endDate']; 
  }
 else {
      echo 'Veuillez entrer vos dates';
  }
   ?> 

</html>

