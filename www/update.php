<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_user=$_POST['id_user'];
 $nama=$_POST['nama'];
 $nomor_induk=$_POST['nomor_induk'];
 $email=$_POST['email'];
 $q=mysqli_query($con,"UPDATE customer SET nama='$nama',nomor_induk='$nomor_induk',email='$email' where id_user='$id_user'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>