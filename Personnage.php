<?php 
class Personnage {

    public $vie = 200;
    public $atk = 15;
    public $nom;

    public function attaque($cible) {
        $cible->vieBad -= $this->atk;

        var_dump($cible);
    }

    public function regenerer($vie = null){
        if(is_null($vie)) {

            $this->vie = 50;
        } else {
            $this->vie += $vie;
        }
    }
        
    public function __construct($nom) {
    $this->nom = $nom;
    }

    public function mort(){
        return $this->vie <= 0;
    }
    
}

class BadPerso {
    public $vieBad = 10;
    public $atkBad = 10;
    public $nomBad;

    public function attaque($cible) {
        $cible->vie -= $this->atkBad;

        var_dump($cible);
    }

    public function __construct($nom) {
        $this->nomBad = $nom;
        }

    public function mort(){
        return $this->vieBad <= 0;
    }
}
   
