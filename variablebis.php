<?php
    //1-Avec le "echo" cela affiche "Bonjour"
    $maVariableChaine = "Bonjour";


    //2- Exemple de concaténation de variable
    $maVariableChaine = $maVariableChaine ."le monde";
    //3- Va afficher "Bonjour le monde.

    //4- La autre exemple de concatenation 
    $maVariableChaine .= " !";
    //5-Affiche "Bonjour le monde" !" 

    echo $maVariableChaine."</br>";


    //Autre exemple avec des entiers======================================================================
    $monNombre1 = 17;
    $monNombre2 = 20;

    $somme = $monNombre1 + $monNombre2;

    echo "somme de "
                    .$monNombre1. " + "
                    .$monNombre2. " = ".$somme;
                    //6-Le ";" indique la fin de l'instruction (on aurait pu mettre toute l'instruction sur la metttre ligne)

    echo "</br>";

    $myBoolean = true;

    var_dump($myBoolean);

    echo "</br>";

    //Les tableaux.===================================================================================

    $monTableauSimple = ["Jerome" , "Yannis" , "Nicolas"];

    var_dump($monTableauSimple);


    $monTableauMulti = [ ["nom"=>"ZAMANT" , "prenom"=>"Jerome"],
                         ["nom"=>"DUBOIS" , "prenom"=>"Yannis"],
                         ["nom"=>"EMMANUEL" , "prenom"=>"Nicolas"],
                        ];
                
    var_dump($monTableauMulti)
    

    








?>