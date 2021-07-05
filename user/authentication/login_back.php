<?php
$uname=$_POST['uname'];
$password=$_POST['password'];
$check_username='';
$check_password='';
require '../../include/services/database.php';
$sql = "SELECT * FROM signup where UserName='$uname'";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result)==0) 
  echo "invalid email address!";
else{
  $result=mysqli_fetch_array($result);
  if($result['UserName']!=$uname)
    echo "Sql injection";
  else if(!password_verify($password,$result['password']))
    echo "wrong password";
  else {
    session_start();
    $_SESSION['username']=$result['UserName'];
    $_SESSION['id']=$result['id'];
    echo "success";
  
  }
}
mysqli_close($db);
?>