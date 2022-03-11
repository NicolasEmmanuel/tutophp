<?php

    class calculer {
        public $nombre = 0;
        public $operateur = "+";
        public $operande = 0;
        
        /*private function monCalcul(){
            
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
        return $this->nombre + $this->operande;
    }*/


    private function monCalcul(){

        switch ($this->operateur) {
            case '+':
                return $this->nombre + $this->operande;
                break;
            case '-':
                return $this->nombre - $this->operande;
                break;
            case '*':
                return $this->nombre * $this->operande;
                break;
            
            default:
                return $this->nombre + $this->operande;
                break;
        }
    }         
                


        public function resultat(){
            //"$this" est la valeur de l'objet appelant.
            echo $this->nombre." "
                 .$this->operateur." "
                 .$this->operande."="
                 .$this->moncalcul() ; 
        }
    }
    


?>