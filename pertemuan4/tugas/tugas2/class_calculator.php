<?php
    class Cal {
        private $Cltr;
        private $Caltr;

        public function __construct($cal,$cals) {
            $this->Cltr = $cal;
            $this->Caltr = $cals;
        }

        public function getPertambahan() {
            return ($this->Cltr  + $this->Caltr);
				}
    
        public function getPerkalian() {
            return ($this->Cltr  * $this->Caltr);
        }

        public function getPengurangan() {
            return ($this->Cltr  - $this->Caltr);
          }
    
        public function getPembagian() {
            return ($this->Cltr  / $this->Caltr);
        }
    }
    $cal = new Cal(11, 10);

    echo "<br> Hasil Tambah: " . $cal->getPertambahan();    
    echo "<br><br> Hasil Kurang: " . $cal->getPengurangan();     
    echo "<br><br> Hasil Kali: " . $cal->getPerkalian();      
    echo "<br><br> Hasil Bagi: " . $cal->getPembagian();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="css.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <style>
        .kal{
            font-size: 30px;
            padding: 0;
            text-align: center;
            background-color: #0dcaf0;
            
}
    </style>
</head>
<body class="kal">
    
</body>
</html>