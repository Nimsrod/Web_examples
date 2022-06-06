<?php
    // les opérateurs mathématiques
    // addition +
    // soustraction -
    // division /
    // multiplication *
    // exposant **
    // modulo %

    // notation pour addition
    // incrémentation unitaire
    $i = 0;
    echo "$i<br>";
    $i = $i + 1;
    echo "$i<br>";
    $i = $i + 1;
    echo "$i<br>";
    $i += 1; // $i = $i + 1;
    echo "$i<br>";
    $i++; // $i = $i + 1;
    echo "$i<br>";

    // notation pour multiplication
    $j = 5;
    echo "$j<br>";
    $j = $j * 2;
    echo "$j<br>";
    $j *= 2; // $j = $j * 2;
    echo "$j<br>";

    // fonctionne aussi avec la soustraction et la division
    $i -= 5;
    $i /= 2;

    // notation exposant
    $i = 3;
    echo "$i<br>";
    $i =$i**2;
    echo "$i<br>";

    // opérateurs logiques
    // et logique &&
    // ou logique ||
    // nand, or, xor
    // résultat vrai -> true, 1
    // résultat faux -> false, 0

    $a = true;
    echo "$a<br>";
    $b = true;
    echo "$b<br>";
    $c = $a && $b;
    echo "$c<br>";

    $a = true;
    echo "$a<br>";
    $b = false;
    echo "$b<br>";
    $c = $a || $b;
    echo "$c<br>";
?>