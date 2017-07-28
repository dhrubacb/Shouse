<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
<head>
<title>Software House</title>
<link href="{{URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---- start-smoth-scrolling---->
<!-- Custom Theme files -->
<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<!----start-top-nav-script---->
		
<style type="text/css">


li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #000000 ;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #000000;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {

	background-color: #000000}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Change color of dropdown links on hover */


/* Change the background color of the dropdown button when the dropdown content is shown */

</style>

		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
</script>
</head>
<body>
      <!----start-header---->
		<div class="header">
			<div class="container">
				<div class="logo">
				  <a href="index.html"><img src="{{URL::asset('images/logo.png')}}"></img></a>
				</div>
		  		<div class="menu">
					<a class="toggleMenu" href="#"><img src="{{URL::asset('images/nav_icon.png')}}" alt="" /> </a>
					<ul class="nav" id="nav">
					  <li class="current"><a href="index">Home</a></li>
					  <li><a href="about">About</a></li>
					 
					 
					 <li class="dropdown">
 				 <a class="dropbtn" >Projects</a>
 				 <div class="dropdown-content">
          		  <a href="complete">Complete Projects</a>
  				  <a href="running">Running Projects</a>
   
 				 </div>

   		   </li>
					  
					  <li><a href="contact">Contact</a></li>								
					  <div class="clear"></div>
					</ul>
					<script type="text/javascript" src="{{URL::asset('js/responsive-nav.js')}}
"></script>
				</div>							
	  			<div class="clearfix"> </div>
			    <!----//End-top-nav---->
			 </div>
		</div>
		<!----//End-header---->
	
	<!--Start Middle-->

		<br><br><br>
		<div class="m_3"><h1 style="text-align: center; "><b>Title : {{ $request->title }} </b></h3></div>

	<br>

       <div class="m_3" style="height: 120px;"><h3 style="text-align: center; "><b>Type : {{ $request->type }}</b></h3></div>
        <div class="container" style="height: 500px;">
			<div class="row">
				<div class="col-md-2">
			<!--	<a href="#"><img src="images/a1.jpg"></a> -->
				</div>
				<div class="col-md-8">
				<ul style="color: #1d1d16">
				<li><h4 style="display: inline;">Project Manager: </h4><p style="display: inline;">{{$request->manager}}</p></li>

				<li><h4 style="display: inline;">Project Superviser: </h4><p style="display: inline;">{{$request->supervisor}}</p></li>


<li><h4 style="display: inline;">Project Type: {{$request->type}}</h4><p style="display: inline;"></p></li>

<li><h4 style="display: inline;">Start Date: {{$request->start_date}}</h4><p style="display: inline;"></p></li>

<li><h4 style="display: inline;">Front Language: {{$request->front_language}}</h4><p style="display: inline;"></p></li>

<li><h4 style="display: inline;">Back Language: {{$request->back_language}}</h4><p style="display: inline;"></p></li>



				<li><h4 style="display: inline;">Description: {{$request->description}}</h4><p style="display: inline;"></p></li>
				
				</ul>
				</div>
				</div>


  
  <a role= "button" class="btn btn-success" href = "{{ route('project.Admin panel.admin_index') }} "  >Accept</a>
  <a role= "button" type="button" class="btn btn-danger"  href = "project_request" >Ignore </a>

</div>


		<!----//start-banner---->
		
		   <!--
		   <div class="content_white">
			<h2>hendrerit in vulputate velit</h2>
			<p>iusto odio dignissim qui blandit praesent luptatum zzril delenit</p>
		  </div>
		  <div class="m_3"><span class="left_line"> </span> <span class="right_line"> </span></div>
		  <div class="container">
			  <ul id="flexiselDemo3">
				<li><img src="images/p1.jpg" class="img-responsive" alt=""/></li>
				<li><img src="images/p2.jpg" class="img-responsive" alt=""/></li>
				<li><img src="images/p3.jpg" class="img-responsive" alt=""/></li>
				<li><img src="images/p4.jpg" class="img-responsive" alt=""/></li>
			 </ul>
			 <script type="text/javascript">
				$(window).load(function() {
					
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			<div class="portfolio-btn">
			  <a href="#" class="portfolio_btn">View Portfolio</a>
		    </div>
		   <div class="testmonial"> 
		    <div class="row testmonial_top">
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="images/pic1.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">diam nonummy nibh</a></h4>
							<p>hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit luptatum. <a href="#" class="test_btn"> + more</a></p>
					    </li>	
					    <div class="clearfix">	</div>    				
		    		</ul>
		    	</div>
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="images/pic2.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">consuetudium lector</a></h4>
							<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. <a href="#" class="test_btn"> + more</a></p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    </div>	
		    <div class="row testmonial_bottom">
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="images/pic3.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">Nam liber tempor</a></h4>
							<p>augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer pos. <a href="#" class="test_btn"> + more</a></p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="images/pic4.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="#">formas humanitatis</a></h4>
							<p>claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.. <a href="#" class="test_btn"> + more</a></p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    </div>	
		  </div>    
		</div>

-->

		<div class="footer">
			<div class="footer_top">
				<div class="container">
					<div class="footer_head">
						<h2>Contact Us</h2>
						<p>Feel free to contact and share your project ideas</p>
		   			</div>
					<div class="row footer_grid">
					   <div class="col-md-6">
							<ul class="message">
								<li class="msg-icon"><i class="msg_icon"> </i></li>
								<li class="msg-desc">
									<h4><a href="#">Subscribe Us</a></h4>
									<p></p>
								</li>
								<div class="clearfix"> </div>
							</ul>
							<div class="subscribe">
								<form>
							      <input type="text" value="">
							      <input type="submit" value="Sign up">
						        </form>
						    </div>
						</div>
						<div class="col-md-6">
							<ul class="twitter">
								<li class="twt_icon"><i class="twt"> </i></li>
								<li class="twt_desc"><p>Contact to get involve.....</p></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
				    </div>
			   </div>
		     </div>
		     <div class="footer_midle">
			   	<div class='container'>
			   	 <div class="row">
			   		<div class="col-md-4">
			   		    <ul class="social_left">
			   			  <li class="facebook"><a href="#"><i class="fb"> </i></a></li>
			   			  <li class="fb_text"><h4><a href="#">Follow us on Facebook</a></h4>
			   			  	
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   		<div class="col-md-4">
			   		    <ul class="social_left">
			   			  <li class="facebook"><a href="#"><i class="google"> </i></a></li>
			   			  <li class="fb_text"><h4><a href="#">Follow us on Google +</a></h4>
			   			  	
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   		<div class="col-md-4">
			   		    <ul class="social_left">
			   			  <li class="facebook"><a href="#"><i class="linked"> </i></a></li>
			   			  <li class="fb_text"><h4><a href="#">Follow us on LinkedIn</a></h4>
			   			  	
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   	 </div>
		       </div>
		    </div>
		    <div class="footer_bottom">
		    	<div class="copy">
		          <p>&copy; Software House 2016 <a href="http://w3layouts.com" target="_blank">  </a></p>
		       </div>
		    </div>
		</div>
</body>
</html>		