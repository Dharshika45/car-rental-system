<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE HTML>
<html lang="en">
<head>

<title>Car Rental Portal | Page details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1></h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li></li>
      </ul>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>

<section class="about_us section-padding">
  <div class="container">
    <div class="section-header text-center">
     <h2></h2>
<p></p>
  
  <div style="text-align: left;">
   
  </div>

    </div>

    <h5>1. How do I rent a car?</h5>
    <p>You can rent a car by registering an account, browsing available vehicles, and clicking the "Book Now" button. Follow the instructions to complete your booking.</p>

    <h5>2. What documents are required to rent a vehicle?</h5>
    <p>You will need a valid driving license, NIC or passport, and in some cases, proof of residence.</p>

    <h5>3. Can I cancel my booking?</h5>
    <p>Yes, you can cancel your booking from your user dashboard. Cancellation charges may apply based on our cancellation policy.</p>

    <h5>4. How do I make a payment?</h5>
    <p>We accept online payments via credit/debit cards, mobile banking, or cash upon pickup. You will receive confirmation once your payment is processed.</p>

    <h5>5. What happens if I return the car late?</h5>
    <p>Late returns may incur additional charges. Please review the rental agreement or contact support for more information.</p>

    <h5>6. How can I contact customer support?</h5>
    <p>You can email us at <strong>support@carrental.com</strong> or call our hotline: <strong>+94 71 234 5678</strong>.</p>

    <h5>7. Can I rate and review the vehicle or driver?</h5>
    <p>Yes, after your booking is complete, you’ll be prompted to rate your experience and leave a review through your dashboard.</p>

    <h5>8. Is there a mobile app?</h5>
    <p>Currently, our services are available via web. A mobile app is in development and will be launched soon.</p>

    <br>
     <strong>Address:</strong> <?php echo htmlentities($result->Address); ?><br>
    <strong>Email:</strong> support@carrental.com <br>
     <strong>Phone:</strong> 0772458465
  </div>
</section>


<!--Footer -->
<!-- <?php include('includes/footer.php');?> -->
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>
