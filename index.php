

<! doctype html>
<html>
    
<head>
    <title>ehub</title>
    <script src="bootstrap-3.3.6-dist/js/jquery-2.2.2.min.js"></script>
  <link href="bootstrap-3.3.6-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap-3.3.6-dist/css/carousel.css" rel="stylesheet" type="text/css"/>
    <link href="navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >
<link href="slideshow.css" rel="stylesheet">
     <script src="slideshow.js"></script>
    
<style type="text/css">
        body {
   
}
    .fa:hover{
        cursor: pointer;
        color: red;      
    }  
    
    a.back-to-top {
	display: none;
	width: 50px;
	height: 50px;
	text-indent: -9999px;
	position: fixed;
	z-index: 999;
	right: 20px;
	bottom: 20px;
	background: #27AE61 url("up-arrow.png") no-repeat center 43%;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
}
a:hover.back-to-top {
	background-color: #000;
}

.content{
    
        height: auto;
    background-color:cornflowerblue;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGUlEQVQ4y2NgoBJwoJAedcGoC0ZdMOAuAABF0hABJ/8lyQAAAABJRU5ErkJggg==);
  background-attachment: fixed;
    }
.content1{
    
        height: 300px;
    
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGUlEQVQ4y2NgoBJwoJAedcGoC0ZdMOAuAABF0hABJ/8lyQAAAABJRU5ErkJggg==);
  background-attachment: fixed;
    }

.content .transbox{
    padding-top: 0px;
        height: auto; /* For IE8 and earlier */
    background-color: #4169E1;
    color: white;
}
    .content2 .transbox{
    padding-top: 0px;
        height: auto; /* For IE8 and earlier */
    color: white;
}
    
    .content3 .transbox{
    padding-top: 0px;
        height: auto; /* For IE8 and earlier */
    background-color: black;
    color: white;
}
 .hov:hover{
    border:5px solid #fd0000;
}
 .hov1:hover{
    border:5px solid #36b44a;
}
 .hov2:hover{
    border:5px solid #004f8c;
}  
 .hov3:hover{
    border:5px solid #ffff00;
}
.content1 .transbox{
    padding-top: 50px;
        height: 480px; /* For IE8 and earlier */
}
        </style>
    <script type="text/javascript">
    $('#myCarousel').carousel();
    </script>
    
    </head>
  
<body>
   
<nav class="navbar  navbar-fixed-top " style="background-color:white; color:black;">
      <div class="container">
         <div class="col-xs-7">  
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           
          <a class="navbar-brand" href="#" style="margin-top:0px;"><img src="media/ehub_homepage_logo.jpg" height="40" class="pull-left" ></a>
            <a class="navbar-brand" href="#" style="margin-top:10px; margin-left:5px; margin-bottom:-10px;"><span >eHub</span></a>
        </div>
          </div>
          <div class="col-xs-5">
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li ><a href="#about">About</a></li>
               <li><a href="#">Team</a></li>
                <li><a href="#spec">Programs</a></li>
               <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
         </div>
          
              <!--/.navbar-collapse -->
      </div>  
        </nav>
  <!--<div class="container">-->
    <div class="content2"><div class="transbox">     


        <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" height="500" src="media/slide1.jpg" width="100%" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>#Code4</h1>
              <p>Users now demand access to services via mobile devices and few businesses can afford to ignore their wishes!</p>
              <p><a class="btn btn-primary" href="#about" role="button">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide"  src="media/slide3.jpg" alt="Second slide" width="100%" height="500">
          <div class="container">
            <div class="carousel-caption">
              <h1>#Training</h1>
              <p>Build and design amazing projects. Earn a valued credential. Launch your career. Be in demand </p>
              <p><a class="btn btn-primary" href="#spec" role="button">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="media/Apple-Rainbow-Widescreen-Desktop-Wallpapers.jpg" alt="Third slide" width="100%" height="500">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:black;">#Cyber Security</h1>
              <p style="color:black;">Its not a matter of If a {cybersecurity} breach will happen, but When"</p>
              <p><a class="btn btn-primary" href="#spec" role="button">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
        
        
        
        
        </div></div>
    
    
    
     <div class="content3" id="about"><div class="transbox">
        <div class="container" style="background-color: rgba(255, 255, 255, 0.3)">
        <div class="row">
            <h1 style="padding-top: 30px; padding-bottom: 10px;" class="lead text-center">ABOUT US</h1>
            <h4 class="lead text-center"><small style="color:white;"><u>Company Profile</u></small></h4>
            <div class="col-sm-4">
                <h2 class="text-right">Bridging the digital divide,</h2>  
                <h2 class="text-right">empowering</h2>
                <h2 class="text-right">community </h2>
                <h2 class="text-right">through Technology</h2>
            </div>
           <div class="col-sm-4">
               <ul>
               Here at eHub we innovate to empower. We are:</p>
                <ul>
  <li>Bringing IT costs (on training, services and products) down across the board</li>
  <li>Breating real, credible, and highly skilled real time IT Professionals</li>
  <li>Empowering Women across the board </li>
