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

    $sql = 'SELECT * FROM etudiant';
    $results = $PDO->query($sql);
    $list = $results->fetchAll(PDO::FETCH_ASSOC);
    foreach($list as $etudiant){
        echo "Prénom: ". $etudiant['prenom']."<br>";
    }
?>