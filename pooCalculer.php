<?php

    class calculer {
        public $nombre = 0;
        public $operateur = "+";
        public $operande = 0;
        
        private function monCalcul(){
            
    //"return" retourne le contrôle du programme au module appelant. L'exécution reprend alors à l'instruction suivante de l'invocation du module.

            if ($this->operateur == "+"){          
                return $this->nombre + $this->operande;
        }
            if ($this->operateur == "-"){          
                return $this->nombre + $this->operande;
        }
            if ($this->operateur == "*"){          
                return $this->nombre + $this->operande;
        }
    }


        public function resultat(){
            //"this" fonction pour atteindre les variables
            echo $this->nombre." "
                 .$this->operateur." "
                 .$this->operande;
        }
    }
    


?>