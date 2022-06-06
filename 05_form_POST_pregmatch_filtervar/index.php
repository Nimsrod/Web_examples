<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if(isset($_POST['submit'])){
        echo "Formulaire envoyé<br>";
        if(empty($_POST['email'])){
            echo "Il faut donner une valeur à email<br>";
        }
        if(empty($_POST['prenom'])){
            echo "Il faut donner une valeur à prenom<br>";
        }
        if(!preg_match('/^[a-zA-Z]+$/',$_POST['prenom'])){
            echo "Utiliser des minuscules et ou des majuscules pour le prénom<br>";
        }
        if(!preg_match('/^0032[0-9]{4}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/',$_POST['telephone'])){
            echo "Utiliser un numéro de téléphone avec le format 0032xxxx-xx-xx-xx<br>";
        }
        if(!preg_match('/^[0-9]+$/',$_POST['age'])){
            echo "Entrer un age correct<br>";
        }
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo "Validation php de l'email";
        }
    }
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
    <form method="POST" action=<?php $_SERVER['PHP_SELF']?>>
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" placeholder="Entrer votre prenom">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Entrer votre email">
        <br>
        <label for="telephone">Telephone:</label>
        <input type="tel" name="telephone" placeholder="Entrer votre telephone">
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" placeholder="Entrer votre age">
        <br>
        <input type="submit" name="submit" value="Envoyer les informations">
    </form>
</body>
</html>