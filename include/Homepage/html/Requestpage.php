<?php 
	require '../../services/functions.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/basic.css">
	<title>RequestBlood</title>
	<script type="text/javascript">
		var jsroot='<?php echo $jsroot; ?>';
	</script>
</head>
<style>
	input,textarea
	{
		padding:20px 1rem;
		width:100%;
		border-radius: 7px;
		border:1px solid lightgray;
		background-color:#f6f5f5;
	}
	textarea
	{
		padding:6px 1rem;
	}
	.abcd
	{
	    padding:20px 1rem;
		width:100%;
		border-radius: 7px;
		border:1px solid lightgray;
		
		background-color:#f6f5f5;	
	}

.button {
  background-color: #ff879c;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width:200px;
  border-radius: 7px;
}
</style>
<body>
<?php 
require 'header.php'; 
?>
<section class="addrequestpage">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="font-mont">Request For Blood</h3>
			</div>
		</div>	<br/>
		<form onsubmit="return false;">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<p>Firstname</p>
				<input type="text" placeholder="FirstName" name="fname">
			</div>
			<div class="col-md-6 col-lg-6">
				<p>Lastname</p>
				<input type="text" placeholder="LastName" name="lname">
            </div>
         </div><br/>
         <div class="row">
         	<div class="col-md-6 col-lg-6">
         		<p>BirthDate</p>
         		<input type="date" placeholder="Date" name="bdate">
         	</div>
            <div class="col-md-6 col-lg-6">
            	<p>Gender</p>
				<select class="abcd" name="gender">
				  <option selected>Gender</option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				</select>
            </div>
		</div>
		<br/>
        <div class="row">
			<div class="col-md-4 col-lg-4">
				<p>Country</p>
				<select class="abcd" name="country">
				  <option selected>Country</option>
				  <option value="India">India</option>
				  <option value="Australia">Australia</option>
				</select>
			</div>
			<div class="col-md-4 col-lg-4">
				<p>State</p>
				<select class="abcd" name="state">
				  <option selected>State</option>
				  <option value="Gujrat">Gujrat</option>
				  <option value="Surat">Surat</option>
				</select>
            </div>
            <div class="col-md-4 col-lg-4">
            	<p>City</p>
				<select class="abcd" name="city">
				  <option selected>City</option>
				  <option value="Ahmedabad">Ahmedabad</option>
				  <option value="Baroda">Baroda</option>
				</select>
            </div>
		</div><br/>
		<div class="row">
			<div class="col-lg-6">
				<p>Address</p>
				<textarea class="textarea" placeholder="address" rows="2" name="address"></textarea>
			</div>
			<div class="col-lg-6">
				<p>Blood Group</p>
				<select class="abcd" name="bloodgroup">
				  <option selected>Blood Group</option>
				  <option value="A+">A+</option>
				  <option value="A-">A-</option>
				  <option value="B+">B+</option>
				  <option value="B-">B-</option>
				  <option value="AB+">AB+</option>
				  <option value="AB-">AB-</option>
				  <option value="O+">O+</option>
				  <option value="O-">O-</option>
				</select>
			</div>
		</div><br/><br/>
		<div class="row">
			<div class="col-lg-12">
				<h3 class="font-mont">Contact Details</h3>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<p>Email</p>
				<input type="text" placeholder="Email" name="email">
			</div>
			<div class="col-md-6 col-lg-6">
				<p>PhoneNumber</p>
				<input type="text" placeholder="Phonenumber" name="phonenum">
            </div>
         </div><br/>
         <div class="row">
         	<div class="col-md-6 col-lg-6">
         		<p>StartDate</p>
         		<input type="date" placeholder="Startdate" name="timestarts">
         	</div>
            <div class="col-md-6 col-lg-6">
            	<p>EndDate</p>
         		<input type="date" placeholder="Enddate" name="timeends">
		    </div>
		</div><br/>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<p>HospitalName</p>
				<input type="text" placeholder="HospitalName" name="hospital">
			</div>
			<div class="col-md-6 col-lg-6">
				<p>Any Message</p>
				<input type="text" placeholder="Any Message..." name="message">
            </div>
         </div><br/>
    </form>
	<button class="button" onclick="submitd();">Submit</button>

	</div>
</section>
<footer class="footer">	
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<p class="font-mont">Get connected with us on social media</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
                <div class="icons">
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-google" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			   </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3 outerfooter">
				<div class="innerfooter">
					<h4 class="font-mont">COMPANY</h4>
					<p class="font-nunito">Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.your footer content elit.your footer content.</p>
			    </div>
			</div>
			<div class="col-md-6 col-lg-3 outerfooter">
				<div class="innerfooter footerproducts">
					<h4 class="font-mont">PRODUCTS</h4>
					<p class="font-nunito">donation</p>
					<p class="font-nunito">request</p>
              		<p class="font-nunito">UserInfo</p>
					<p class="font-nunito">seeing</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 outerfooter">
				<div class="innerfooter">
					<h4 class="font-mont">USEFUL LINKS</h4>
					<p class="font-nunito">Your Account</p>
                    <p class="font-nunito">Become an Affiliate</p>
					<p class="font-nunito">Shipping Rates</p>
					<p class="font-nunito">Help</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 outerfooter">
				<div class="innerfooter">
					<div class="innerfooter">
					<h4 class="font-mont">CONTACT</h4>
					<p class="font-nunito"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Baroda-express,CTM,Ahmedabad</p>
					<p class="font-nunito"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;ritikamakk@gmail.com</p>
					<p class="font-nunito"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+123456789</p>
					<p class="font-nunito"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;+123456789</p>
				</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript">
	function submitd(){
		var form=document.forms[0];
	    var data={
				fname:form.fname.value,
				lname:form.lname.value,
				date:form.bdate.value,
				gender:form.gender.value,
				country:form.country.value,
				state:form.state.value,
				city:form.city.value,
				bloodgroup:form.bloodgroup.value,
				address:form.address.value,
				email:form.email.value,
				phone:form.phonenum.value,
				hospital:form.hospital.value,
				timestarts:form.timestarts.value,
				timeends:form.timeends.value,
                message:form.message.value,
			}
			console.log(data);
			$.ajax({
				url:jsroot+'/user/authentication/index.php',
				method:'post',
				data:data,
				success:function(a,b){
					console.log('1-->'+a);
					if(a[0]!='E'){	
					data['user_id'] = a;					
						$.ajax({
							url:jsroot+'/user/requestBlood/request.php',
							method:'post',
							data:data,
							success:function(a,b){
								console.log('2-->'+a);
							}
						});
					}	
				}
			});
		}
	
</script>
</body>

</html> 