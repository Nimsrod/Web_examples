<?php
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    // echo $_SERVER['PHP_SELF'];
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['prenom']=$_POST['firstname'];
        $_SESSION['nom']=$_POST['lastname'];
        $_SESSION['age']=$_POST['age'];
        // echo $_SESSION['prenom']." variable SESSION <br>";
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // echo "Mon nom est $_POST[lastname], 
        // mon prénom est $_POST[firstname] 
        // et mon age est $_POST[age]";
        header('Location: page2.php');
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
    <form method="POST" action=<?php echo $_SERVER['PHP_SELF'] ?>>
        <label for="firstname">Prénom:</label>
        <input type="text" name="firstname" placeholder="Entrer votre prénom">
        <br>
        <label for="lastname">Nom:</label>
        <input type="text" name="lastname" placeholder="Entrer votre nom">
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" placeholder="Entrer votre age">
        <br>
        <input type="submit" name="submit" value="Confirmer">
    </form>
</body>
</html>