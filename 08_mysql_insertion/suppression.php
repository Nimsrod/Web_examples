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

    // Pour supprimer un étudiant qui a comme prénom Emile
    $sql = "DELETE FROM etudiant WHERE prenom = 'Emile'";
    $results = $PDO->query($sql);
    header('Location: connexion.php');
?>