<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Successfully logged in!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/carousel.css" rel="stylesheet" type="text/css" /> 
		<!--AUTOMATIC POPUP ON WINDOW LOAD-->  

		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#myModal").modal('show');
				$("#myModal").css("z-index", "10000"); /*z-index greater than z-index of nav bar to avoid overlap*/
				
			});
		</script>
	</head>	
	<body>

		<div id="myModal" class="modal fade" data-backdrop="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Take the psychometric test now!!</h4>
					</div>
					<div class="modal-body">
						<p>This quick test will mark your strengths and weaknesses for a better choice.</p>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email Address">
							</div>
							<button class="btn btn-primary"><a href="test.php">Take the Test</a></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--AUTOMATIC POPUP CODE CLOSEUP-->
		<style>
		   {
				max-width: 100%;
				overflow-x: hidden;
			}
		</style>			
		 <div class="container-fluid" style="background-color:#ECEFF3"><!--top ministry banner-->
		 	
			<div class="col-sm-4" style="margin: 15px -140px 15px 170px;" >	
			 		<img src="images/emblem.png" height="125" width="75">
			 </div>
			<div class="col-sm-8" style="margin:40px 0px 40px -190px;">
			 	<h1><b>Ministry of Skill Development & Entrepreneurship</b></h1>
			 	
		 	</div>	
		 </div>				
		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="130"><!--Affix nav bar-->	
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
				  <p class="navbar-brand">VOCA</p>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class=""><a href="userlog.php">HOME</a></li>
						<li><a href="inaboutus.php">ABOUT US</a></li>
						<li><a href="test.php">TEST</a></li>
            			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="learn.php">E-learning<span class="caret"></span></a>  
           		    <ul class="dropdown-menu">
                    <li><a href="inlagri.php">Agriculture</a></li>
                    <li><a href="inlit.php">IT & ITES Sector</a></li>                    
                    <li><a href="#!">Beauty & Wellness</a></li>
                    <li><a href="#!">Electronics</a></li>
                    <li><a href="#!">Hospitality</a></li>
            </ul>
            </li>          							
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">INSTITUTES<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">NORTH ZONE</a>
									<ul class="dropdown-menu">
										<li><a href="north.php">J&K</a></li>
										<li><a href="#!">Punjab</a></li>
										<li><a href="#!">Haryana</a></li>
										<li><a href="#!">Delhi</a></li>
										<li><a href="#!">Uttar Pradesh</a></li>
										<li><a href="#!">Uttrakhand</a></li>
										<li><a href="#!">Himachal Pradesh</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">WEST ZONE</a>
										<ul class="dropdown-menu">
											<li><a href="west.php">Goa</a></li>
											<li><a href="#!">Gujarat</a></li>
											<li><a href="#!">Maharashtra</a></li>
											<li><a href="#!">Rajasthan</a></li>
										</ul>
								</li>
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">SOUTH ZONE</a>
										<ul class="dropdown-menu">
											<li><a href="south.php">Andhra Pradesh</a></li>
											<li><a href="#!">Kerela</a></li>
											<li><a href="#!">Karnataka</a></li>
											<li><a href="#!">Telengana</a></li>
											<li><a href="#!">Tamil Nadu</a></li>
										</ul>
								</li>									
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">CENTRAL ZONE</a>
										<ul class="dropdown-menu">
											<li><a href="central.php">Chattisgarh</a></li>
											<li><a href="#!">Madhya Pradesh</a></li>
										</ul>
								</li>	
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">EAST ZONE</a>
										<ul class="dropdown-menu">
											<li><a href="east.php">Bihar</a></li>
											<li><a href="#!">Jharkhand</a></li>
											<li><a href="#!">Orissa</a></li>
											<li><a href="#!">West Bengal</a></li>
										</ul>
								</li>	
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">NORTH EAST ZONE</a>
										<ul class="dropdown-menu">
											<li><a href="northeast.php">Assam</a></li>
											<li><a href="#!">Arunachal Pradesh</a></li>
											<li><a href="#!">Manipur</a></li>
											<li><a href="#!">Meghalaya</a></li>
											<li><a href="#!">Mizoram</a></li>
											<li><a href="#!">Nagaland</a></li>
											<li><a href="#!">Tripura</a></li>
										</ul>
								</li>	
															
							</ul>
						</li>
				 
						<style>

						.affix {	/*style affix*/
						      top:0;
						      width: 100%;
						}
														
						.dropdown-menu {
							margin: -2px 0 0;
							background:#778899;
							border:1px solid #FAFAD2;
							border-radius: 0px;
						}

						.dropdown-menu > li > a {
							clear: both;
							color: #fff !important;
							font-weight: normal;
							line-height: 20px;
							padding: 10px 20px;
							white-space: nowrap;
							border-bottom:2px solid #87CEFA;	/*border color light blue*/
						}

						.navbar .nav > li > .dropdown-menu::before, 
						.navbar .nav > li > .dropdown-menu::after {
							border: none;
							content: none;
						}


						.navbar-inverse .nav li.dropdown.open > .dropdown-toggle, .navbar-inverse .nav li.dropdown.active > .dropdown-toggle, .navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle {
							background-color: #fff;
							color: #87CEFA;
						}

						.navbar .caret {
							border-bottom-color: #000 !important;
							border-top-color: #000 !important;
						}

						.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
									background-image:none !important;
									background-color:#000;
								
								}
							
						.nav-collapse .nav > li > a:hover .caret{
							border-bottom-color: #000 !important;
							border-top-color: #000 !important;
						}

						ul.nav li.dropdown:hover ul {
						display: block;
						}

						.dropdown-menu .dropdown-submenu ul {
							min-width: 250px;
							left: 100%;
							position: absolute;
							top: 0;
							visibility: hidden;
							margin-top: -5px;
							margin-left: 0px;
							border-radius: 0px !important;
						}

						.dropdown-menu li:hover .dropdown-menu {
							visibility: visible;
							display: block;
						}
						</style>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="learn.php">COURSES<span class="caret"></span></a>  
                  <ul class="dropdown-menu">
                      <li><a href="inbank.php">Banking</a></li>
                    <li><a href="init.php">IT & ITES</a></li>                    
                    <li><a href="inelec.php">Electronics</a></li>
                    <li><a href="inagri.php">Agriculture</a></li>
                    <li><a href="inhosp.php">Hospitality</a></li>
                    <li><a href="inauto.php">Automobile</a></li>                    
                    <li><a href="inconst.php">Construction</a></li>
                    <li><a href="intour.php">Tourism</a></li>
                    <li><a href="incapital.php">Capital Goods</a></li>
                  </ul>
                  </li>						<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">WELCOME, USER</span> </a>
							<ul class="dropdown-menu">
								
                                <li><a href="userlog.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li>   
    							<li><a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>&nbsp;&nbsp;News</a></li>    
								<li><a href="update profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp;Update</a></li>    
    							<li><a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw"></i>Messages</a></li>
    							<li><a href="voca.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-send fa-fw"></i>&nbsp;&nbsp;Logout</a></li>								

							</ul>
						</li>
						<li>    
						<div class="w3-col s4">
                           <img src="images/dashboard.png" class="w3-circle w3-margin-right" style="width:46px">
                        </div></li>
						   
						</ul> 
					</ul>
				</div>
			</div>
		</nav>


		<style>/*for the top nav bar */
		.navbar {
			margin-bottom: 0;
			background-color:#414245;
			z-index: 999;
			border: 0;
			font-size: 12px !important;
			line-height: 1.42857143 !important;
			letter-spacing: 4px;
			border-radius: 0;
		}

		.navbar li a, .navbar .navbar-brand {
			color: #fff !important;
		}

		.navbar-nav li a:hover, .navbar-nav li.active a {
			color:#161414  !important;   /*Nav bar icons hover color*/
			background-color: #fff !important;
		}

		.navbar-default .navbar-toggle {
			border-color: transparent;
			color: #fff !important;
		}

		</style>	

