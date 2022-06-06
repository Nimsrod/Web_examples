<?php
    $DB_DSN = 'mysql:host=localhost;dbname=universite';
    $DB_USER = 'root';
    $DB_PASS = '';

    try{
        $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
    }
    catch(PDOException $pe){
        echo "ERREUR :" .$pe->getMessage();
    }

    // Pour ajouter un étudiant qui a comme prénom Emile
    $sql = "INSERT INTO etudiant(prenom) VALUES ('Emile')";
    $results = $PDO->query($sql);
    header('Location: connexion.php');
?>
