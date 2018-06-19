<?php
include('config.php');
$id = $_GET['id'];
 $sql="DELETE FROM anu WHERE id='".$id."'";
 	 mysqli_query($sql,$conn);
if($conn->query($sql) === TRUE) {
   header('Location:home.php');
}
 else {
 
}
 ?>