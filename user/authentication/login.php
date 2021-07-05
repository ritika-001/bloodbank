<?php 
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
    
	<title>Login</title>
</head>
<body>
<section class="Login">
<div class="login1">
		<h2 class="font-mont">Blood Bank</h2>
		<p class="font-nunito">User Experience & Interface Design<br/>
	      Strategy SaaS Solutions</p>
	      <div class="bloodlogo d-flex justify-content-center mt-5">
				<img src="bloodlogo1.png" width="425px" height="519px">
			</div>
</div>
<div class="login2" style="background-color:#f6dcdc;">
	<div class="innerlogin">
	    <form onsubmit="return false;">

	      <h3 class="font-mont" style="margin-bottom:0;font-size:1.5rem;">Sign In</h3>
		<div class="text">	      
           <h4 class="text-muted font-mont">New Here?</h4>&nbsp;&nbsp;<h4 class="font-mont"><a href="Signup.html" style="color:black;text-decoration:none;">Create Account</a></h4>
	  </div><br/><br/>
			<div class="input">
				<h4 class="font-mont">Your UserName</h4>
				<input type="text" name="uname">
			</div>
			<br/>
			<div class="input">
				<div class="inputtext1"><h4 class="font-mont">Your Password</h4></div>
					<div class="inputtext2"><h4 class="font-mont"><a href="forgotpassword.php" style="color:black;text-decoration:none;">Forgot Password?</a></h4></div>
				<input type="password" name="password">
			</div>
			<button class="button info" onclick="submitd()" style="background-color: #f32165;">Login Up</button>
		</form>
    </div>
</div>
</section>
</body>
<script type="text/javascript">
	
        
	function submitd(){
		var form=document.forms[0];
		 {
			var data={
				uname:form.uname.value,
				password:form.password.value,
			}
			console.log(data);
			$.ajax({
				url:'login_back.php',
				method:'post',
				data:data,
				success:function(result,response){
					if(result=='success'){
						location.replace('../')
					}else
					alert(result);
				}
			});
		}
	}
</script>
</html>