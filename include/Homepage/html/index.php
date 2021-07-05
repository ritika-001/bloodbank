<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/basic.css">
	<title>BloodBank</title>
</head>
<body>
<?php
require 'header.php';
?>
<!-- <style type="text/css">
	.kissme{
		position: fixed;
		left: 98%;
		top: 50%;
		font-size: 23px;
		transform: translate(-100%,-50%);
		width: 15px;
	}
	.kissme > .text-muted{
		width: 12px;
		height: 12px;
		display:inline-block;
		border-radius: 50%;
		background-color: grey; 
	}
	.kissme-active{
		box-shadow: 0 .33rem 1.3rem rgba(0,0,0,0.5);
	}
</style>
<div class="kissme">
	<span class="text-muted kissme-active"></span>
	<span class="text-muted"></span>
	<span class="text-muted"></span>
	<span class="text-muted"></span>
	<span class="text-muted"></span>
</div> -->
<section class="FirstPage" style="margin-top: 10px;">
	<div class="container-fluid Mainpage">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-8 d-flex justify-content-center pl-0 pr-0 ">
				<img src="../images/first1.png" width="100%">
			</div>
			<div class="col-lg-4 d-flex pl-0 align-items-center">
				<div class="card" style="background-color:#f6f5f5;border:0px">	
					<div class="text">
						<p class="font-nunito" style="font-size: 2.5rem;font-weight: 600;">Blood Donation</p>
						<div class="d-flex flex-column">
						<p class="font-nunito" style="font-size:17px;padding-right:40px;color:#333;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et</p>
	                  </div><br/>
					 <button class="button">Contact Us</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="stepspage">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4 steps">
				<div class="circle">
          			<i class="fa fa-registered icons1" aria-hidden="true"></i>
          			<div class="minisquare"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
			    </div>
			    <h4 class="font-mont">Registeration</h4>
			    <p class="text-muted font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet est et congue aliquet.</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 steps">
				<div class="circle">
          			<i class="fa fa-desktop icons1" aria-hidden="true"></i>
          			<div class="minisquare"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                </div>
			    <h4 class="font-mont">screening</h4>
			    <p class="text-muted font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet est et congue aliquet.</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 steps">
				<div class="circle">
          			<i class="fa fa-user-circle-o icons1" aria-hidden="true"></i>
          			<div class="minisquare"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>

			    </div>
			    <h4 class="font-mont">Login</h4>
			    <p class="text-muted font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet est et congue aliquet.</p>
			</div>
		</div>
	</div>
</section>
<section class="Secondpage">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 noneshow socialt">
				<h3 class="font-mont">About Us</h3>
				<span class="line"></span><br/>
	            <p class="font-nunito" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
				<ul class="aboutusul font-nunito">
					<li><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</li>
					<li><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</li>
					<li><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</li>
					<li><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</li>
				</ul>
				</p>
			</div>
			<div class="col-lg-6">
				<div class="aboutimage">
					<img src="../svg/svg.svg">
				</div>
			</div>
	    </div>
	</div>
</section>
<section class="ServicesPage">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6 card-outer">
						<div class="card-makk shadow first-card">
							<i class="fa fa-cog"></i>
							<p class="font-nunito">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>
					<div class="col-lg-6 card-outer">
						<div class="card-makk1 shadow">
							<i class="fa fa-user"></i>

							<p class="font-nunito">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>


					<div class="col-lg-6 card-outer">
						<div class="card-makk shadow">
							<i class="fa fa-twitter"></i>
                            <p class="font-nunito">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>

					<div class="col-lg-6 card-outer">
						<div class="card-makk1 shadow">
							<i class="fa fa-youtube-play"></i>
							<p class="font-nunito">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 contentpage noneshow serviceeffect">
				<!-- <h6>LORME HERE</h6> -->
				<h2 class="bold-title font-mont">
					<span>We Provide Awesome</span> <br/><span>Services to our</span><span> Users</span>
				</h2>
				<span class="line"></span><br/>

				<div pc="15" tb="15" mb="15" style="height:15px;"></div>

				<p class="text-under font-nunito">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmods
					tempor incididunt ut labore et.tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<div pc="15" tb="15" mb="15" style="height:15px;"></div>
				<div class="buttons">
					<button class="button font-mont">Contact us</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="whyuspagepart">
<div class="container  whyuspagepart1">
	 <div class="row">
		<div class="col-lg-12 context">
			<h3 class="font-mont">WHY US??</h3>
			  <span class="line2"></span><br/>

			<p class="font-nunito text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br/>
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
		</div>
	</div>
   </div>
</section>
<br/>
<section class="whyuspage">
	<div class="container  whyuspage">
	<div class="card">
		<div class="imgBx">
			<img src="../images/image31.jpg">
		</div>
		<div class="content">
			<h2 class="font-mont">Card One</h2>
			<p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod
		    </p>
	   </div>
    </div>
    <div class="card">
		<div class="imgBx">
			<img src="../images/image32.jpg">
		</div>
		<div class="content">
			<h2 class="font-mont">Card One</h2>
			<p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod
		    </p>
	   </div>
    </div>
    <div class="card">
		<div class="imgBx">
			<img src="../images/image33.jpg">
		</div>
		<div class="content">
			<h2 class="font-mont">Card One</h2>
			<p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod
		    </p>
	   </div>
    </div>
