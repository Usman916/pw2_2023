<?php 
    require_once 'dbkoneksi.php';

   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>

    <a href="index.php">BACK</a>
    <br>    
    <br>    
    <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
    <br>
    <br>
    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
        <thead>
            <tr>
                <th>No</th><th>Kode</th><th>Nama</th>
                <th>Harga Jual</th><th>Qty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor  =1 ;
            foreach($rs as $row){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row['kode']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['harga_jual']?></td>
                    <td><?=$row['stok']?></td>
                    <td>
                        <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a> /
                        <a class="btn btn-primary" href="update_produk.php?idedit=<?=$row['id']?>&proses=View">Edit</a> /
                        <a class="btn btn-primary" href='delete_produk.php?id=<?= $row['id'] ?>'
                        >Delete </a>
                    </td>
                </tr>
            <?php 
            $nomor++;   
            } 
            ?>
        </tbody>
    </table>  
