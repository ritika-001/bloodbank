<?php 
	session_start();
	if(!isset($_SESSION['id'])){
		header('Location:authentication/login.php');
	}
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="usersettings.css">

	<title>Usersettings</title>
</head>
<body>
<?php

require '../../include/services/database.php';

$sql = "SELECT * FROM signup where id=$id";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
   $row = mysqli_fetch_assoc($result);
?>
<div class="container">
			  <form onsubmit="return false;">
					<div class="row">
						<div class="col-lg-12">
							<h2>Account Settings</h2>
						</div>
					</div><br/>
					<div class="row">
							<div class="col-md-4 col-lg-4">
								<p class="font-nunito">FirstName</p>
							    <input type="text" placeholder="FirstName" value="<?php echo $row ["FirstName"]; ?>" class="input form-control-1" name="FirstName">
			                </div>
			                <div class="col-md-4 col-lg-4">
			                	<p>MiddleName</p>
							    <input type="text" placeholder="MiddleName" value="<?php echo $row ["MiddleName"]; ?>" class="input form-control-1" name="MiddleName">
						    </div>
							<div class="col-md-4 col-lg-4">
								<p>LastName</p>
							    <input type="text" placeholder="LastName" value="<?php echo $row ["LastName"]; ?>" class="input form-control-1" name="LastName">
						    </div>
					</div><br/>
					<div class="row">
							<div class="col-md-6 col-lg-6">
								<p>UserName</p>
							    <input type="text" placeholder="UserName" value="<?php echo $row ["UserName"]; ?>" class="input form-control-1" name="UserName">
			                </div>
			                <div class="col-md-6 col-lg-6">
			                	<p>Email</p>
							    <input type="text" placeholder="Email" value="<?php echo $row ["Email"]; ?>" class="input form-control-1" name="Email">
						    </div>
					</div><br/>
					<div class="row">
							<div class="col-md-6 col-lg-6">
								<p>Phone Number</p>
							    <input type="text" placeholder="Phone number" value="<?php echo $row ["Phone"]; ?>" class="input form-control-1" name="Phone">
			                </div>
			                <div class="col-md-6 col-lg-6">
			                	<p>Brithdate</p>
							    <input type="date" placeholder="Birthdate" value="<?php echo $row ["Birthdate"]; ?>" class="input form-control-1" name="BirthDate">
						    </div>
					</div><br/>
					<div class="row">
							<div class="col-md-4 col-lg-4">
								<p>Country</p>
								<select class="input form-control-2" name="country">
								  <option selected>Country</option>
								  <option value="India">India</option>
								  <option value="Australia">Australia</option>
								</select>
							</div>
							<div class="col-md-4 col-lg-4">
								<p>State</p>
								<select class="input form-control-2" name="state">
								  <option selected>State</option>
								  <option value="Gujrat">Gujrat</option>
								  <option value="Andra pradesh">Andra pradesh</option>
								</select>
				            </div>
				            <div class="col-md-4 col-lg-4">
				            	<p>City</p>
								<select class="input form-control-2" name="city">
								  <option selected>City</option>
								  <option value="Ahmedabad">Ahmedabad</option>
								  <option value="Surat">Surat</option>
								</select>
				            </div>
		            </div><br/>
					<div class="row">
					    <div class="col-md-6 col-lg-6">
						     <p>Gender</p>
						     <select class="input form-control-2" name="gender">
								  <option selected>Gender</option>
								  <option value="Male">Male</option>
								  <option value="Female">Female</option>
								  <option value="Other">Other</option>
							</select>
					    </div>
						<div class="col-md-6 col-lg-6">
							<p>Blood Group</p>
							<select class="input form-control-2" name="bloodgroup">
							  <option selected>Blood Group</option>
							  <option value="A+">A+</option>
							  <option value="A-">A-</option>
							  <option value="B+">B+</option>
							  <option value="B-">B-</option>
							  <option value="AB">AB+</option>
							  <option value="AB-">AB-</option>
							  <option value="O+">O+</option>
							  <option value="O-">O-</option>
							</select>
		                </div>
					</div><br/>
					<div class="row">
						<div class="col-md-6 col-lg-6">
							<p>Weight</p>
							<input type="text" placeholder="weight" value="<?php echo $row ["weight"];?>" class="input form-control-2" name="weight">
						</div>
						<div class="col-md-6 col-lg-6">
							<p>Password</p>
			                <input type="password" placeholder="Password" value="<?php echo $row ["password"];?>" class="input form-control-2" name="password">
			            </div>
			        </div><br/>
			        <div class="row">
						<div class="col-md-12 col-lg-12">
							<p>Address</p>
							<textarea class="textarea" name="Address"  placeholder="Address form-control-2" style="width:100%;border-radius:7px;border:1px solid lightgray;"><?php echo $row ["Address"];?>"
							</textarea>
						</div>
			        </div>
					<div class="buttonspace">
					 <button class="button info" onclick="account()">Submit</button>
				   </div>
		  </form>
</div>
<script type="text/javascript">
	var form=document.forms[0];

	form.country.value="<?php echo $row ["country"];?>";
	form.bloodgroup.value="<?php echo $row ["bloodgroup"];?>";
	form.state.value="<?php echo $row ["state"];?>";
	form.city.value="<?php echo $row ["city"];?>";
	form.gender.value="<?php echo $row["gender"]?>";
</script>
<?php

} else {
  echo "0 results";
}

mysqli_close($db);
?>
</body>
<script type="text/javascript">
	var form=document.forms[0];
	function account() {
	var data=new FormData(form);
		$.ajax({
			url:'account_setting.php',
			method:'post',
			data:data,
			cache: false,
	        processData: false,
	        contentType: false,
			success:function(result,response){
				console.log(result);
			}
		});
	}
</script>
</html>