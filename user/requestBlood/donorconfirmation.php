<?php 
session_start();
	if(!isset($_SESSION['id'])){
		header('Location:authentication/login.php');
	}
$donatingid = $_POST["id"];
require '../../include/services/database.php';

$sql = "SELECT donor_id FROM request where id ='$donatingid'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
     $row = mysqli_fetch_assoc($result);
     if($row["donor_id"] == null)
     {
     	echo "<input type='button' value='Donate Blood'>";
     }
     else
     {
     	echo "this request is not availabel any more";
     }
  
} else {
  echo "0 results";
}

mysqli_close($db);
?>