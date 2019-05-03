<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_barang=$_POST['id_barang'];
 $nama_br=$_POST['nama_br'];
 $hrgasewa=$_POST['hrgasewa'];
 $lamasewa=$_POST['lamasewa'];
 $q=mysqli_query($con,"UPDATE `sewa` SET `id_barang`='$id_barang',`nama_br`='$nama_br',`hrgasewa`='$hrgasewa',`lamasewa`='$lamasewa' where `id_barang`='$id_barang'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>