<li>Discover your path to a great career</li>
<li>Enhance your skillset and boost your hireability through innovative, independent learning. </li>                  
</ul></ul>
            </div>
    <div class="col-sm-4">
        <div class="row"><div class="col-sm-2 image"><img src="media/red3.png" height="50"><div class="text">100</div></div>
            <div class="col-sm-10">CYBER SECURITY</div>
        </div><br>
          <div class="row"><div class="col-sm-2 image"><img src="media/perfectgreen.png" height="50" ><div class="text">100</div></div>
              <div class="col-sm-10">ICT TRAINING</div>
        </div><br>
        <div class="row"><div class="col-sm-2 image"><img src="media/blue1.png" height="50" ><div class="text">100</div></div>
            <div class="col-sm-10">TECHNOLOGY CONSULTANCY</div>
        </div><br>
        <div class="row"><div class="col-sm-2 image"><img src="media/YELLOW2.png" height="50"><div class="text">100</div></div>
            <div class="col-sm-10">COMPUTER ENGINEERING</div>
        </div><br>
            
    </div>
            
        </div>
        </div></div>
    </div>
    
    
    
    <div class="content" id="spec"><div class="transbox">
        <div class="container" style="background-color: rgba(255, 255, 255, 0.3)">
        <div class="row">
            <h2  class="lead text-center" style="padding-top: 30px;"><b>OUR SPECIALIZATION</b></h2>
            <p class="lead text-center" style="padding-bottom: 20px;"><small>Accurate and efficient solutions on:</small></p>
            <div class="col-sm-3"><center><img src="media/Computer-Security-Icon.png" height="100" width="100" class="img-circle hov"></center>
            <br><p class="lead text-center">Cyber Security</p>
                <p class="text-justify">
                    We will make sure your staff has security systems and processes in place that they need. We will test your infastructure and your processes so you can be sure you're well prepared and monitor your key systems, website and network to ensure your data is safe. 
    
                </p><hr>
            </div>
           <div class="col-sm-3"><center><img src="media/train5.jpg" height="100" width="100" class="img-circle hov1"></center>
            <br><p class="lead text-center">ICT Training</p>
               <p class="text-center">eHub is where high-potential, pro-active students learn to code from a world-class curriculum with top quality 
                   instructors and mentors to support them in the process: 95% graduate hiring.
               </p><br><br><p></p><hr>
            </div>
            <div class="col-sm-3"><center><img src="media/tech.jpg" height="100" width="100" class="img-circle hov2"></center>
            <br><p class="lead text-center">Technology Consultancy</p>
                <p class="text-justify">
                    We deliver full-featured technology consulting services:
                    IT Infrastructure Audit,
                    IT Strategy Development,
                    Software Architecture Review,
                    Application Security Consulting,
                    Project Requirements Design.
                </p><hr>
            </div>
            <div class="col-sm-3"><center><img src="media/comp.jpg" height="100" width="100" class="img-circle hov3"></center>
            <br><p class="lead text-center">Software.Websites.Apps</p>
                
                <p class="text-justify">
                We help our customers create innovative services and solutions with our software outsourcing services ranging from technology consulting to business analysis, application maintenance 
                and solution integration.
                </p><hr>
            </div>
        </div>
        </div></div>
    </div>
    
    
    
    <div style="background-color:white;"><div class="transbox">
        <div class="container" style="background-color:white;">
        <div class="row">
            <div class="col-md-6">
           <h3 class="text-lead text-justify">Our Working Hours</h3>
                <div class="col-md-4"><br><br>
                <img src="media/saa.png" class="img-circle" height="120">
                </div>
                
                <div class="col-md-6">
              <br><br> 
        <table class="table table-hover table-condensed table-responsive borderless">
        <tr>
        <td> <b>Mon-Friday</b></td>
        <td> 8am - 4pm</td>
        </tr>
            <tr>
        <td><b>Saturdays</b></td>
        <td> 8am - 1pm</td>
        </tr>
            <tr>
        <td><b> Sundays</b></td>
        <td> Holiday</td>
        </tr>
                    </table>
                    <p><b>Note:</b>The eHub headquaters is located at Machakos</p>
                </div>
            </div>
            <div class="col-md-6">
            <h3 class="text-lead">Our Location</h3>
                <div class="col-md-8"><img src="media/mapone.png" height="200"></div>  
                <div class="col-md-4"><p>
                  <span class="glyphicon glyphicon-map-marker"></span><small> Kenya, Machakos</small></p></div>
        
            </div>
            </div>
        </div>
        </div>
        
    </div>
    
    
  <div class="content1" style="height:360px;"><div class="transbox" >
       <div class="container" style="padding-bottom:50px;">
                <div class="row">
        <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Call Me on</h3>
            </div>
            <div class="panel-body">
                <img src="media/call.png" height="25" title="Call Mobile">
                
                <a href="tel://+254710533607"> +254710533607</a> |
                <a href="tel://+254735640513"> +254735640513</a>
                    
            </div>
          </div>
            <hr>
                 <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">FACEBOOK</h3>
            </div>
            <div class="panel-body">
              <img src="media/fb.png" height="25"> Michael Emlyn
            </div>
          </div>   
        </div>
         <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Google Plus</h3>
            </div>
            <div class="panel-body">
              <img src="media/GooglePlus-logos-02.png" height="25"> Michael Malonza
