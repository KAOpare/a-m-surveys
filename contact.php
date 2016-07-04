<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>am surveys - Welcome Page</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript">
// Dropdown Menu Fade    
jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
});
</script>

<style>
.navbar-default{
color: #fff;
background-color: #ccc6c6;
border-color: #aca1a2;
-webkit-box-shadow: 0 8px 6px -6px #666;
    -moz-box-shadow: 0 8px 6px -6px #666;
    box-shadow: 0 8px 6px -6px #666;
}
.navbar-default .navbar-nav > li > a{
	color:#fff;
}
.navbar-default .navbar-nav > .dropdown > a .caret{
	border-top-color: #fff;
    border-bottom-color: #fff;
}
.navbar-default .navbar-brand{
	color:#fff;
}
.menu-large {
  position: static !important;
}
.megamenu{
  padding: 20px 0px;
  width:90%;
  margin-left:70px
}
.megamenu> li > ul {
  padding: 0;
  margin: 0;
}
.megamenu> li > ul > li {
  list-style: none;
}
.megamenu> li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.megamenu> li ul > li > a:hover,
.megamenu> li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.megamenu.disabled > a,
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
  color: #999999;
}
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.megamenu.dropdown-header {
  color: #428bca;
  font-size: 18px;
}


@media (max-width: 768px) {
  .megamenu{
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .megamenu> li {
    margin-bottom: 30px;
  }
  .megamenu> li:last-child {
    margin-bottom: 0;
  }
  .megamenu.dropdown-header {
    padding: 3px 15px !important;

  }
  .navbar-nav .open .dropdown-menu .dropdown-header{
	color:#fff;
  }
  
  
}
</style>

</head>

<body>

    <!-- Navigation -->
    <nav>
  <div class="container navbar-fixed-top navbar-collapse" style="background-color:#fff;border-bottom:1px solid #ccc;
	border-top:1px solid #ccc;
	-webkit-box-shadow: 0 8px 6px -6px #666;
    -moz-box-shadow: 0 8px 6px -6px #666;
    box-shadow: 0 8px 6px -6px #666;">
	<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="index.html">
                   <img src="images/logo.png" class="img-responsive" alt="logo" width="85" height="52" style="margin-top:-7px;padding-left:20px"/>
         </a>
	</div>
    <div class="navbar-header">
		 
        <h3 style="padding-top:0px"> </h3>
       
	</div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav pull-right" style="padding-right:30px">
       <li class="active"><a href="index.html">Home</a></li>
       <li class="active"><a href="#">About us</a></li>
        
       <li class="dropdown menu-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services <b class="caret"></b></a>				
				<ul class="dropdown-menu megamenu row" style="width:80%;margin-left:130px">
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Survey Services</li>
							<li><a href="services.php">Crop / farm compensation services</a></li>
							<li class="disabled"><a href="#">Mine development surveys</a></li>
							<li><a href="#">Topographical surveys</a></li>
                            <li><a href="#">Route line and utility location surveys</a></li>
							<li><a href="#">Deeds and land title registration</a></li>
							<li><a href="#">Subdivision surveys / setting out of lands</a></li>
							<li><a href="#">Construction layout / setting out</a></li>
                            <li><a href="#">Earthworks and volumetric analysis</a></li>
							
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">GIS Services</li>
							<li><a href="#">Geo spacial data capture and analysis</a></li>
							<li><a href="#">GIS Geodatabase Management</a></li>
							<li><a href="#">Development of GIS applications</a></li>
							<li><a href="#">GIS training</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Photogrammetric mapping</li>
							<li><a href="#">Photogrammetric mapping sservices</a></li>
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Other Services</li>
							<li><a href="#">Agricultural Improvement and land access programs</a></li>
							<li><a href="#">Bathymeric Survey</a></li>
							<li><a href="#">Training Services</a></li>
							
						</ul>
					</li>
					
				</ul>

			</li>
       <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Satellite Imagery <b class="caret"></b> </a>
                  <ul class="dropdown-menu megamenu row" style="width:80%;margin-left:130px">
                    <li class="col-sm-3">
						<ul>
                            <li class="dropdown-header">Satellite Imagery services</li>
                          
							<li><a href="#">Sale of Satellite imagery</a></li>
							<li><a href="services.php">Forestry and environmental management</a></li>
							<li class="disabled"><a href="#">Geological studies</a></li>
							<li><a href="#">Agriculture</a></li>
                            													
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">&nbsp;</li>
                            <li><a href="#">Civil Institutions</a></li>
							<li><a href="#">Vessel report services</a></li>
							<li><a href="#">Surface movement monitoring</a></li>
							<li><a href="#">Oil spillage monitoring</a></li>
							
						</ul>
					</li>
                    <li class="col-sm-3">
						<ul>
							<li class="dropdown-header">&nbsp;</li>
                            
							<li><a href="#">Defense and security</a></li>
							<li><a href="#">The geo elevation range</a></li>
							<li><a href="#">Ground controls</a></li>
							<li><a href="#">Maritime</a></li>
							
						</ul>
					</li>
                    <li class="col-sm-3">
						<ul>
							<li class="dropdown-header">&nbsp;</li>
                           
							<li><a href="#">The geo monitor</a></li>
							<li><a href="#">Pixel Factory</a></li>
							<li><a href="#">Cloud Services</a></li>
							<li><a href="#">Geo-store</a></li>
                            <li><a href="#">Mining, oil and gas</a></li>
							
						</ul>
					</li>
                  </ul>
            </li>
             <li class="active"><a href="projects.php">Projects</a></li>
       <li class="active"><a href="contact.php">Contact</a></li>
    </ul>
    
    </div>
     
  </div>

</nav>

    <!-- Full Page Image Background Carousel Header -->
   
    <!-- Page Content -->
  <div class="jumbotron" style="background-image:">
    <div class="row" style="padding-top:35px">
    	<div class="col-lg-11">
        <center>
        	<h2>Contact us now</h2>
            <h4>we would love to hear from you</h4>
            <!--ul class="breadcrumb" style="background-color:transparent">
              <li>Home</li> <span class="glyphicon glyphicon-circle-arrow-right"></span>
              <li>Services</li> <span class="glyphicon glyphicon-circle-arrow-right"></span>
              <li>Crop / farm compensation services</li>
            </ul-->
            </center>
        </div>
    </div>
</div>
	
        <div class="container">
        
        
        <section style="background-color:#Fff;color:#666">
<div class="container">
<div class="row" style="padding-bottom:80px">
<div class="col-lg-6">
	<h2 style="font-weight:lighter">Contact Info</h2><br/>	
       <p style="font-size:18px;"> <span class="fa-stack fa-lg" style="color:#2C3E50">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-map-marker fa-stack-1x"></i>
        </span> Haatso, Accra, Ghana</p>
        <p style="font-size:18px"> <span class="fa-stack fa-lg" style="color:#2C3E50">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-phone fa-stack-1x"></i>
        </span> +(233)302 541944</p> 
        <p style="font-size:18px"> <span class="fa-stack fa-lg" style="color:#2C3E50">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-envelope fa-stack-1x"></i>
        </span> info@a-msurveys.com</p><br/>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9206456763527!2d-0.23267399999999927!3d5.578749000000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf99f243fa1d67%3A0xb1b634e2e17223c8!2sAwudome+Estate!5e0!3m2!1sen!2sgh!4v1418051749410" width="100%" height="300" frameborder="0" style="border:0"></iframe>
</div>
<div class="col-lg-6">
<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div style=\"font-size:20px;color:green\" class=\"well\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div style=\"color:red;font-size:20px\" class=\"well\">".$_GET['e']."</div>";  

			?>
    <h2 style="font-weight:lighter;">Send us a message</h2>
    <p>Your concerns are our priority</p><br/>
	
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-12">
	                <label for="input1" style="font-weight:lighter;font-size:14px">Your Name *</label>
	                <input type="text" name="contact_name" class="form-control" id="input1" style="background-color:#F7F7F7">
	              </div>
	              <div class="form-group col-lg-12">
	                <label for="input2" style="font-weight:lighter;font-size:14px">Your Email *</label>
	                <input type="email" name="contact_email" class="form-control" id="input2" style="background-color:#F7F7F7">
	              </div>
	              <div class="form-group col-lg-12">
	                <label for="input3" style="font-weight:lighter;font-size:14px">Your Phone Number *</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3" style="background-color:#F7F7F7">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4" style="font-weight:lighter;font-size:14px">Your Message *</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4" style="background-color:#F7F7F7"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button name="submit" type="submit" class="btn btn-default btn-lg">Send Message</button>
	              </div>
              </div>
            </form>
</div>
</div>
</div>
</section>
		<div class="row" style="padding-top:30px">
       	   
            <div class="col-lg-3">
          	  <center>
              
          	 </center>
            </div>
            <div class="col-lg-3">
          	  <center>
                 
          	 </center>
            </div>
            <div class="col-lg-3">
          	  <center>
               
          	 </center>
            </div>
            <div class="col-lg-3">
          	  <center>
                
          	 </center>
            </div>
      
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; am survey 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
     </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 8000 //changes the speed
    })
    </script>

</body>

</html>