<div class="container" style="background-image: url(images/collegebackground.jpg); min-width: 100%; min-height: 300px;">
 <!--   <div class="row"><br>
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><b>Welcome to VOCA!</b></h4>
                </div>
                <div class="panel-body">
                    <ul id="myTab2" class="nav nav-tabs nav-justified">
                        <li class="">
                            <a href="javascript:;" data-target="#home1" data-toggle="tab"><b>Universities</b></a>
                        </li>
                        <li class="">
                            <a href="javascript:;" data-target="#profile1" data-toggle="tab"><b>Colleges</b></a>
                            <div class="row" id="box-search">                            
								<form class="form-inline">
								<div class="input-group">
						  				<input type="text" class="form-control" size="100" placeholder="Search in Voca" required>
						  				<div class="input-group-btn">
										<button type="button" class="btn btn-danger">&nbsp; Search!</button>
						  				</div>
								</div>
								</form>   
							</div>			                         
                        </li>
                        <li class="active">
                            <a href="javascript:;" data-target="#messages1" data-toggle="tab"><b>Courses</b></a>
                        </li>
                    </ul>
                    <br>
                    <div id="myTabContent1" class="tab-content">
                        <div class="tab-pane fade" id="home1">
                            <p>Search for a university across India and find out the details. </p>
                        </div>
                        <div class="tab-pane fade" id="profile1">
                            <p>Check out the colleges in India providing the various courses and choose the path of your career. </p>
                        </div>
                        <div class="tab-pane fade active in" id="messages1">
                            <p>Choose your passion and then mould it into the career of your choice.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="container-fluid text-center" style="background-color:#87CEFA;"><br><br><br>
  <h2 style="font-style:verdana;">Empowering millions of students in making the <br> right career and college decision.</h2><br><br><br>

