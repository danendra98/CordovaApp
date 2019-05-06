<?php
 include "db.php";
 if(isset($_GET['id_user']))
 {
 $id=$_GET['id_user'];
 $q=mysqli_query($con,"delete from `customer` where `id_user`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>