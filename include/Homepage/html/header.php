<style type="text/css">
/* header start */
header{
	position:sticky;
	top: 0;
	width: 100vw;
	/*height: 80px;*/
	background:#fff;
	transition: .5s;
	z-index: 999;
	margin:0;
}
header.active{
	background-color:#fff;
	box-shadow:0 .5rem 1rem rgba(0,0,0,.15);
}
header .container{
	display: flex;
	padding: 10px 10px;
	padding-right: 25px;
	align-items: center;
	justify-content: space-between;
}
header .logo p{
	font-size:  30px;
	margin-bottom: 0;
	font-weight: 500;
}
header .head-nav ul{
	padding: 0;
	margin: 0;
	display: flex;
	align-items: center;
}
header .head-nav ul li{
	list-style-type: none;
	margin-right: 30px;
	font-weight: 600;
	font-size: 16px;
}
.header_overlay{
	position: fixed;
	top:0%;
	right: 0%;
	bottom: 0%;
	min-height:100vh;
	pointer-events: none;
	width: 100vw;
	opacity: 0;
	transition: .2s ease;
	z-index: 9;
	background-color: rgba(0,0,0,.3);
}
.menuList{
	z-index: 100;
	display: none;
}
@media (max-width: 1070px) {
	.menuList{
		margin-left: auto;
		display: block;
	}		
	.head-nav{
		transform: translateX(200%);
		position: fixed;
		top:0%;
		right: 0%;
		bottom: 0%;
		height: auto;
		overflow-y: scroll;
		min-height:100vh;
		background-color: #fff;
		width: 100vw;
		z-index: 10;
		transition: .5s ease;
	}
	.head-nav-open{
		transform: translateX(30%);
	}
	.header_overlay-opa{
		opacity: 1;
	}
	header .head-nav ul{
		width:100%;
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		justify-content: center;
		margin-top: 60px;
	}
	body{
	}
	.head-nav>ul>li{
		width: -webkit-fit-content;
		width: -moz-fit-content;
		width: fit-content;
		margin-top: 40px;
		margin-left: 50px;
		color: #4d4e50 !important;
	}
}
.head-nav>ul>li.active-nav{
	color: #333 !important;
	position: relative;
}
.active-nav:after{
	content: '';
	position: absolute;
	width: 6px;
	height: 6px;
	left: 50%;
	top: 100%;
	transform: translate(-50%,0%);
	border-radius: 50%;
	background-color:#333;
}

.menu-inner, .menu-inner:after, .menu-inner:before{
	background-color:#333;
	width: 30px;
	height:3px;
	display:block;
	border-radius:2px;
	transition: .3s;
}

.menu-inner:after{
    content:' ';
    transform:translateY(6px);
}
.menu-inner:before{
    content:' ';
    transform:translateY(-10px);
}
.menu.is-active > .menu-inner{
    transform:rotate(45deg);
    background-color: #4d4e50;
}
.menu.is-active > .menu-inner:after{
    background-color: #4d4e50;
    transform:translateY(-4px) rotate(90deg);
}
.menu.is-active > .menu-inner:before{
    background-color: #4d4e50;

    transform:translateY(0px) rotate(-90deg);
}
/* header end */
	
</style>
<header style="background-color: #f6f5f5;">
		<div class="container">
			<div class="logo">
				<p class="font-mont">Donation</p>
			</div>
		    <div class="menuList">
    			<div class="menu">
    				<span class="menu-inner"></span>
    			</div>
	        </div>
	        <div class="header_overlay"></div>
			<nav class="ml-auto head-nav">
				<ul class="font-mont header-ul">
					<li><a href="index.php" style="color:black;text-decoration: none;">Home</a></li>
					<li><a href="donate.php" style="color:black;text-decoration: none;">Donate</a></li>
					<li><a href="blog.php" style="color:black;text-decoration: none;">Blog</a></li>
					<li><a href="contactus.php" style="color:black;text-decoration: none;">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
	</script>