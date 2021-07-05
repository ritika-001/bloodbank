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