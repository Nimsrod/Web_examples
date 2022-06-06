<?php
    function affichagemot($mot){
        for($i = 0; $i < strlen($mot); $i++){
            echo "$mot[$i]<br>";
        }
    }
    function affichagetableau($tab){
        for($i = 0; $i < count($tab); $i++){
            echo "$tab[$i]<br>";
        }
    }
    function affichageforeach($tab){
        foreach($tab as $data):
            echo "$data<br>";
        endforeach;
    }
    $mot1 = "Bonjour";
    // echo "$mot1<br>";
    // echo "$mot1[0]<br>";
    // echo "$mot1[1]<br>";
    // echo "$mot1[2]<br>";
    // echo "$mot1[3]<br>";
    // echo "$mot1[4]<br>";
    // echo "$mot1[5]<br>";
    // echo "$mot1[6]<br>";
    // exercice
    // afficher le mot bonjour
    // une lettre par ligne
    // for($i = 0; $i < strlen($mot1); $i++){
    //     echo "$mot1[$i]<br>";
    // }
    $mot2 = "Anticonstitutionnellement";
    // même exercice
    $mot3 = "chat";
    $mot4 = "chien";
    $mot5 = "lion";
    $mot10 = "poisson";

    // affichagemot($mot3);
    // affichagemot($mot4);
    // affichagemot($mot5);
    // affichagemot("girafe");
    // affichagemot($mot10);

    $prenoms = ["Albert", "Benoit", "Charles", "Didier", "Emile"];
    print_r($prenoms);
    echo "<pre>";
    print_r($prenoms);
    echo "</pre>";
    // exercice afficher "Didier"
    // echo "$prenoms[3]<br>";
    // exercice afficher ligne par ligne 
    // les éléments du tableau
    // count() // pour compter les éléments d'un tableau
    // for($i = 0; $i < count($prenoms); $i++){
    //     echo "$prenoms[$i]<br>";
    // }
    affichagetableau($prenoms);
    $lettres = ["a","b","c","d","e","f"];
    affichagetableau($lettres);
    // foreach
    foreach($prenoms as $data){
        echo "$data<br>";
    }
    affichageforeach($lettres);

    // exercice
?>