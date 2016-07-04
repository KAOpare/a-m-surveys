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
    <div class="jumbotron">
    <div class="row" style="padding-top:35px">
    	<div class="col-lg-11">
        <center>
        	<h2>Our Services</h2>
            <h4>Survey services</h4>
            <!--ul class="breadcrumb" style="background-color:transparent">
              <li>Home</li> <span class="glyphicon glyphicon-circle-arrow-right"></span>
              <li>Services</li> <span class="glyphicon glyphicon-circle-arrow-right"></span>
              <li>Crop / farm compensation services</li>
            </ul-->
            
            </center>
        </div>
    </div>
</div>
    <!-- Page Content -->
     <div class="container-fluid">
   <div class="row">
   
   
         <div class="col-lg-1"></div>
         
         <div class="col-lg-8">
         	<div class="row">
            
            <div class="col-lg-2"  style="padding-top:50px">
            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-success"></i>
                            </span>
                                                             
                            </div></div>
            <div class="col-lg-9" style="padding-top:50px">
    			<article>
                
            <h2>Crop/farm compensation services</h2>
        <p>Often with projects which impacts on large areas of land, the property that are impacted are surveyed, accessed, compensation paid and resettlement undertaken for affected inhabitants where necessary. Surface Mining and Dam Construction activities which are carried out mostly in the inter-lands impacts on the property (crops/farms, Villages/buildings, water sources/wells, etc) of the inhabitants who are mainly farmers. For the smooth take off of such projects the need to accurately survey all individual buildings, farms/fields and capture the crop composition for valuation and compensation purposes cannot be overemphasized.</p><br/>
<p>
The main components of the Crop / Farm Compensation Surveys include:</p>
<ul>
<li>Capturing of farmers information and farm attributes</li>
<li>Creation of GIS geodatabase with all spacial and attribute information</li>
<li>Provision of individual plans and composite plans for farmers and land owners</li>
</ul>

<p>A-M Surveys provides these services in partnership with our valuation experts. This we have done for our cherished client Newmont Ghana, Asanko Gold, Gryphon minerals (in Burkina Faso) and other Mining companies.
    </p>
      
    		</article>
            </div>
             <div class="col-lg-1"></div>
	</div>
    <div class="row">
            
            <div class="col-lg-2"  style="padding-top:50px"><div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                               
                            </div></div>
            <div class="col-lg-9"  style="padding-top:50px">
    			<article>
                
            <h2>Mine Development Surveys</h2>
        <p>Am surveys has been involves in mine development surveys for Newmont Ghana, Asanko Gold, Gryphon minerals (in Burkina Faso), etc.</p>

<p>The main components of the Mine Development Surveys include:</p>
<ul>
   <li> Cadastralsurveys for land registration</li>
    <li> Topographic surveys of mining areas</li>
    <li> Demarcation of mine facilities such as the Tailings Storage Facility, Water Storage Facility, Various Pits, Waste Dump, Haul Roads, Plant Site, and Resettlement Sites, etc. </li>
</ul>

   
    		</article>
            </div>
             <div class="col-lg-1"></div>
	</div>
    <div class="row">
            
            <div class="col-lg-2" style="padding-top:50px"><div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                               
                            </div></div>
            <div class="col-lg-9" style="padding-top:50px">
    			<article>
                
            <h2>Topographical Surveys</h2>
        <p>We provide topographic survey services i.e. surveys showing the shape/model of the land. It uses contour lines (a line that represents a specific elevation measured from Mean Sea Level), to display the three dimensional features of the property onto a two dimensional surface. A topographic survey includes both natural and man-made features. This survey also shows hills, streams, lakes, and vegetation along with major buildings, fences, roads, transmission lines, and property boundaries.<p>

<p>The main components of the Topographical surveys include</p>
<ul>
   <li> details survey of existing structure</li>
    <li>topographic surveys of area</li>
   <li> Production of contours</li>
    <li>Ground modelling</li>
