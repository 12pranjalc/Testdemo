<?php  

include 'config.php';
$name=$_POST['sname'];
$email=$_POST['email']; 
$date=$_POST['date'];
 


$sql = "INSERT INTO form (name, date, email) VALUES ('$name', '$date', '$email')";
if (mysqli_query($conn, $sql)) {
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// mysqli_close($conn);



// $query = mysqli_query("SELECT * FROM form ");

$today = date("Y-m-d H:i:s");

if ($date < $today) 
{
	
date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'ssl'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "pranjalc731@gmail.com"; // Your Gmail address.
$mail->Password = "venuchaudhari"; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */

$mail->SetFrom("from@example.com"); // Set the sender of the message.
$mail->AddAddress("lajwantichaudhari16@gmail.com"); // Set the recipient of the message.
$mail->Subject = "PHPMailer GMail SMTP test"; // The subject of the message.


// Choose to send either a simple text email...
$mail->Body = "This is a plain-text message body"; // Set a plain text body.

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

// if ($mail->send()) {
//     echo "Your message was sent successfully!";
// } else {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// }
// }
// }
// else
// 	echo "not valid email";
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">
    
    <link href="preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->    

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="assets/images/header-bg.jpg" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide">ENGINEER GENERATE
          <span>MOST CREATIVE</span>
          <span>MOST Design</span>
          <span>MOST Valuable</span>
          IDEA</h2>
        <!-- End header content slider -->  
        <!-- Header btn area -->
        </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="index.html"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#contact">CONTACT</a></li>
			<li><a href="#about">ABOUT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->
       <div class="search-area">
          <form action="" method="post">
            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  
  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>Demo</span></h2>
              <span class="tittle-line"></span>
              <p>My assignment on PHP </p>  </div>
            <div class="welcome-content">
              
            </div>
          </div>
          <!-- End welcome area -->
  
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
	  <div class="col-md-8">
           <!--   <div class="col-md-12 col-sm-6 col-xs-12"> -->
          <div class="contact-right wow fadeInRight">
            <h2>Form Details</h2>
            <form action="" class="contact-form" method="post">
              <div class="form-group">                
                <input type="text" class="form-control" name="sname" placeholder="Name">
              </div>
			  <div class="form-group">                
                <input type="date" name="date" placeholder="Date" required>
              </div>              
              
              <div class="form-group">                
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
              </div>              
              
              <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-area">
            <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-left wow fadeInLeft">
                  <img src="assets/images/about-img.jpg" alt="img">
                 <!-- <a class="introduction-btn" href="#">Introduction</a>-->
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-right wow fadeInRight">
                  <div class="title-area">
                    <h2 class="tittle">About <span>Pranjal</span></h2>
                    <span class="tittle-line"></span>
                    <p><span>Name : Pranjal Rajendra Chaudhari
					Education : B.E in Computer Science & Engineering </span>
					<span> CGPA : 8.36</span> </p> 
				
                                       
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  
  
  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <a class="footer-logo" href="#"></a>              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Designed by <a rel="nofollow" href="http://www.markups.io/">Pranjal Chaudhari </a></p>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>