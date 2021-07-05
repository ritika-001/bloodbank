<?php
session_start();
$hospital=$_POST['hospital'];
$bloodgroup=$_POST['bloodgroup'];
$timestarts=$_POST['timestarts'];
$timeends=$_POST['timeends'];
$message=$_POST['message'];
require '../../include/services/database.php';
require '../../include/services/functions.php';
$id=round(microtime(true) * 1000) - 1599e9 ;
if(isset($_SESSION['id'])){
	$receiver_id=$_SESSION['id'];
}
else{
	$receiver_id=$_POST['user_id'];
}
$donor_id = null;
$url='http://localhost/bloodbank/user/requestBlood/donorconfirmation.php';
$body = "<html>
<head><title>Blood Request</title></head>
<body><form action='$url' method='post'>
<input type='hidden' name='id'  value='$id'>
<input type='submit'>
</form></body>
</html>";
$sql = "INSERT INTO request(id,receiver_id,donor_id,hospital,bloodgroup,date1,date2,message)
VALUES ('$id','$receiver_id','$donor_id','$hospital', '$bloodgroup', '$timestarts','$timeends','$message')";

if (mysqli_query($db, $sql)) {
	  echo "New record created successfully";
	  $query="select * from signup where id != '$receiver_id'";
	  $result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)){ 
             send_mail($row['Email'],$row['FirstName'],'Blood Request',$body);
            }
        }
	} 
else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}

mysqli_close($db);
?>