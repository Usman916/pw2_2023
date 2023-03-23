<?php

    require_once 'class_lingkaran.php';

    echo "Nilai PHI = " . Lingkaran::PHI;


    $lingkaran1 = new Lingkaran(7);
    $lingkaran2 = new Lingkaran(15);


    echo"<br><br>";

    echo "<br>Luas Lingkaran1 = " . $lingkaran1->getLuas();
    echo "<br>Luas Lingkaran2 = " . $lingkaran2->getLuas();


    echo "<br>Kel Lingkaran1 = " . $lingkaran1->getKel();  
    echo "<br>Kel Lingkaran2 = " . $lingkaran2->getKel();

?>