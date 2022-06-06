<?php
    // les opérateurs de comparaison
    // == égal à
    // != est différent de
    // <=, >=, <, >
    // === identique en valeur et en type
    // !== différent en valeur ou différent en type

    $entier = 20;
    // if
    if($entier == 5){
        echo "La variable est égale à 5<br>";
    }

    if($entier != 5){
        echo "La variable n'est pas égale à 5<br>";
    }

    // if, else
    if($entier == 5){
        echo "La variable est égale à 5<br>";
    } else {
        echo "La variable n'est pas égale à 5<br>";
    }

    // if, elseif, else
    if($entier <= 5){
        echo "La variable est <= à 5<br>";
    } elseif($entier <= 10) {
        echo "La variable est <= à 10<br>";
    } else {
        echo "La variable est > à 10<br>";
    }

    // syntaxe alternative pour if
    if($entier <= 5):
        echo "La variable est <= à 5<br>";
    elseif($entier <= 10):
        echo "La variable est <= à 10<br>";
    else:
        echo "La variable est > à 10<br>";
    endif;

    // switch
    $nombre = 10;
    switch($nombre){
        case 0:
            echo "nombre est égal 0<br>";
            break;
        case 1:
            echo "nombre est égal 1<br>";
            break;
        case 2:
            echo "nombre est égal 2<br>";
            break;
        case 3:
            echo "nombre est égal 3<br>";
            break;
        default:
            echo "autre valeur<br>";
    }

    // syntaxe alternative pour switch
    $nombre = 1;
    switch($nombre) :
        case 0:
            echo "nombre est égal 0<br>";
            break;
        case 1:
            echo "nombre est égal 1<br>";
            break;
        case 2:
            echo "nombre est égal 2<br>";
            break;
        case 3:
            echo "nombre est égal 3<br>";
            break;
        default:
            echo "autre valeur<br>";
    endswitch;
?>