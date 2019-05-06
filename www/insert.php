<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $nomor_induk=$_POST['nomor_induk'];
 $email=$_POST['email'];
 $q=mysqli_query($con,"INSERT INTO `customer` (`nama`,`nomor_induk`,`email`) VALUES ('$nama','$nomor_induk','$email')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>