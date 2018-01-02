<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to Voca!</title>
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
      </style>
      
      <script type="text/javascript">
      $(document).ready(function(){
        $("#vidModal").modal('show');
        $("#vidModal").css("z-index", "10000"); /*z-index greater than z-index of nav bar to avoid overlap*/
        
      });
    </script>      
  </head> 
  <body>
          <div id="vidModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <div class="col-sm-4">
                        
                    </div>
                    <div class="col-sm-8">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
                        <h2 class="text-center" style="color: #0099ff; margin-left: -170px">Voca's Tour Guide</h2>
                    </div>
                    </div>
                    <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BZvSqUeBumk" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <div>
                          <button type="submit" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Ok,I Got It!</button>
                    </div>  
                    </div>
                </div>
             </div>
          </div>  

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
            <li class=""><a href="voca.php">HOME</a></li>
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
              <li><a href="signinup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="signinup.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

<div class="container" style="background-image: url(images/carouselcollege.jpg); min-width: 100%; min-height: 300px;">
  <!--  <div class="row"><br>
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
</div><br>


<div class="container-fluid">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="images/voca.jpg" style="width: 350px; height:250px;" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>What is Vocational Education?</h2>
                            <p>Vocational education or skill based education are in certain disciplines which enables students to acquire skills which are traditionally non-academic and totally related to specific trade, occupation or vocation.</p><p>They are also known as Technical Education. Career and Technical Education (CTE) or vocational Education and Training (VET) as they directly develop expertise in a particular group of techniques or technology through manual or practical activities.</p>
                        </div>
                    </div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="images/need.png" style="width: 350px; height:250px;" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Why Vocational Courses?</h2>
                            <p> Vocational courses are generally low-priced alternative for individuals who do not want to take up a loan to go to a university.</p><p>Vocational studies formulate an individual for a precise job. It trains a person with the skills and abilities compulsory to do a specific job, such as interior designing, fashion designing, auto repairing, computer networking etc.</p>
                        </div>
                    </div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="images/homec1.jpg" style="width: 350px; height:250px;" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>How it is changing the world?</h2>
                            <p>Generally, it is understood that employers choose to hire a student who has done a vocational course rather than a simple college pass out, as because in a vocational course, a student is taught precisely for a specific job.</p><p>The student already owns the right personality, skills, potentials and education for the job and the companies feel that he will be more fruitful than a systematic college pass out due to his particle knowledge.</p>
                        </div>
                    </div>
                </div>           
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="images/area of int.jpg" style="width: 350px; height:250px;" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>The future.</h2>
                            <p>People, who are by now working and those who want to get additional education to progress their professions and cannot afford to take a four-year halt and going for an another college degree can choose a vocational course to improve their skills and testimonials.</p><p>The time period for the course is less, but the expertise that is imparted to students through such courses, is fairly equivalent to the college courses, in terms of superiority.</p>
                        </div>
                    </div>
                </div>           
            </div> 
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
              <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="images/scholarbook.png" style="width: 50px; height: 50px;"><small><b>Colleges</b></small></a></li>
              <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="images/scholarbook.png" style="width: 50px; height: 50px;"><small><b>Courses</b></small></a></li>
              <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="images/scholarbook.png" style="width: 50px; height: 50px;"><small><b>Scholarships</b></small></a></li>
              <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="images/scholarbook.png" style="width: 50px; height: 50px;"><small><b>Articles</b></small></a></li>
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
</div>
<script>
$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});
</script>
<style>
{
    padding-top:20px
}
#custom_carousel .item {

    color:#000;
    background-color:#eee;
    padding:20px 0;
}
#custom_carousel .controls{
    overflow-x: auto;
    overflow-y: hidden;
    padding:0;
    margin:0;
    white-space: nowrap;
    text-align: center;
    position: relative;
    background:#ddd
}
#custom_carousel .controls li {
    display: table-cell;
    width: 1%;
    max-width:90px
}
#custom_carousel .controls li.active {
    background-color:#eee;
    border-top:3px solid orange;
}
#custom_carousel .controls a small {
    overflow:hidden;
    display:block;
    font-size:10px;
    margin-top:5px;
    font-weight:bold
  }  
