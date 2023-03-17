<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */


  $clothes = [
    ["name" => "Kaus", "color" => "Putih", "stock" => 20, "price" => 50000, "description" => "Kaus yang nyaman dan ringan"],
    ["name" => "Kemeja", "color" => "Hitam", "stock" => 15, "price" => 180000, "description" => "Kemeja kekinian"],
    ["name" => "Planel", "color" => "Cream", "stock" => 8, "price" => 185000, "description" => "Planel penambah ketamvanan"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Pakaian</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Harga</th>
          <th>Nama</th>
          <th>Stok</th>
          <th>Warna</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          
          

          foreach($clothes as $clothe){
            echo '<th>' . $clothe["price"] . '</th>';
            echo '<th>' . $clothe["name"] . '</th>';
            echo '<th>' . $clothe["stock"] . '</th>';
            echo '<th>' . $clothe["color"] . '</th>';
            echo '<th>' . $clothe["description"] . '</th>';
            echo '<tr>';
            
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>