<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id_barang=$_POST['id_barang'];
 $nama_br=$_POST['nama_br'];
 $hrgasewa=$_POST['hrgasewa'];
 $lamasewa=$_POST['lamasewa'];
 $q=mysqli_query($con,"INSERT INTO `sewa` (`id_barang`,`nama_br`,`hrgasewa`,`lamasewa') VALUES ('$id_barang','$nama_br','$hrgasewa','$lamasewa')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>