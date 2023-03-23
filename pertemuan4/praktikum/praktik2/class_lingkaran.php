<?php

    class Lingkaran {
        //property
        private $r;
        const PHI = 3.14;
    


        function __construct($jari) {
            $this->r = $jari;
        }



        //method
        function getLuas(){
            $luas = self::PHI * $this->r * $this->r;
            return $luas;
        }

        function getKel(){
            $kel = 2 * self::PHI * $this->r;
            return $kel;

        }
    }

?>