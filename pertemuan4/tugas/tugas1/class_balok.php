<?php
    class Balok {
        private $pangjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($pnj, $lbr, $tgi) {
            $this->pangjang = $pnj;
            $this->lebar = $lbr;
            $this->tinggi = $tgi;
		            // code..
        }
    
        public function getLuas() {
            return 2 * ($this->pangjang * $this->lebar) + ($this->pangjang * $this->tinggi) + ($this->lebar * $this->tinggi);
					  // code..
				}
    
        public function getKeliling() {
            return   4 * ($this->pangjang + $this->lebar + $this->tinggi);
                        // code..
        }

        public function getDiagonal() {
            return round(sqrt(pow($this->pangjang, 2) + pow($this->lebar, 2) + pow($this->tinggi, 2)));
            // code..
            // penambahan 1 objek untuk balok
          }
    
        public function getVolume() {
            return ($this->pangjang * $this->lebar * $this->tinggi);
                         // code..
        }
    }
?>