</ul>
<p>A topographic survey has a variety of uses including planning and zonning site layout, engineering and architectural design, and construction.</p>

       
    		</article>
            </div>
            <div class="col-lg-1"></div>
	</div>
    <div class="row">
            
            <div class="col-lg-2" style="padding-top:50px"><div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                               
                            </div></div>
            <div class="col-lg-9" style="padding-top:50px">
    			<article>
                
            <h2>Route line and utility location surveys</h2>
        <p>We provide survey services for the establishment of electrical power lines, water lines, telephone lines, roads etc.  We have provided this surveys services for Volta River Authority (VRA) for the extensions of the national Grid (Power) to various communities in Ghana.</p>
 <p>We also provide utility location survey i.e. determining the location of utilities in the street and on site, including electric, telephone, and gas. These surveys depict size, depth and pressure of water mains, location of the nearest fire hydrant and size of main, invert elevation of sewers, storm drains and catch basins. They also indicate location and characteristics of power and communications systems above and below grade. For all sub-surface utility lines on the site, they indicate and locate intersections and manholes for the first connection to the off-site system. </p>

 <p>For electrification project, the main components include: </p>
<ul>
  <li>  Setting out and clearing of Right Of Way</li>
   <li> Topographic Survey on Right Of Way</li>
   <li> Tower Spotting,</li>
  <li>  Profile Verification,</li>
    <li>Transmission Line Alignment</li>
</ul>
 <p>The main components for Community Water and Sanitation Project include:</p>
<ul>
   <li> Topographic Survey for design of Water System</li>
   <li> Survey of all existing Boreholes, and other important water sources</li>
   <li> setting out the locations of the reservoirs, standpipes and pipeline routes for each
    town.</li>
</ul>

   	</article>
            </div>
            <div class="col-lg-1"></div>
	</div>
    <div class="row">
            
            <div class="col-lg-2" style="padding-top:50px"><div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                               
                            </div></div>
            <div class="col-lg-9" style="padding-top:50px">
    			<article>
                
            <h2>Deeds and land title registration</h2>
        <p>A site plan signed by a surveyor and approved by the Director of Surveys is a requirement for regularization of title and a building permit.</p>

<p>The main components of the service include:</p>
<ul>
   <li> Boundary demarcation and pillaring</li>
   <li> Provision of site plans and cadastral plans</li>
   <li> Facilitation the registration process for our clients.</li>
</ul>

    
      
    		</article>
            </div>
            <div class="col-lg-1"></div>
	</div>
    <div class="row">
            
            <div class="col-lg-2" style="padding-top:50px"><div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                
                            </div></div>
            <div class="col-lg-9" style="padding-top:50px">
    			<article>
                
            <h2>Subdivision surveys / Setting out of layouts </h2>
        <p>Subdivision surveys are used for subdividing a tract of land into smaller parcels, showing documentation and survey data on a map, in conformance with local ordinances. This would include the sizing and location of lots (set-backs & easements) and streets depending on the town and country planning’s regulations. These surveys are required by developers before seeking approval from The Town and Country Planning Department.</p>

<p>When developing a parcel of land, the developer requires a wide range of surveys. One would need boundary surveys of the subdivision before planning even begins in order to know the actual boundaries of the subdivision.   The developer’s consultants require a topographic surveys or aerial mapping of the site if it’s large enough. This will aid them in the planning and preparing engineering designs of the site. The consultants may need other surveys as necessary to complete their plans. The government reviewing staff requires a survey to be submitted as part of the sketch and preliminary plan submittals, and the government approving board requires a subdivision plat prepared by a Licensed Surveyor before final approval of the subdivision. Once construction begins, the contractors and engineers will need construction staking of the engineering plans in the field. Furthermore, the approving government will require the setting of monuments on the corner of each individual lot before its sale.</p>

    </p>
      
    		</article>
            </div>
            <div class="col-lg-1"></div>
	</div>
    <div class="row">
            
            <div class="col-lg-2" style="padding-top:50px"><div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                               
                            </div></div>
            <div class="col-lg-9" style="padding-top:50px">
    			<article>
                
            <h2>Construction Layout / Setting out </h2>
        <p>Construction layout includes the layout of buildings, curbs, storm and sewer drainage system and other site features. This could also include staking of building corners, staking the location and elevation of a new sewer line and staking the location and elevation of any type of concrete to be poured (roads, driveways, etc.)</p>

