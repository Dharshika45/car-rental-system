<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<style>
  .green-text {
  color: green;
  font-size: 20px; /* அல்லது உங்களுக்கு வேண்டிய அளவு */
  font-weight: bold;
  font-family: 'Arial', sans-serif; /* தேவையான எழுத்துரு */
}
.tamil-text{
  font-size: 20px; /* அல்லது உங்களுக்கு வேண்டிய அளவு */
  font-weight: bold;
  font-family: 'Arial', sans-serif; /* தேவையான எழுத்துரு */
}


</style>

<header>
 
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php if (isset($_SESSION['login']) && strlen($_SESSION['login']) > 0): ?>
  <?php 
    $email = $_SESSION['login'];
    $sql = "SELECT FullName FROM tblusers WHERE EmailId=:email";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            echo htmlentities($result->FullName);
        }
    }
  ?>
   <i class="fa fa-angle-down" aria-hidden="true"></i>
<?php endif; ?>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Review</a></li>
          <li><a href="my-testimonials.php">My Review</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="search.php" method="post" id="header-search-form">
            <input type="text" placeholder="Search..." name="searchdata" class="form-control" required="true">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a></a> </li>
         <li class="logo" style="font-size: 20px; font-weight: bold; font-family: 'Arial', sans-serif;"> 
  <a href="index.php"><span class="tamil-text">காර්</span> <span class="green-text">Rent</span></a> 
</li>
          <li><a href="index.php">Home</a></li> 	 
          <li><a href="page.php?type=aboutus">About Us</a></li>
          <li><a href="car-listing.php">Car Listing</a></li>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>

        </ul>
      </div>
    </div>


     <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"></div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
    

            <div class="social-follow">
            
    </div>
<?php if (!isset($_SESSION['login']) || strlen($_SESSION['login']) == 0) { ?>
    <div class="login_btn">
      <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a>
    </div>
<?php } else { 
    echo "Welcome To காර් Rent";
} ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  
  </nav>
  <!-- Navigation end --> 
  
</header>