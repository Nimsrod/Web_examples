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
    $PDO = null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion base de données</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="ajout.php">
        <label for="prenom">Prénom à ajouter: </label>
        <input type="text" name="prenom" placeholder="Entrer le prénom">
        <input type="submit" name="submit" value="Ajouter">
    </form>
    <form method="POST" action="suppression.php">
        <label for="prenom">Prénom à supprimer: </label>
        <input type="text" name="prenom" placeholder="Entrer le prénom">
        <input type="submit" name="submit" value="Supprimer">
    </form>
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