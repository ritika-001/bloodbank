<?php
$pass=$_POST['pass'];
$email=$_POST['email'];
$pass=password_hash($pass,PASSWORD_DEFAULT);
require '../../include/services/database.php';
$sql = "UPDATE Signup SET password='$pass' WHERE Email='$email';
delete from token where email='$email'; 
";

if (mysqli_multi_query($db, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($db);
}


mysqli_close($db);
?>