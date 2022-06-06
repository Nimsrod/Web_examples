<?php
    session_start();
    echo "Page 2<br>";
    echo $_SESSION['prenom']." variable SESSION <br>";
    echo $_SESSION['nom']." variable SESSION <br>";
    echo $_SESSION['age']." variable SESSION <br>";
?>