<?php
$email=$_POST['email'];
require '../../include/services/database.php';
require '../../include/services/functions.php';
$token=random_string(30,'Aa1');
$url='http://localhost/bloodbank/user/authentication/resetpassword.php?id='.$token;
$body = "<html>
<head><title>Blood Request</title></head>
<body><form action='$url' method='post'>
<p>Hey user,<br/>
You have to click on down button for reseting the password.If you have any query please cintact us</p>
<input type='submit'>
</form></body>
</html>";
$sql = "INSERT INTO token(token, email)
VALUES ('$token', '$email')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
    $query = "SELECT * FROM Signup where email='$email'";
    $result = mysqli_query($db, $query);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	        $row = mysqli_fetch_assoc($result); 
	        echo "email: " . $row["Email"];
	        send_mail($row['Email'],$row['FirstName'],'Blood Request',$body);
	} 
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}



mysqli_close($db);
?>