<div class="pull-right">
<!-- Place this tag where you want the widget to render. -->
<div class="g-follow" data-annotation="bubble" data-height="24" data-href="//plus.google.com/u/0/100428046845646373892" data-rel="author"></div>
    </div>
            </div>
          </div>
             
             <hr>
                     <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">INSTAGRAM</h3>
            </div>
            <div class="panel-body">
              <img src="media/Instagram.png" height="25"> Mickemlyn
            </div>
          </div>
             
        </div>
                <div class="col-md-4">
  
<a class="twitter-timeline" data-height="300" data-theme="dark" data-link-color="#4169e1" href="https://twitter.com/ehub_ke">Tweets by ehub_ke</a>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        
         </div>
      </div>
        </div></div>
    
    
<!-- </div>
      FOOTER -->
      <footer id="contact"class="text-center" style="height:200px; background-color:#333; color:white;">
        <div class="container">
       <div class="row" style="padding-top:10px;">
        <div  class="col-sm-3"><img src="media/map25-redish.png" height="20" ><p>eHub House,</p> 
           <p>Muindi Mbingu Lane,</p>
            <p>Machakos,</p>
            <p>Kenya</p>
           </div>
        <div  class="col-sm-3"><img src="media/envelope4-green.png" height="20" ><p>info@ehub.co.ke</p></div>  
        <div  class="col-sm-3"> <img src="media/telephone65-blue.png"  height="20" ><p><a href="tel://+254716715768"> +254716715768</a></p></div> 
           
        <div  class="col-sm-3" style="background-color:black;height:180px;">
            <p>
                <i class="fa fa-facebook" aria-hidden="true"  style="font-size:15px;"></i>
                <i class="fa fa-twitter" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
                <i class="fa fa-linkedIn" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
            </p>
            
      <p>&copy; <?php echo " ".date("Y"); ?> eHub</p>
           <footer class="pull-right" style="padding-top:100px;">By &copy;Mickemlyn</footer>
           </div>
        </div>
        </div>
      </footer>

    </div><!-- /.container -->

<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    
  <script>window.jQuery || document.write('<script src="bootstrap-3.3.6-dist/js/jquery-2.2.2.min.js"><\/script>')</script>

</body>
</html>