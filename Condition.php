<?php

    /*1-Structure conditionnelle. */
        

        //"Et" = &&
            $vraiEtFaux = true && false;
            var_dump($vraiEtFaux);
        //retoune : boolean false


            $vraiEtVrai = true && true;
            var_dump($vraiEtVrai);
        //retoune : boolean true
            
            $fauxEtFaux = false && false;
            var_dump($fauxEtFaux);
        //retoune : boolean false

/*====================================================*/
        
        // "Ou" = ||
            $vraiOuFaux = true || false;
            var_dump($vraiEtFaux);
        //retoune : boolean false


            $vraiOuVrai = true || true;
            var_dump($vraiEtVrai);
        //retoune : boolean true
            
            $fauxOuFaux = false || false;
            var_dump($fauxEtFaux);
        //retoune : boolean false

/*====================================================*/

    //Comparaison.

            $age = 12; 
            
        // "egal" -> "=="
            if ($age == 12 ){
                echo " $age  = 12";
            }

    echo "</br>";
    
        // "Different" -> "!=" ou "<br>"
            if ($age != 30 ){
                echo " $age  est different 30";
            }

    echo "</br>";

            if($age > 10){
                echo"$age  > 30 ";
            }
    
    echo "</br>";

            if(($age > 10) && ($age < 30)){
                echo" 10 < $age < 30 ";
            }



?>