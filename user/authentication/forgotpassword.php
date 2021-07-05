<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="forgotpassword.css">
	<title>Forgot Password</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 d-flex justify-content-center flex-column p-0">
			<center><h1 class="font-mont">Welcome!!</h1></center>
			<center><p class="font-nunito text-muted">Give Blood,save life</p></center>
			<div class="bloodlogo d-flex justify-content-center mt-5">
				<img src="bloodlogo1.png" width="100%">
			</div>
		</div>
		<div class="col-lg-9 d-flex justify-content-center flex-column p-0">
			<div class="inputform">
				<div class="row">
						<div class="col-lg-12">
							<h2>Forgot Password?</h2>
						</div>
				</div><br/>
				<form onsubmit="return false;">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<p class="font-nunito">Email</p>
						<input type="text" placeholder="Email" class="input form-control-1" name="email">
					</div>
					<button class="button info" onclick="forgotsubmit()">Submit</button>
				</div>
			    </form>
			</div>
		</div>
    </div>
</div>
</body>
<script type="text/javascript">
function forgotsubmit()
{
		var form=document.forms[0];
		 {
			var data={
				email:form.email.value,
			}
			console.log(data);
			$.ajax({
				url:'changepassword.php',
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