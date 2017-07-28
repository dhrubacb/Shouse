<!DOCTYPE HTML>
<html>
<head>
<title>Software House</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
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
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<!----start-top-nav-script---->
		
 

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
				  <a href="index.html"><h2 class="sw" style="display: inline-block;">Software</h2><h2 class="house" style="display: inline-block;"> House</h2></a>
				</div>
				
		  		<div class="menu">
					<a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
					<ul class="nav" id="nav" style="display: inline-block;">
					  <li class="current"><a href="index">Home</a></li>
					  <li><a href="about">About</a></li>
					 
					 <li class="dropdown">
 				 <a class="dropbtn" >Projects</a>
 				 <div class="dropdown-content">
          		  <a href="complete">Complete Projects</a>
  				  <a href="running">Running<br>Projects</a>
   
 				 </div>

   		   </li>
					  
					  <li><a href="contact">Contact</a></li>								
					  <div class="clear"></div>
					</ul>
					<script type="text/javascript" src="js/responsive-nav.js"></script>
				</div>							
	  			<div class="clearfix"> </div>
			    <!----//End-top-nav---->
			 </div>
		</div>
		<!----//End-header---->
		<!----//start-banner---->
		<div class="banner text-center">
				<div class="container">
					<div class="banner-info">
						<h1>Software House is a Showcase of<br> Mobile ,  Web and Desktop Application</h1>
						<p>Want To Add Your Project??</p>
						<br>
						 <button onclick="location.href='request_form';" type="button" class="btn btn-lg" style="background-color:#ea7648; color:white;">Click to send request</button>
				    </div>
				</div>
		</div>
		<!----//end-banner---->
		<!----//start-content---->
		<div class="main">
		   <div class="content_white">
			<h2>Who we are</h2>
			<p>We are a small team of web developers and designers based in XYZ.</p>
		   </div>
		   <div class="featured_content" id="feature">
		   	 <div class="container">
			   	<div class="row text-center">
			   		<div class="col-md-3 feature_grid1">
			   			<i class="icon1"> </i>
			   			<h3 class="m_1"><a href="#">Skilled team</a></h3>
			   			<p class="m_2">Tell your potential client why they should choose your service and how you are different from your competitors.</p>
			   			<a href="#" class="feature_btn">More</a>
			   		</div>
			   		<div class="col-md-3 feature_grid1">
			   			<i class="icon2"> </i>
			   			<h3 class="m_1"><a href="#">Agile approach</a></h3>
			   			<p class="m_2">Tell your potential client why they should choose your service and how you are different from your competitors.</p>
			   			<a href="#" class="feature_btn">More</a>
			   		</div>
			   		<div class="col-md-3 feature_grid1">
			   			<i class="icon3"> </i>
			   			<h3 class="m_1"><a href="#">High quality code</a></h3>
			   			<p class="m_2">Tell your potential client why they should choose your service and how you are different from your competitors.</p>
			   			<a href="#" class="feature_btn">More</a>
			   		</div>
			   		<div class="col-md-3 feature_grid2">
			   			<i class="icon4"> </i>
			   			<h3 class="m_1"><a href="#">No overheads</a></h3>
			   			<p class="m_2">Tell your potential client why they should choose your service and how you are different from your competitors.</p>
			   			<a href="#" class="feature_btn">More</a>
			   		</div>
			   	</div>
		    </div>
		   </div>
		  <div class="banner-achi">
				<div class="container">
				<h2 style="font-weight:bold; text-align:center;">Our Objectives</h2><br>
				<div class="row">
					<div class="col-md-5">
								 <ul class="about_grid1 about_box">
		  			 
		  			  <li class="about_desc">
		  			  	<h5><a href="#">Serve for a Better World</a></h5>
		  			  	<p style="color:white"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		  			  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		  			  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  			    <a href="https://www.facebook.com/sknabil" class="about_btn" title="Image Format">More</a>
		  			  </li>
		  			  <div class="clearfix"></div>
		  			</ul>
					</div>
					<div class="col-md-4">
								 <ul class="about_grid1 about_box">
		  			 
		  			  <li class="about_desc">
		  			  	<h5><a href="#">Serve for a Better World</a></h5>
		  			  	<p style="color:white"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		  			  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		  			  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  			    <a href="https://www.facebook.com/sknabil" class="about_btn" title="Image Format">More</a>
		  			  </li>
		  			  <div class="clearfix"></div>
		  			</ul>
					</div>
					<div class="col-md-3">
								 <ul class="about_grid1 about_box">
		  			 
		  			  <li class="about_desc">
		  			  	<h5><a href="#">Serve for a Better World</a></h5>
		  			  	<p style="color:white"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			  	consequat. </p>
		  			    <a href="https://www.facebook.com/sknabil" class="about_btn" title="Image Format">More</a>
		  			  </li>
		  			  <div class="clearfix"></div>
		  			</ul>
					</div>
						<br>
						 
				    </div>
				</div>
		

		<div class="footer">
			<div class="footer_top" >
				<div class="container">
					<div class="footer_head">
						<h2>Contact Us</h2>
						<p>Feel free to contact and share your project ideas</p>
		   			</div>
					<div class="row ">
					   <div class="col-md-12">
							<ul class="message">
								<li class="msg-icon"><i class="msg_icon"> </i></li>
								<li class="msg-desc">
									<h4 style="color: white; margin-top:9px; ">Subscribe our Newsletter</h4>
									
								</li>
								<div class="clearfix"> </div>
							</ul>
							<div class="subscribe">
								<form>
							      <input type="text" value="" placeholder="Your email here..." style="background-color:white;">
							      <input type="submit" value="Subscribe">
						        </form>
						    </div>
						</div>
						
				    </div>
			   </div>
		     </div>
		     </div>
		     </div>
		   
		 
		     <div class="footer_midle">
			   	<div class='container'>
			   	 <div class="row">
			   	 <div class="col-md-5">
			   	 <div class="uselinks">
			   	 <h3>Useful Links</h3>
			   	 <br><br>
			   	 <ul>
			   	 <li><a href="http://www.sust.edu/"><h5>SHAHJALAL UNIVERSITY OF SCIENCE AND <br>TECHNOLOGY, SYLHET</h5> </a></li>
			   	  <li><a href="http://www.sust.edu/departments/cse"><h5>COMPUTER SCIENCE AND ENGINEERING<br> DEPT, SUST</h5> </a></li>
			   	 </div>
			   	 </div>
			   	 <div class="col-md-4">
			   	 	<div class="cntct">
			   	 	   <h3>Contact</h3>
			   	 	   </div>
			   	 	   <br><br>
			   	 	   <div class="cntct-detail">
			   	 	   <h2>Software House</h2>
			   	 	   <h4> IICT Building</h4>
<h4>3114,Akhalia,</h4>>
<h4>Sylhet Bangladesh</h4>
			   	 	</div>
			   	 	</div>
			   	 	
			   		<div class="col-md-3">
			   		<h3 style="padding-left:11px;">Follow us on</h3>
			   		 <div class="row">
			   		 <div class="col-md-4">
			   		 <ul class="social_left">
			   			  <li class="facebook"><a href="#"><i class="fb"> </i></a></li>
			   			  <li class="fb_text">
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   		 <div class="col-md-4">
			   		 <ul class="social_left">
			   			 <li class="facebook"><a href="#"><i class="google"> </i></a></li>
			   			 
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
 <div class="col-md-4">
			   		 <ul class="social_left">
			   			   <li class="facebook"><a href="#"><i class="linked"> </i></a></li>
			   			  <li class="fb_text">
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>


			   		</div>
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