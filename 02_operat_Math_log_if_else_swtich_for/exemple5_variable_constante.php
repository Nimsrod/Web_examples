<?php
    // les variables
    // les chaines de caractères
    $prenom = 'Pierre';
    echo "$prenom<br>";
    echo gettype($prenom)."<br>";
    
    // les entiers
    $age = 20;
    echo "$age<br>";
    echo gettype($age)."<br>";
    // entier binaire
    $entierBinaire = 0b10;
    echo "$entierBinaire<br>";
    echo gettype($entierBinaire)."<br>";
    // entier hexadécimal
    $entierHexadécimal = 0x10;
    echo "$entierHexadécimal<br>";
    echo gettype($entierHexadécimal)."<br>";
    // entier octal
    $entierOctal = 010;
    echo "$entierOctal<br>";
    echo gettype($entierOctal)."<br>";
    
    // nombre décimal
    $decimal = 3.5;
    echo "$decimal<br>";
    echo gettype($decimal)."<br>";
    
    // booléen
    $bool = true;
    echo "$bool<br>";
    echo gettype($bool)."<br>";
    $bool = false;
    echo "$bool<br>"; // attention quand on affiche une valeur false
    echo gettype($bool)."<br>";
    
    // les constantes
    define("PI", 3.14);
    echo PI."<br>";
?>