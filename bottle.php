<?php
    class Container {
        public $kleurvloeistof;
        public $soortvloeistof;

        public function __construct($kleurvloeistof, $soortvloeistof) {
            $this->kleurvloeistof = $kleurvloeistof;
            $this->soortvloeistof = $soortvloeistof;
        }

        public function intro() {
            echo "De inhoud van deze container is van kleur en van soort.<br>";
            }
        }
        // Strawberry is inherited from Fruit

        class Bottle extends Container {
            $statusDop="dicht";

            public function drinken(){
                echo "Ik neem een slok.<br>";
                echo "Dan zet ik de statusDop op open.<br>";
                private function opendicht(){
                    if ($statusDop="open")? "dicht":"open";
                }
            }
        }
        $bottle = new Bottle("Cola", "1");
        $bottle->intro();
        $bottle->drinken();