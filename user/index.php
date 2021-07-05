<?php 
	session_start();
	if(!isset($_SESSION['id'])){
		header('Location:authentication/login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="userindex.css">
	<title>Admin</title>
</head>

<body>
<header class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-lg-2">
				<h3 class="headerh3">BloodBank</h3>
			</div>
			<div class="col-md-2 col-lg-2">
				<div class="Menuicon">
					<div class="menuicon"></div>
					<div class="menuicon"></div>
					<div class="menuicon"></div>
			    </div>
			</div>
			<div class="col-md-8 col-lg-8 d-flex justify-content-end">
				<div class="icons d-flex justify-content-center">
					<div class="innericon"><i class="fa fa-search" aria-hidden="true"></i></div>
					<div class="innericon"><i class="fa fa-bell" aria-hidden="true"></i></div>
					<div class="innericon logout" ><i class="fa fa-power-off" aria-hidden="true"></i></div>
				</div>
			</div>
		</div>
	</div>
</header>
<style type="text/css">
	.Menulist{
		transition: .2s ease;
	}
	.smallWidth{
		width: 55px !important;
	}
	.text-none{
		display: none;
	}
</style>
<section class="greatpage d-flex">
<section class="Menulist">
	<div class="Mainpage">
		<center>
		<div class="image">
		</div></center>
		<!-- <div class="VerticalMenu"> -->
			<ul class="ulclass">
				<li><span class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></span ><span class="text">Dashboard</span></li>
				<li><span class="icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span><span class="text"><a href="usersettings/usersettings.php" target="iframe_a" style="text-decoration: none;color:white;">User</a></span></li>
				<li><span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="text"><a href="RequestBlood/RequestBlood.html" target="iframe_a" style="text-decoration: none;color:white;">Add Request</a></span></li>
				<li><span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span><span class="text">Settings</span></li>
				<li><span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span><span class="text">help</span></li>
            </ul>
		<!-- </div> -->
	</div>
</section>
<style>
	.iframepart
	{
		width:100%;
		height:auto;
	}
</style>
<section class="iframepart">
	<iframe src="RequestBlood/RequestBlood.html" name="iframe_a" height="100%" width="100%" title="Iframe Example"></iframe>

</section>
</section>
</body>
<script type="text/javascript">
$('.Menuicon').click(function(){
	$('.Menulist').toggleClass('smallWidth');
	$('.text').toggleClass('text-none');
	$('.image').toggleClass('text-none');
});
$(document).ready(function(){
	$(".hide").hide();
  $("#points").click(function(){
    $(".hide").toggle(500);
  });
});
  $(".logout").click(function(){
  		if(confirm('Are you sure ? want to logout ?')){
  			location.replace('authentication/login.php');
  		}
  });
</script>
</html>