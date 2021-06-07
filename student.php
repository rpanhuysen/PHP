<?php
    class Student {
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
    }
    class hboStudent extends Student {
        public function message() {
            echo "Ik ben een hboStudent. <br>";
        }
    }

    class mboStudent extends Student {
        public $smeerkaas=true;
        
        public function message(){
            echo "Ik ben een mbo Student. Ik hou van smeerkaas.<br>";
        }
    }

// OPDRACHT

// Schrijf zelf een class voor een zelfbedacht overerving object.

// Kijk goed naar het voorbeeld van hierboven en van de lessen. 

// Push de juiste code naar je github of gitlab repository.
