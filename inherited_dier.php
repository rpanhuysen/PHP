<?php
    class Dier {
        public $naam;
        public $kleur;
        public $soort;

        public function __construct($naam, $kleur, $soort) {
            $this->naam = $naam;
            $this->kleur = $kleur;
            $this->soort = $soort;
        }

        public function intro() {
            echo "het dier heet {$this->naam} zijn kleur is {$this->kleur}. Het is een {$this->soort}.<br>";
            }
        }
        //
    class Aap extends Dier {
        public function message() {
        echo "Ik ben een aap. <br>";
        }
    }

    class Olifant extends Fruit {
        public $slagtanden=true;
        public $kleur="grjs";

        public function lopen(){
            echo "Ik zet grote stappen. Mijn kleur is {$this->kleur}.<br>";
        }
    }
///////////////////////////////////
        $aap = new Olifant("Aap", "zwart","Zoogdier");
        $aap->message();
        $aap->intro();

        $olifant = new Olifant("Olifant", "blauw","Zoogdier");
        $olifant->message();
        $olifant->intro();
?>