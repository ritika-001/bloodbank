<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/basic.css">
	<link rel="stylesheet" type="text/css" href="../css/contactus.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Contact Us</title>
</head>

<body>
<section class="ContactPage">
<?php 
 require 'header.php';
?>
<style type="text/css">
	header{
		background: transparent !important;
	}
	header.active{
		background: #f6f5f5 !important;
	}
	.head-nav a,.logo p{
		color:#fff !important;
	}
	.menu-inner, .menu-inner:after, .menu-inner:before{
		background-color:#fff !important;
	}
	header.active .menu-inner,header.active .menu-inner:after,header.active .menu-inner:before{
		background-color:#000 !important;
	}
	header.active a,header.active p{
		color:#000 !important;
	} 
	.head-nav-open a{
		color:#000 !important;
	}
</style>
<!-- <div class="ContactFirstpage">
	<div class="logo1">
		<h2 class="font-mont">Donation</h2>
	</div>
	<div class="contactmenu">
		<ul class="ulclass">
			<li><a href="index.html" style="color:black;text-decoration: none;">Home</a></li>
			<li><a href="donate.html" style="color:black;text-decoration: none;">Donate</a></li>
			<li><a href="blog.html" style="color:black;text-decoration: none;">Blog</a></li>
			<li><a href="contactus.html" style="color:black;text-decoration: none;">Contact Us</a></li>
		</ul>
	</div>
</div> -->
	<div class="contactcontent">
		<p class="font-nunito">Contact</p>
		<h2 class="font-mont">Are Easy to find</h2>
		<p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <br/>aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
	</div>
</section>
<seciton class="contactsecondpage">
	<center><h2 class="font-mont">Contact Us</h2></center><br/>
	<div class="contactform">
		<div class="svglogo">
			<img src="../svg/contactsvg.svg" class="contactsvg">
		</div>
		<div class="inputform">
			<form>
				<input type="text" placeholder="Full Name" class="input" name="fullname"><br/>
				<input type="email" placeholder="Email" class="input" name="email"><br/>
                <input type="text" placeholder="Phone number" class="input" name="phone"><br/>
                <select id="city" placeholder="City" class="input" name="city"><br/>
				  <option value="surat">Surat</option>
				  <option value="Ahmedabad">Ahmedabad</option>
				  <option value="Baroda">Baroda</option>
				  <option value="Jamnagar">Jamnagar</option>
				</select><br/>
				<textarea placeholder="Write a message for any query....." class="input" name="message"></textarea>
				<button class="button" onclick="submitans()">Start</button>
			</form>
		</div>
	</div>
</seciton>
<section class="contactthirdpage">
	<footer class="footer" style="border-top-left-radius: 110px;">	
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
</section>
</body>
<script type="text/javascript">
function submitans()
{
	var form=document.forms[0];
	  var data={
				fullname:form.fullname.value,
				email:form.email.value,
				phone:form.phone.value,
				city:form.city.value,
				message:form.message.value,
             }
			$.ajax({
				url:'contactus.php',
				method:'post',
				data:data,
				success:function(a,b){
					alert(a);
					if(a=='done')
						form.reset();
				}
			});
  }
</script>
</html>