</div>
<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">6400+</span>
    <br>Colleges
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Courses
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">45+</span>
    <br>Universities
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">37,000</span>
    <br>Registered Users
  </div>
</div>
 <!-- News update -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
     <h1><b> <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Latest Updates</span></b></h1><br>
      <h3>Catch up with the news now.</h3>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="images/colleges.jpg" alt="Colleges" style="width:100%">
        <div class="w3-container">
          <h3>Colleges</h3>
          <p class="w3-opacity">Admission Open</p>
          <p>The list of the colleges inviting students for admission application for vocational courses..</p>
          <p><button class="w3-button w3-light-grey w3-block">Check It!</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="images/course.jpg" alt="Courses" style="width:100%" height="300px">
        <div class="w3-container">
          <h3>Trending Courses</h3>
          <p class="w3-opacity">See the chart busters.</p>
          <p>Check the most trending vocational courses and find something new.</p>
          <p><button class="w3-button w3-light-grey w3-block">Check It!</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="images/expertrev.jpg" alt="Expert" style="width:100%" height="300px">
        <div class="w3-container">
          <h3>Experts Forum</h3>
          <p class="w3-opacity">Reviews and advice.</p>
          <p>Expert's reviews and advice on the courses and the colleges for an informed decision.</p>
          <p><button class="w3-button w3-light-grey w3-block">Check It!</button></p>
        </div>
      </div>
    </div>
  </div>

		<!-- Container (Services Section) -->
		<br>
		<div class="container-fluid text-center">
			  <h2>JUST FOR YOU</h2>
			  <h4>What we offer</h4>
			  <br>
			<div class="row">
				<div class="col-sm-4">
				  <span class="glyphicon glyphicon-education logo-small"></span>
				  <h4><a href="#">Scholary Articles.</h4></a>
				  <p>Read the papers of more than 5000+ scholars.</p>
				</div>
				<div class="col-sm-4">
				  <span class="glyphicon glyphicon-heart logo-small"></span>
				  <h4><a href="#bottom">Connect & Support!</a></h4>
				  
				  
				</div>
				<div class="col-sm-4">
				  <span class="glyphicon glyphicon-hourglass logo-small"></span>
				  <h4><a href="#">Deadlines</h4></a>
				  <p>See the deadlines for applications.</p>
				</div>
			</div>
			  <br><br>
			<div class="row">
				<div class="col-sm-4">
				  <span class="glyphicon glyphicon-star logo-small"></span>
				  <a href="#"><h4>New Entries!</h4></a>
				  <p>See the list for new colleges</p>
				  <p>and courses added to the website.</p>
				</div>
				<div class="col-sm-4">
				 <span class="glyphicon glyphicon-pencil logo-small"></span>
				   <a href="#bottom"><h4>Have a query?</h4></a>
				  <p>Write to us for expert solution.</p>
				</div>
				<div class="col-sm-4">
				  <span class="glyphicon glyphicon-scale logo-small"></span>
				  <h4 style="color:#303030;"><a href="#">Compare</h4></a>
				  <p>Weigh the collges or courses on their merits.</p>
				</div>
			</div>
		</div>

		<style>
		.logo-small {
			color: #87CEFA;
			font-size: 50px;
		}

		.logo {
			color: #87CEFA;
			font-size: 200px;
		}

		.modal{
			z-index:999999;
		}
		</style>
		<!-- SERVICES FIN -->

