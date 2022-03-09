<?php

    include("poo.php");


    //include("fonction.php");
    
    $majeur = new Majeur();
    $nom = strtoupper("Gustave");
    
    $prenom = "Gulliano";
    
    $age = 16;
    $affAge = true;

    echo $majeur->majeurOrNot($nom, $prenom, $age );
    
    
    

?>