</div>
</section>
<section class="testimonial">
	<section class="pg page6">
		<div class="container  testimonial">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3 class="bold-title font-mont">
						<span>What people think about us</span>
			            <center><div class="line3"></div></center><br/>

					</h3>
				</div>		
				<div class="col-md-12">
					<div pc="60" tb="50" mb="50"></div>
					<center>
						<div class="rotating-cards">
							<div class="card-testi">
								<img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" width="120px">
								<h4 class="testi-name">Jeet Makwana</h4>
								<p class="net-text">
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									Ut enim ad minim veniam,Ut enim ad minim veniam,
								</p>
								<p class="net-text test-star">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</p>
							</div>
							<div class="card-testi">
								<img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" width="120px">
								<h4 class="testi-name">raj Makwana</h4>
								<p class="net-text">
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									Ut enim ad minim veniam,Ut enim ad minim veniam,
								</p>
								<p class="net-text test-star">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</p>
							</div>

							<div class="card-testi">
							<img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" width="120px">
								<h4 class="testi-name">Jeet2 Makwana</h4>
								<p class="net-text">
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									Ut enim ad minim veniam,Ut enim ad minim veniam,
								</p>
								<p class="net-text test-star">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</p>
							</div>
							<div class="card-testi">
								<img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" width="120px">
								<h4 class="testi-name">Jeet3 Makwana</h4>
								<p class="net-text">
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									Ut enim ad minim veniam,Ut enim ad minim veniam,
								</p>
								<p class="net-text test-star">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</p>
							</div>
							<div class="card-testi">
								<img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" width="120px">
								<h4 class="testi-name">Jeet1 Makwana</h4>
								<p class="net-text">
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									Ut enim ad minim veniam,Ut enim ad minim veniam,
								</p>
								<p class="net-text test-star">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</p>
							</div>
						</div>
					</center>
				</div>	
				<div class="col-md-12 text-center testi-button">
					<div pc="70" tb="50" mb="50"></div>
					<button onclick="rotateCardsRight()">&nbsp;&nbsp;<i class="fa fa-caret-left"></i>&nbsp;&nbsp;Prev</button>
					<button onclick="rotateCardsLeft()">&nbsp;&nbsp;<i class="fa fa-caret-right"></i>&nbsp;&nbsp;Next</button>
				</div>	
				<div class="col-md-12">
					<div pc="100" tb="80" mb="80"></div>
				</div>		
			</div>
		</div>
	</section>
</section>
<section class="faq">
	<div class="container faq">
 
  <h2 class="font-mont">Frequently Asked Questions</h2>
 
  <div class="accordion">
    <div class="accordion-item">
      <a class="font-mont">What can JavaScript Do?</a>
      <div class="content">
        <p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="font-mont">How JavaScript Can Modify HTML and CSS Values?</a>
      <div class="content">
        <p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="font-mont">What Is SVG?</a>
      <div class="content">
        <p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="font-mont">Is FAQ Section Matters In Website?</a>
      <div class="content">
        <p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a class="font-mont">How To Create a Light FAQ Element?</a>
      <div class="content">
        <p class="font-nunito">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
  </div>
  
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
</body>
<script type="text/javascript">
	$('.menu').click(function(){
		$(this).toggleClass('is-active');
		$('.head-nav').toggleClass('head-nav-open');
		$('.header_overlay').toggleClass('header_overlay-opa');
	});
	$(window).scroll(function(){
	    if($(this).scrollTop()==0){
	        $('header').removeClass('active');
	    }else{
	        $('header').addClass('active');
	    }
	});
	function myWaypoint(cname,aniname,per=100){
    $('.'+cname).waypoint(function(direction){
        $('.'+cname).addClass('animate__animated '+aniname);
    }, {
        offset: per+'%'
    });    
}

myWaypoint('socialt','animate__zoomIn slomo-1x',60);
myWaypoint('serviceeffect','animate__backInRight slomo-1x',50);
myWaypoint('blogeffect','animate__slideInUp slomo-1x',60);
// myWaypoint('whyuspagepart1','animate__slideInUp slomo-1x',50);
// myWaypoint('whyuspage','animate__slideInUp slomo-1x',60);
// myWaypoint('testimonial','animate__slideInUp slomo-1x',80);
// myWaypoint('faq','animate__slideInUp slomo-1x',80);



const items = document.querySelectorAll(".accordion a");
 
function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
 
items.forEach(item => item.addEventListener('click', toggleAccordion));
//testtimonil code
var m=0;
	var cardCount=$('.rotating-cards div').length;
	var currentCard=0;
    for(var i=0;i<cardCount;i++){
	    if($('.rotating-cards div')[i].offsetHeight>m)
	        m=$('.rotating-cards div')[i].offsetHeight;
    }
	$('.rotating-cards').css('height',m+'px');
	function setCards(){
        for(var i=0;i<cardCount;i++){
            $('.rotating-cards div')[i].classList.remove("current");
            $('.rotating-cards div')[i].classList.remove("next");
            $('.rotating-cards div')[i].classList.remove("prev");
            $('.rotating-cards div')[i].classList.remove("back");
            if(i==currentCard)
                $('.rotating-cards div')[i].classList.add("current");
            else if(i==(currentCard+1)%cardCount)
                $('.rotating-cards div')[i].classList.add("next");
            else if(i==(currentCard-1+cardCount)%cardCount)
                $('.rotating-cards div')[i].classList.add("prev");
            else $('.rotating-cards div')[i].classList.add("back");
        }
	}
	setCards();
	function rotateCardsLeft(){
	    currentCard=(currentCard+1)%cardCount;
    	setCards();
	}
	function rotateCardsRight(){
        currentCard=(currentCard-1+cardCount)%cardCount;
    	setCards();
	}
</script>
</html>