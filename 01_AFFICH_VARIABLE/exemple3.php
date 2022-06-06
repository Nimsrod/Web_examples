<?php
    // ceci est un commentaire
    // les variables
    $prenom;// déclaration de la variable prenom
    $prenom = 'Pierre'; // affectation de la variable prenom
    
    // exercice 1: afficher la valeur contenue dans la variable $prenom
    echo 'Bonjour <br>'; //utilisation de la balise html <br> pour faire un saut de ligne dans l'affichage
    echo $prenom.'<br>';
    $prenom = "Pierre"; // string entre '' ou entre ""
    echo $prenom.'<br>';
    echo 'Bonjour '.$prenom.'<br>'; // concaténation avec .
    echo 'Bonjour ',$prenom,'<br>'; // concaténation avec ,
    echo 'Bonjour $prenom<br>'; // entre '' $prenom est considéré comme string et nom comme une variable
    echo "Bonjour $prenom<br>"; // entre "" $prenom est considéré comme une variable
    $nom = 'Van Rijmenant';
    echo "Bonjour $nom<br>";
    
    // exercice 2: afficher une phrase avec $nom et $prenom
    echo "Mon prenom est $prenom et mon nom est $nom<br>";
    echo gettype($nom)."<br>"; // fonction pour afficher le type d'une variable
    // $nom = 'VR'; // on peut réaffecter une variable
    // $nom = 10; // en php, on peut réaffecter une variable avec un autre type
    echo "Bonjour $nom<br>";
    echo gettype($nom)."<br>";
    
    $nb1 = 5;
    $nb2 = 15;
    // exercice 3: afficher la somme de $nb1 et de $nb2
    // echo gettype($nb1)."<br>";
    // echo gettype($nb2)."<br>";
    $res = $nb1 + $nb2;
    echo "La somme de $nb1 et de $nb2 est égale à $res<br>";
    // exercice faire la différence, la division et la mutliplication entre $nb2 et $nb1
    $res = $nb2 - $nb1;
    echo "La différence entre $nb2 et $nb1 est égale à $res<br>";
    $res = $nb2 * $nb1;
    echo "La multiplication de $nb2 par $nb1 est égale à $res<br>";
    $res = $nb2 / $nb1;
    echo "La division de $nb2 par $nb1 est égale à $res<br>";
    $res = $nb1 / $nb2;
    echo "La division de $nb1 par $nb2 est égale à $res<br>";
    $res = round(($nb1 / $nb2), 2); // fonction pour arrondir un nombre décimal
    echo "La division avec arrondi de $nb1 par $nb2 est égale à $res<br>";
?>