</style>

    <!-- Container (THE INFO) -->
  <br><br>  <div id="band" class="container text-center">
        <h3><strong>Empowering Millions of The Youth!</strong></h3>
        <p><em>Make right decision for career and college.</em></p>
        <p>We have over 6000+ institutions enlisted on our websites. These colleges provide over more than 200 vocational courses. These vocational courses are from all the diverse fields, electrical, lifestyle and beauty, handicraft, mechanical to name some of the all. All the information about the colleges, the course they provide, are present on this one interactive platform. VOCA has been the number one choice of the students when it comes to authentic and latest updates. Our circle of 320000 subscribed users is a prove of that. Not only students but the educational organizations trust us to give them a platform to get in touch with the youth. Over 2000 institutions are currently the members of VOCA who regularly provides students with the academic scholarships.</p><br>
      <div class="row">
        <div class="col-sm-4">
          <p><a href="#"><strong><h3>ARTICLES</h3></strong></a></p><br>
        </div>
        <div class="col-sm-4">
          <p><strong><a href="#"><h3>EXPERT FORUM</h3></a></strong></p><br>
        </div>
        <div class="col-sm-4">
          <p><strong><h3><a href="#">COMPARE COLLEGES</a></h3></strong></p><br>
        </div>
      </div>
        <br>
        <!--COMMENTS-->
      <style>
        .person {
        border: 10px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
        opacity: 0.7;
      }
      .person:hover {
        border-color: #f1f1f1;
      }

      </style>
      <div class="row" >
        <div class="col-sm-4">
          <p class="text-center"><strong>Nancy Smith</strong></p><br>
          <a href="#demo" data-toggle="collapse">
            <img src="images/nancy smith.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo" class="collapse">
            <p>Amazing website with sharp facts.</p>
            <p>Helped me made the right decision.</p>
            <p>Thank you VOCA!</p>
          </div>
        </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>Light Yagami</strong></p><br>
          <a href="#demo2" data-toggle="collapse">
            <img src="images/light yagami.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo2" class="collapse">
            <p>Highly Recommended!!</p>
            <p>I recieved a scholarship</p>
            <p>and that too of 3 lakhs.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>Bruce Wayne</strong></p><br>
          <a href="#demo3" data-toggle="collapse">
            <img src="images/bruce wayne.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo3" class="collapse">
            <p>This site is for everyone</p>
            <p>who doesn't want to mess up with future.</p>
            <p>Can't go wrong with this beside you.</p>
          </div>
        </div>
      </div>
    </div>
    <!--FIN Comments -->

<!-- Featured College Section -->
<div class="w3-container" style="padding:20px 16px; background-color:#ECEFF3;">
  <h2 class="w3-center">FEATURED COLLEGES</h2>
  <p class="w3-center w3-large">Shortcut to the best.</p>
  <br>
  <div class="w3-row-padding" style=" margin-left: 80px">
    <div class="w3-col l3 m6">
     <img src="images/du.jpg" style="width: 200px; height: 200px;"  data-toggle="tooltip" title="Delhi University" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/swami.jpg" style="width: 200px; height: 200px;" data-toggle="tooltip" title="Swami Vivekanand Institute"  class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/sriram.jpg" style="width: 200px; height: 170px;" data-toggle="tooltip" title="Sri Ram College"  class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/du.png" style="width: 200px; height: 200px;" data-toggle="tooltip" title="Delhi University"  class="w3-hover-opacity" >
    </div>
  </div>
  <br>
  <div class="w3-row-padding w3-section" style="margin-left: 80px;">
    <div class="w3-col l3 m6">
      <img src="images/iti.jpg" style="width: 200px; height: 200px;" data-toggle="tooltip" title="Insitute of Training & Information"  class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/iiv.png" style="width: 200px; height: 200px;"  data-toggle="tooltip" title="Insitute of Vocational Studies" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/bird.jpg" style="width: 200px; height: 180px;" data-toggle="tooltip" title="Dhanyanvardini Education Society" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/ssr.png" style="width: 200px; height: 170px;" data-toggle="tooltip" title="S.S.R Group Of Insititutes"  class="w3-hover-opacity">
    </div>
  </div>
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

    <!-- Container (Services Section) -->
    <br>
    <div class="container-fluid text-center">
        <h2>JUST FOR YOU</h2>
        <h4>What we offer</h4>
        <br>
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-education logo-small"></span>
          <h4><a href="https://www.google.co.in/#q=articles+on+vocational+education&*">Scholary Articles.</h4></a>
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
      z-index:99999;
    }
    </style>
    <!-- SERVICES FIN -->

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
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>About Us</h3>
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
      <p>Designed by <a href="cyborg.php" data-toggle="tooltip"><strong><u>CYBORGS</u></strong></a></p> 
    </footer>



</body>
</html>      