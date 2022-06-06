<?php
    $nom = 'Van Rijmenant'; // ici la valeur des variables est écrite en dur mais on peut aller rechercher les informations dans un fichier externe ou dans une base de données
    $prenom = 'Pierre';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Mon nom est <?php echo $nom; ?> et mon prénom est <?php echo $prenom; ?></p>
    <p>Mon nom est <?= $nom; ?> et mon prénom est <?= $prenom; ?></p> <!-- autre façon pour afficher des données en php --> 
</body>
</html>
