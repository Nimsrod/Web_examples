<?php
    // les boucles
    // for
    // foreach
    // while
    // do while

    // for
    for($i = 0; $i<5; $i++){
        echo "i est égal à $i<br>";
    }

    // boucle imbriquée for
    for($i = 0; $i<4; $i++){
        for($j = 0; $j<3; $j++){
            echo "La valeur de ij = $i$j<br>";
        }
    }

    for($i = 0; $i<4; $i++){
        for($j = 0; $j<3; $j++){
            for($k = 0; $k <5; $k++){
                echo "La valeur de ijk = $i$j$k<br>";
            }
        }
    }

    // syntaxe alternative pour for
    for($i = 0; $i <5; $i++):
        echo "i est égal à $i<br>";
    endfor;
?>