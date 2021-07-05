<?php 
	session_start();
	$user_id=$_SESSION['id'];
	require '../../include/services/database.php';
	$sql="update signup set\n";
	foreach($_POST as $key => $value){
		if(!in_array($key,array('id'))){
			 
				$sql.="$key='$value',\n";
		}
	}
	$sql=substr($sql,0,strlen($sql)-2);
	$sql.="\nwhere id='$user_id';"; 
	if(mysqli_query($db,$sql))
		echo "success";
	else
		echo "something went wrong!";
?>