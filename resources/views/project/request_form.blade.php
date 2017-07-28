
<!DOCTYPE HTML>
<html>
<head>
<title>Software House</title>
<link href="{{URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('js/jquery.min.js')}} "></script>
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
<link href="{{URL::asset('css/style.css')}}
" rel='stylesheet' type='text/css' />
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
					<script type="text/javascript" src="{{URL::asset('js/responsive-nav.js')}}"></script>
				</div>							
	  			<div class="clearfix"> </div>
			    <!----//End-top-nav---->
			 </div>
		</div>
		<!----//End-header---->
		<!----//start-banner---->
	<div class="container">
		<h2 style="margin-top: 20px; margin-bottom: 50px; text-align: center;text-shadow: 2px 2px 4px grey"><b>Describe your Project</b> <h2>


		 <form role="form" action="store" method="post">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">

		<p class="inp" style="display: inline-block;">Project Title:</p> <input type="text" class="g" name = "title" ><br>

		<p class="inp" style="display: inline-block;">Project Manager:</p>  <input type="text" name = "manager" class="g"><br>
     	<p class="inp" style="display: inline-block;">Project Type:</p> 
     <select name="type" style="margin-left:19px;">
    
    <option class="inp" value="web">Web Application</option>
    <option value="mob" class="inp">Mobile Application</option>
    <option value="desktop" class="inp">Desktop Application</option>
    <option value="Others" class="inp">Others</option>
  
  </select><br>



<p class="inp" style="display: inline-block;">Status:</p> 
     <select name="status" style="margin-left:19px;">
    
    <option class="inp" value="running">Running</option>
    <option value="complete" class="inp">Complete</option>
  
  </select><br>




       <p class="inp"  style="display: inline-block;"> Start Date: </p> <input type="text"  name = "start_date" class="g"><br>

           <p class="inp"  style="display: inline-block;">Front Language:</p>  <input type="text" name = "front_language" class="g"><br>

            <p class="inp"  style="display: inline-block;">Back Language:</p>  <input type="text" name = "back_language" class="g" ><br>

             <p class="inp"  style="display: inline-block;">Description:</p> <textarea name = "description" rows="6" cols="22" style="margin-left:19px;">
		</textarea><br><br>
   <button type="submit" class="btn btn-success" style="margin-left:220px;margin-bottom:25px;">Submit</button><br>
  </form>
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