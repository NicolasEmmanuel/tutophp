<?php

    include("pooSimple.php");
    
    $simpleTest = new simple();
    
    
    echo $simpleTest->nomPublic ."<br>" ;
         $simpleTest->nomPublic = "Gulliana";
    echo$simpleTest->nomPublic ."<br>" ;
    
    //echo $simpleTest->nomPrive; impossible car nomPrive est definie comme privé
    echo$simpleTest->getNomPrive() ."<br>" ;
        $simpleTest->setNomPrive("tati");
    echo$simpleTest->getNomPrive("<br>");


?>