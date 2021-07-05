<?php
$pname=$_POST['pname'];
$dname=$_POST['dname'];
$bloodgroup=$_POST['bloodgroup'];
$states=$_POST['states'];
$districts=$_POST['districts'];
$disease=$_POST['disease'];
$hospital=$_POST['hospital'];
$cname=$_POST['cname'];
$cnumber=$_POST['cnumber'];
$date=$_POST['date'];
$priority=$_POST['priority'];
$email=$_POST['email'];
$message=$_POST['message'];
// Create connection
$conn = mysqli_connect('localhost','root','','BloodBank');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO RequestBlood(id,FirstName,LastName,dob,Phone,Gender,Notification,age,Bloodgroup,city,address,message)
   VALUES ('pname','$dname' ,'$bloodgroup' ,'$states' ,'$districts' , '$disease' , '$hospital' , '$cname' , '$cnumber' , '$date' ,'$priority' ,'$email' ,'$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>