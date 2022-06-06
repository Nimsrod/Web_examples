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

    $sql = "SELECT * FROM etudiant";
    $results = $PDO->query($sql);
    $list = $results->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion base de données</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <li><a href="ajout.php">Ajout Emile</a></li>
        <li><a href="suppression.php">Suppression Emile</a></li>
    </ul>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $etudiant):?>
            <tr>
                <td><?= $etudiant['prenom']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>