<!-- ARTICLES MUST READ -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Must Read</h2>
<p>"Half knowledge is more dangerous than complete ignorance." That's why it is important to stay informed with the complete and true information and in real time.
VOCA has curated the most reliable set of articles for you to sharpen that sword of knowledge.Read the papers by experts to know everything there is to know.</p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/development.jpg" alt="development" style="width:100%" height="200px">
  <div class="w3-container">
  <h3>Upcoming Policies</h3>
  <h4>Government Plans</h4>
  <p><a href="#">Workshops</a></p>
  <p><a href="#">Training Programs</a></p>
  <p><a href="#">Scholarships</a></p>
  <p><a href="#">Job Offers</a></p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/skill.jpg" alt="skill" style="width:100%" height="200px">
  <div class="w3-container">
  <h3>The need of skills</h3>
  <h4>See the future</h4>
  <p><a href="#">India in terms of skill.</a></p>
  <p><a href="#">Manufacturing Demand.</a></p>
  <p><a href="#">Chnanging Outsourcing Impolicies.</a></p>
  <p><a href="#">Skills are the future.</a></p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/bulb.jpg" alt="motivation" style="width:100%" height="200px">
  <div class="w3-container">
  <h3>Be the job provider</h3>
  <h4>Create your own biz idea.</h4>
  <p><a href="#">Make in India!</a></p>
  <p><a href="#">Entrepreneur Awards 2016.</a></p>
  <p><a href="#">Dawn of the Start-ups.</a></p>
  <p><a href="#">World view of skill parameter.</a></p>
  </div>
  </div>
</div>

