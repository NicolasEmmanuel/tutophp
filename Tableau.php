<?php

    $monTableau = ["Jerome",
                    "Yannis",
                    "Nicolas",
                    "Veronique" ];
        
        //affiche 1 élément du tableau, affiche "Jerome"
        echo $monTableau[0];
        echo "</br>";
        
        
        

    /*===============================================================================*/   
    // print all item  in my array
        for ($i=0; $i < count($monTableau) ; $i++) { 
            echo $monTableau[$i];
            echo "</br>";
        }
    
    echo "</br>";   
    echo "==================================================";
    echo "</br>";  


    /*===============================================================================*/
    // print inverse all item  in my array
        for ($i=count($monTableau)-1 ; $i>=0 ; $i--) { 
            echo $monTableau[$i];
            echo "</br>"; 
        }
        
    echo "</br>";
    echo "==================================================";
    echo "</br>";
    
    /*===============================================================================*/
        //affiche les noms avec les index "=n°"
        foreach ($monTableau as $index => $row) {
            echo $index." - ".$row;
            echo "</br>";
        }

    echo "</br>";
    echo "==================================================";
    echo "</br>";
        






    /*===============================================================================
        foreach ($monTableau as $key => $row) {
           
            foreach ($rowMulti as $key => $row) {
                echo $key.":  ".$row;
                echo "</br>";
        }*/



?>