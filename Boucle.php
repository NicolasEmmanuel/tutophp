<?php

    //Table 

    $nombre = 1;

        //ex: 5 x 6 = 30
        //"++" -> " incrementation"+1" à chaque boucle.
        for ($i=0; $i < 10 ; $i++){ 
            $calcul = $nombre + $i;
            echo $nombre. "+" .$i. "=" .$calcul; 
            echo "</br>";
    }

        //ex avec "tantque"
        $a = 0;
        while ($a <= 10) {
            $calcul = $nombre + $a;
            echo $nombre. "+" .$a. "=" .$calcul; 
            echo "</br>";
            $a++;
    }

//recupéré une variable a partir d'un URL on fait un "GET post"============================================
  //ex dans l'URL on change la valeur de la variable "nombre" par "2"  
    //http://tutophp/boucle.php?nombre=2

        $nombre = 0;
        //"isset" détermine si une variable est considérée définie, ceci signifie qu'elle est déclarée et est différente de null.
        if ( isset($_GET["nombre"])) {
            if($_GET["nombre"] !=""){
                $nombre = $_GET["nombre"];
        }
    }
            for ($i=0; $i < 10 ; $i++){ 
                $calcul = $nombre + $i;
                echo $nombre. "+" .$i. "=" .$calcul; 
                echo "</br>";
    }
    
    



?>