</div>
		<!-- Container (Contact Section) -->
		<div class="row"  style="background-color:#ECEFF3">
			<div id="contact"class="container">
			  <h3  class="text-center"><strong>Contact</h3></strong>
			  <p class="text-center"><em>YOU CAN SUBMIT YOUR QUERY HERE!</em></p><br>

				<div class="row">
					<div class="col-md-4">
						<p>Fan? Drop a note.</p>
						<p style="color:#133990"><span class="glyphicon glyphicon-map-marker"></span><strong> Delhi, India</p></strong>
						<p style="color:#133990"><span class="glyphicon glyphicon-phone"></span><strong>Phone: +0124-2345671</p></strong>
						<p style="color:#133990"><span class="glyphicon glyphicon-envelope"></span><strong>Email: voca@mail.com</p></strong>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-sm-6 form-group">
							  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
							</div>
							<div class="col-sm-6 form-group">
							  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
							</div>
						</div>
						<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
						<br>
						<!-- Trigger the modal with a button -->
						  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#themodal">Submit!</button>
						  <br><br><br>
						  <!-- Modal -->
						<div class="modal fade" id="themodal" role="dialog">
							<div class="modal-dialog">
				
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Hurray! Your message has been sent.</h4>
									</div>
									<div class="modal-body">
										<p>We will revert to you as soon as possible.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">OKAY</button>
									</div>
								</div>
							</div>
						</div>
					</div>
		  
				</div>
			</div>
		</div>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <img src="images/snape.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px" height="65px">
            <span class="w3-large">Professor Snape</span>
            <br>
            <span>Professor Snape will give scholarships worth 4.5 crore to students.</span>
          </li>
          <li class="w3-padding-16">
            <img src="images/baelish.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px" height="65px">
            <span class="w3-large">Opening 100 training centers across 34 cities.</span>
            <br>
            <span>Students will be selected through tests.</span>
          </li>
          <li class="w3-padding-16">
            <img src="images/hogwarts.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px" height="65px">
            <span class="w3-large">Welcome to the club.</span>
            <br>
            <span>Hogwarts adds vocational courses to it's academic curriculum.</span>
          </li>
          <li class="w3-padding-16">
            <img src="images/whitman.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px" height="65px">
            <span class="w3-large">Create new adventure.</span>
            <br>
            <span>Whitman to launch new startup ideas through seminars and conferences in colleges.</span>
          </li>
        </ul>
      </div>
      <hr>
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>This is an intiative by the Ministry of Skill Development and Entrepreneirship to enlighten people for the need of the skills.</p>
      <p>Powered by <a href="#" target="_blank">Cyborgs</a></p>
    </div>
  
    <div class="w3-third">
      <h3>Need Help?</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="images/helpline.png" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">24X7 hotline.</span><br>
          <span>PH NO. 4204204</span>
        </li>
        <li class="w3-padding-16">
          <img src="images/scholarbook.png" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Talk to Scholars.</span><br>
          <span>Know how schoalrships made their lives.</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Delhi university</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Soft skills</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Lifestyle & Beauty</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Photography</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Mumbai University</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Distance Education</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Training Programs</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Scholarships</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Make in India</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Part-time course</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Telephone Operator</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Expert Review</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Handicrafts</span>
      </p>
    </div>

      </p>
    </div>
  </footer><br><br>



<style>
/* Add a dark background color to the footer */
footer {
		background-color:#414245;
		color: #f5f5f5;
		padding: 32px;
		}

footer a {
		color: #f5f5f5;
		}

footer a:hover {
		color: #777;
		text-decoration: none;
		}


/*=========================
  Icons
 ================= */

/* footer social icons */
ul.social-network {
	list-style: none;
	display: inline;
	margin-left:0 !important;
	padding: 0;
}
ul.social-network li {
	display: inline;
	margin: 0 5px;
}


/* footer social icons */
.social-network a.icoRss:hover {
	background-color: #F56505;
}
.social-network a.icoFacebook:hover {
	background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
	background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
	background-color:#BD3518;
}
.social-network a.icoVimeo:hover {
	background-color:#0590B8;
}
.social-network a.icoLinkedin:hover {
	background-color:#007bb7;
}
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
	color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
	color:#44BCDD;
}

.social-circle li a {
	display:inline-block;
	position:relative;
	margin:0 auto 0 auto;
	-moz-border-radius:50%;
	-webkit-border-radius:50%;
	border-radius:50%;
	text-align:center;
	width: 50px;
	height: 50px;
	font-size:20px;
}
.social-circle li i {
	margin:0;
	line-height:50px;
	text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
	-moz-transform: rotate(360deg);
	-webkit-transform: rotate(360deg);
	-ms--transform: rotate(360deg);
	transform: rotate(360deg);
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-ms-transition: all 0.2s;
	transition: all 0.2s;
}
.social-circle i {
	color: #fff;
	-webkit-transition: all 0.8s;
	-moz-transition: all 0.8s;
	-o-transition: all 0.8s;
	-ms-transition: all 0.8s;
	transition: all 0.8s;
}
</style>

		<footer class="text-center">
		  <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'gu,hi,pa,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		
			<!-- Add font awesome icons -->
			<div class="col-md-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>
			
		  
		    <a class="up-arrow" href="#top" data-toggle="tooltip" title="TO TOP">
			<span class="glyphicon glyphicon-chevron-up"></span>
		  </a><br>
		  <p>Designed by <a href="incyborg.php"><strong><u>CYBORGS</u></strong></a></p> 
		</footer>

</body>
</html>			 				