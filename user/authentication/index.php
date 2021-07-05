<?php
$fname=$_POST['fname'];
$mname='';
$lname=$_POST['lname'];
$email=$_POST['email'];
$uname=$email;
$address=$_POST['address'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$weight='';
$password='1234';
$password=password_hash($password,PASSWORD_DEFAULT);
require '../../include/services/database.php';
$t=round(microtime(true) * 1000) - 1599e9 ;
$sql = "SELECT Email FROM Signup where Email='$email'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "sorry,this id is already exsisted";
  }
} 
else 
{
	 $sql = "INSERT INTO Signup(id,FirstName, MiddleName, LastName, UserName, Email, Address, Phone, Birthdate,country,state,city,bloodgroup,gender,weight,password)
	VALUES ('$t','$fname' , '$mname' , '$lname' , '$uname' , '$email' , '$address' ,'$phone' ,'$date' ,'$country' ,'$state', '$city', '$bloodgroup', '$gender', '$weight', '$password')";
	if (mysqli_query($db, $sql)) {
	  echo $t;
	} 
	else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
}

mysqli_close($db);
?>