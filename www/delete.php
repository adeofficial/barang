<?php
 include "db.php";
 if(isset($_GET['id_barang']))
 {
 $id_barang=$_GET['id_barang'];
 $q=mysqli_query($con,"delete from `sewa` where `id_barang`='$id_barang'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>