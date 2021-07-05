<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$message =$_POST['message'];

require '../../include/services/database.php';
$t=round(microtime(true) * 1000) - 1599e9 ;

$sql = "INSERT INTO ContactUs(id,FullName, Email, Phonenum,city,Message)
VALUES ('$t','$fullname', '$email', '$phone','$city', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>