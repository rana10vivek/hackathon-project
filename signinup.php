<!DOCTYPE html>

<html>
<head>
	<title>SIGN-UP</title>
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
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
			<style>
				
				body{
				max-width: 100%;
				overflow-x: hidden;
				}
				
				div > div > form >.row{ 					/*style for splitted form (fname and lname)(SIGNUP)*/
					margin-left:25px;
					margin-right: 25px;
				}
				
				#unsplittedform { 						/*style for unsplitted form elements(SIGNUP)*/
					margin-right: 195px;
					margin-left:40px;

				}

				
				.btn {									/*style for button*/
						background-color: #4CAF50;
						font-weight: bold;
						
				}
				
				.btn:hover {							/*style for button hover*/
					background-color: #4CAF50;
					box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0px 0px 0px 0px rgba(0,0,0,0.19);
				}

				.middle-border{ /*style for middle border line*/
				margin:150px 0px 0px -250px;
				padding right: 0px;
    			min-height: 450px;
    			border-right: 1px solid #ddd;
				}

				#signupform{							/*Style for sign in form 90text boxes*/
					margin:0px 30px 0px -114px;

				}

         a{
          color: #0099ff;
         }
				
			</style>

</head>
<body>

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
            <li><a href="voca.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="learn.php">E-learning<span class="caret"></span></a>  
            <ul class="dropdown-menu">
                    <li><a href="lagri.php">Agriculture</a></li>
                    <li><a href="lit.php">IT & ITES Sector</a></li>                    
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

            .affix {  /*style affix*/
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
              border-bottom:2px solid #87CEFA;  /*border color light blue*/
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
                    <li><a href="bank.php">Banking</a></li>
                    <li><a href="it.php">IT & ITES</a></li>                    
                    <li><a href="elec.php">Electronics</a></li>
                    <li><a href="agri.php">Agriculture</a></li>
                    <li><a href="hosp.php">Hospitality</a></li>
                    <li><a href="auto.php">Automobile</a></li>                    
                    <li><a href="const.php">Construction</a></li>
                    <li><a href="tour.php">Tourism</a></li>
                    <li><a href="capital.php">Capital Goods</a></li>
            </ul>
            </li>
           <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav navbar-right">
              <li class=""><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li class=""><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>            
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
	<div class="container">
	<br>
		<div class="col-sm-8">	<!--Sign up PART  left say 8-->
			<div class="container">
				<div class="col-sm-2"> <!--region for signup picture-->
					<img src="images/upicon.png" class="img-responsive" height="135px" width="135px">
				</div>
				<div class="col-sm-8" style="margin: 10px 0px 5px -25px; padding-left: 0px;"<!--region for written text Beside sign up picture-->
					<h2 style="color: #87CEFA; margin-bottom: -10px; padding-bottom: 0px; ">Enter Details</h2><br>
					<p style="color: #0099ff">Sign up, its free!</p>
				</div>
			</div>
			<br><br>
			<form class="form-horizontal" action = "validate.php" method="POST"> <!--the form starts-->
				<div class="row">			<!--container for name field as they are splitted into fname and lname-->
					<div class="form-group col-sm-5">
						<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name" required>
					</div>
					<div class="col-sm-1" style="margin: 0px 0px 0px -39px"><!--only 11 grids used one still left can be used but is of no use-->
					</div>
					<div class="form-group  col-sm-5">
						<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last name" required>
					</div>
				</div>
				<div id="unsplittedform"><!--container for the sign up fields that are not to be splitted-->
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail Address" required>
						</div>
						
						<div class="form-group">
							<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Phone Number" required>
														<script type="text/javascript">
							

								function isNumber(evt) 
								{
									evt = (evt) ? evt : window.event;
									var charCode = (evt.which) ? evt.which : evt.keyCode;
									if (charCode > 31 && (charCode < 48 || charCode > 57)) 
									{
										mobile.setCustomValidity("Please enter only numbers");
										return false;
									}

									return true;
								}

								function ValidateNo()
								{
									var phoneNo = document.getElementById('mobile');
									if (phoneNo.value == "" || phoneNo.value == null) 
									{
										mobile.setCustomValidity("Please Enter Your Mobile Number");
										return false;
									}
									if (phoneNo.value.length < 10 || phoneNo.value.length > 10) 
									{
										mobile.setCustomValidity("Mobile number should be of 10 digits");
										return false;
									}
									else
									{ 
										mobile.setCustomValidity("");
									}
								}
								mobile.onchange = ValidateNo; 
								mobile.onkeyup = ValidateNo;
							</script>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re Enter Password" required>
						</div>
							<script type="text/javascript">
						
						var password = document.getElementById("password")
						, repassword = document.getElementById("repassword");

						function validatePassword(){
						if(password.value != repassword.value) {
						repassword.setCustomValidity("Passwords Don't Match");
						} else {
						repassword.setCustomValidity('');
						}
						}			
						
						function ProperPassword()
						{
							if (password.value.length < 8) 
								{
										password.setCustomValidity("Password should be atleast 8 characters");
										return false;
								}
							if (password.value.length > 20) 
								{
										password.setCustomValidity("Password should not exceed 20 characters");
										return false;
								}
						
						}
						password.onchange = validatePassword;
						repassword.onkeyup = validatePassword;
						password.onchange = ProperPassword;
						repassword.onkeyup = ProperPassword;
						
						</script>
						<div class="form-group">
							<label class="radio-inline"><input type="radio" name="gender" id="gender" value="Male" required>Male</label>
							<label class="radio-inline"><input type="radio" name="gender" id="gender" value="Female" required>Female</label>
						</div>
						<div class="form-group">
							By clicking Create an account, you agree to our <a href="#">Terms</a> and confirm that you have read our <a href="#">Data Policy</a>. You may receive SMS message notifications from us and can opt out at any time.
						</div>
						<div class="form-group"><!--signup SUBMIT BUTTON-->
							<button  type= "submit" class="btn btn-primary" >CREATE AN ACCOUNT</button>
						</div>
				</div>
			</form>
		</div>
		<div class="col-sm-1 middle-border"></div> <!--middle border line-->
		<div class="col-sm-4 fluid-container">
			<div class="container" style="margin:0px 0px 0px -145px"> 			<!--sign in area-->
				<div class="col-sm-2">											<!--pic for sign in-->
				<img src="images/inicon.png" class="img-responsive" height="135px" width="135px">
				</div>
				<div class="col-sm-10" style="margin: 10px 0px 5px -25px; padding-left: 0px;">		<!--text besides pictre-->
					<h2 style="color: #87CEFA; margin-bottom: -10px; padding-bottom: 0px; ">Already Registered</h2>
					<br>
					<p style="color: #0099ff">Sign-In</p>
				</div>
			</div>
			<br><br>
			<form class="form-horizontal" action="signverify.php" method="POST">
				<div id="signupform"><!--container for the signin form -->
					<div class="form-group">
						<input type="email" class="form-control" id="inemail" name="inemail" placeholder="E-mail Address" style="width:70%" required>
					</div>
				
					<div class="form-group">
						<input type="password" class="form-control" id="inpassword" name="inpassword" placeholder="Enter Password" style="width: 70%" required>
					</div>
					<div class="form-group">
						<a href="#"  data-target="#pwdModal" data-toggle="modal" style="margin-left: 5px">Forgot Password?</a>
					</div>

					<div class="form-group"><!--Sign in BUTTON-->
					<a href="Userlog.php">	<button type="submit"  class="btn btn-primary" name="" style="width:45%" >SIGN IN</button></a>
					</div>
					<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
					  <div class="modal-dialog">
						  	<div class="modal-content">
						    	<div class="modal-header">
							      	<div class="col-sm-4">
							      		<img src="images/forgotwk.png" class="img-responsive" height="100px" width="100px"><!--other image frgtwk.png-->
							     	</div>
							     	<div class="col-sm-8">
							     	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
							     	    <h2 class="text-center" style="color: #0099ff; margin-left: -170px">What's My Password?</h2>
							     	</div>
						      	</div>
						      	<div class="modal-body">
						          	<div class="col-md-12">
						                <div class="panel panel-default">
						                    <div class="panel-body">
						                        <div class="text-center">
						                          
						                          <p>If you have forgotten your password you can reset it here.</p>
						                            <div class="panel-body" >
						                                <form>
							                                
							                                    <div class="form-group">
							                                        <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
							                                    </div>
							                                    <div class="form-group">
							                                    	<input class="btn btn-lg btn-primary btn-block" value="Get your password reset link" type="submit">
							                                	</div>
							                               
						                                </form>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
						      	</div>
						      	<div class="modal-footer">
						          	<div class="col-md-12">
						          		<button type="submit" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancel</button>
								  	</div>	
						      	</div>
						  	</div>
					 	 </div>
					</div>
				</div>
			</form>
		</div>
	</div>
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
.modal{
	z-index: 999999;
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
      <p>Designed by <a href="cyborg.php" data-toggle="tooltip"><strong><u>CYBORGS</u></strong></a></p> 
    </footer>	
</body>
</html>