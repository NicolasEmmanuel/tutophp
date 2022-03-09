<?php

    class Simple{
        private $nomPrive = "toto";
        public $nomPublic = "Gulliano";

        public function getNomPrive(){

            return $this->nomPrive;
        }
        
        public function setNomPrive($nom){

                return $this->nomPrive = $nom;

        }  
        
    }

?>