<p>Construction surveying is the translation of construction plans into physical points on the ground that can be used as a basis for the actual construction. The results of construction surveying are seen in most urban, suburban or rural setting. Almost any roadway, building, or other man-made improvement likely had some amount of construction surveying involved. Construction surveying provides not only the horizontal location of new improvements, but also the vertical information required to ensure that surfaces drain or pipes flow as required.</p>

<p>The stakes and points set during the process of construction surveying are not usually set at the actual construction point, but typically on some sort of offset. This is done so that the survey stake is not disturbed by excavation or other activities that will take place at the actual point of construction. The stakes are marked with an “offset” and a “grade.” The “offset” is the distance from the survey stake to the horizontal position of the actual point of construction, and are typically three feet for curb and gutter or ten feet for underground pipes. The distance of the offset should be coordinated with the contractor to accommodate any specific needs due to existing field conditions or special equipment, and should be clearly marked on the survey stake. The “grade” represents the change in elevation that needs to be obtained from the reference point to the actual construction point, which is expressed as a “cut” (lower in elevation) or a “fill” (higher in elevation). The grade should also indicate the vertical feature that the grade is referencing, usually a flow line or finished floor elevation.</p>

<p>That is to say that, the surveyor is involved from start to finish on a construction project.</p>

    </p>
      
    		</article>
            </div>
            <div class="col-lg-1"></div>
	</div>
    <div class="row">
            
            <div class="col-lg-2" style="padding-top:50px"><div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                               
                            </div></div>
            <div class="col-lg-9" style="padding-top:50px">
    			<article>
                
            <h2>Earthworks and Volumetric Analysis</h2>
        <p>We provide volume calculation of stockpiles, landfills, quarry sites, sand & gravel pits, and other related areas.</p>

<p>We create a digital terrain model (DTM) from collected data. In essence, this is a spatially correct computerized representation of a site. As such, things can be added, overlaid or manipulated and dimensional information can be directly queried. The DTM is thus the starting block for any subsequent design project and can form the base information for many land and industrial GIS applications.</p>

<p>By generating surfaces within the DTM volumetric information can be obtained. Questions concerning quantities such as cut & fill can be answered quickly and accurately. Laborious calculations, traditionally done by hand, can be performed many times at high speeds.</p>

<h3>Reasons you need Volumetric Analysis</h3>
<ul>
   <li> To be able to qualify the amount/volume of work done by the construction company</li>
   <li> For a more scientific planning</li>
    <li> It enables the designer to try out more options, giving greater flexibility and ultimately a more cost-effective solution.</li>
</ul>     
      
    		</article>
            </div>
            <div class="col-lg-1"></div>
	</div>
  </div>      
  <aside class="col-lg-3">
        	<h3>Survey services</h3>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Crop / farm compensation Services</a></li>
                <li><a href="#">Mine development surveys</a></li>
                <li><a href="#">Topographical surveys</a></li>
                <li><a href="#">Route line and utility location surveys</a></li>
                <li><a href="#">Deeds and land title registration</a></li>
                <li><a href="#">Subdivision surveys / setting out of lands</a></li>
                <li><a href="#">Construction layout / setting out</a></li>
                <li><a href="#">Earthworks and volumetric analysis</a></li>
            </ul> 
         </aside>  

        </div>
	
        <div class="container">
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
