<?php
    // $string="       Bonjour tout le monde        ";
    // echo $string."<br>";
    // echo strlen($string)."<br>";
    // echo trim($string)."<br>";
    // echo ltrim($string)."<br>";
    // echo rtrim($string)."<br>";
    // echo str_word_count($string)."<br>";
    // echo strrev($string)."<br>";
    // echo strtoupper($string)."<br>";
    // echo strtolower($string)."<br>";
    // echo strpos($string, "tout")."<br>";
    // echo substr($string, 10)."<br>";
    // echo str_replace("Bonjour", "Bonsoir", $string)."<br>";
    
    // $string2="Mon prénom est <b>Pierre</b>";
    // echo $string2."<br>";
    // echo htmlspecialchars($string2)."<br>";
    // echo htmlentities($string2)."<br>";

    $string4="<script>alert('Vous avez été piraté!')</script>";
    echo $string4."<br>";
    echo htmlspecialchars($string4)."<br>";
    echo htmlentities($string4)."<br>";
?>