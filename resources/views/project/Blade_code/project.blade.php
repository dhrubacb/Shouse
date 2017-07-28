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
        var pull    = $('#pull');
          menu    = $('nav ul');
          menuHeight  = menu.height();
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
     
     @yield('main_content')

 <div class="footer_bottom">
          <div class="copy">
              <p>&copy; Software House 2016 <a href="http://w3layouts.com" target="_blank">  </a></p>
           </div>
        </div>
      @yield('main_content_')


 </div>
    </div>

</body>
</html>   

