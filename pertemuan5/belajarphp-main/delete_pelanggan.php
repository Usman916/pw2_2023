<?php 
require_once 'dbkoneksi.php';
?>

<?php 

   $ar_data[] = $_GET['id'];
   try 
   {
      $sql = "DELETE FROM pelanggan WHERE id = ?";
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);

   } 
   catch(PDOException $e) 
   {  
      echo $e->getMessage();
   }

   header('location:list_pelanggan.php');
   ?>
   
