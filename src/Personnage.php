<?php

namespace Cousin\Composer;

class Personnage
{
    public $nom;
    public $vie;
    public $atk;
    public $armure;
    public $gentil;

    public function __construct($nom, $vie, $atk, $armure, $gentil = false)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->atk = $atk;
        $this->armure = $armure;
        $this->gentil = $gentil;
    }
    public function Regenerer($vie = null)
    {
        if (is_null($vie)) {

            $this->vie = $this->vie + 50;
        } else {
            $this->vie += $vie;
        }
    }

    public function Bonus()
    {
        if (!$this->gentil) {
            return 0;
        }
        $random = random_int(1, 6);
        if ($random <= 3) {
            echo $this->nom . "Armure acquise !";
            return 20;
        } else {
            return 0;
        }
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    public function attaque($cible)
    {
        if ($cible->mort()) {
            echo "T'es mort!\n";
            return;
        }
        $cible->vie = $cible->vie - max(0, ($this->atk - $cible->Bonus() - $cible->armure));
        dump($cible);
        dump($cible->armure);

    }
}

// class BadPerso
// {
//     public $vieBad = 10;
//     public $atkBad = 10;
//     public $nomBad;

//     public function attaque($cible)
//     {
//         $cible->vie -= $this->atkBad;

//         var_dump($cible);
//     }

//     public function __construct($nom)
//     {
//         $this->nomBad = $nom;
//     }

//     public function mort()
//     {
//         return $this->vieBad <= 0;
//     }
// }
