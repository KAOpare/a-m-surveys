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
  <div class="container navbar-fixed-top navbar-collapse" style="background-color:#fff">
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
    <div class="jumbotron">
    <div class="row" style="padding-top:35px">
    	<div class="col-lg-11">
        <center>
        	<h2>Our Projects</h2>
            <ul class="breadcrumb" style="background-color:transparent">
              <li><a href="#">Home</a></li> <span class="glyphicon glyphicon-circle-arrow-right"></span>
              <li><a href="#"  class="active">Services</a></li> <span class="glyphicon glyphicon-circle-arrow-right"></span>
              <li>Crop / farm compensation services</li>
            </ul>
            </center>
        </div>
    </div>
</div>
    <!-- Page Content -->
   
	
        <div class="container">
        <div class="container padded">
	<div class="row">
      <div class="col-sm-8 blog">
      <article>
      	<h1><a href="#"> Enhancing Existing Features</a></h1>
        <p class="lead"><a href="main.php">Infintie Skills</a></p>
        <hr />
        <p><span class="glyphicon glyphicon-time"></span>Posted on 9th May at 11:00 AM</p>
        <hr>
        <img src="images/blog1.jpg" class="img-responsive" />
        <hr />
        <p>dummy text alot of the stuff in here. Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.</p>
        <a class="btn btn-primary pull-right">Read more &raquo;</a>
      </article>
      <br>
      <hr>
       <article>
      	<h1><a href="#"> New Title</a></h1>
        <p class="lead"><a href="main.php">Infintie Skills</a></p>
        <hr />
        <p><span class="glyphicon glyphicon-time"></span>Posted on 9th May at 11:00 AM</p>
        <hr>
        <img src="images/blog2.jpg" class="img-responsive" />
        <hr />
        <p>dummy text alot of the stuff in here. Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.</p>
        <a class="btn btn-primary pull-right">Read more &raquo;</a>
      </article>
      <br>
      <hr>
       <article>
      	<h1><a href="#"> Another New Title</a></h1>
        <p class="lead"><a href="main.php">Infintie Skills</a></p>
        <hr />
        <p><span class="glyphicon glyphicon-time"></span>Posted on 9th May at 11:00 AM</p>
        <hr>
        <img src="images/blog3.jpg" class="img-responsive" />
        <hr />
        <p>dummy text alot of the stuff in here. Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem.</p>
        <a class="btn btn-primary pull-right">Read more &raquo;</a>
      </article>
      <br>
      <hr>
      <ol class="pagination">
      	<li><a href="#">&laquo;</a></li>
        <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ol>
      </div>
       <div class="col-sm-4 sidebar">
      
       </div>
    </div>
</div>
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
                    <p>Copyright &copy; A-M Surveys 2015</p>
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
