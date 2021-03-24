<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- contact.html  29 Nov 2019 03:34:47 GMT -->
<head>

<?php
include("dbconfig.php");
if(isset($_POST["btn_insert"]))
  {
    
   // echo "i am here";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["message"];
    
    $Update_query = mysqli_query($connection,"insert into contactmsgs (Msg,Email,Number,Subject,Created_On,Is_Responded)
values ('".$msg."','".$email."','021','".$name."','".date("Y-m-d")."',0 )");
    if($Update_query)
    {
      $result = "Thank you for contacting us. Our representative will reach you soon!";
    }
    else
      {
          $result = "There was a problem in your query. Please contact system administrator.";       
      }
    
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Arn Group">
<meta name="author" content="AlexaTheme">
<title>Arn | Contact Us</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<link rel="stylesheet" href="css/fontawesome.min.css">

<link rel="stylesheet" href="css/themify-icons.css">

<link rel="stylesheet" href="css/elegant-line-icons.css">

<link rel="stylesheet" href="css/elegant-font-icons.css">

<link rel="stylesheet" href="css/flaticon.css">

<link rel="stylesheet" href="css/animate.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/slick.css">

<link rel="stylesheet" href="css/slider.css">

<link rel="stylesheet" href="css/odometer.min.css">

<link rel="stylesheet" href="css/venobox/venobox.css">

<link rel="stylesheet" href="css/owl.carousel.css">

<link rel="stylesheet" href="css/main.css">

<link rel="stylesheet" href="css/responsive.css">
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="site-preloader-wrap">
<div class="spinner"></div>
</div>
<?php 
include('header.php');
?>
<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Dynamic%20Layers&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com/"></a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div> -->
<section class="contact-section bg-grey padding">
<div class="dots"></div>
<div class="container">
<div class="contact-wrap d-flex align-items-center row">
<div class="col-md-6 padding-15">
<div class="contact-info">
<h2>Get in touch with us & <br>send us message today!</h2>
<p>We're an employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
<h3>Wadi kabir , <br>Muscat </h3>
<h4><span>Email:</span> nadirtrading@arngroup.net <br> <span>Phone:</span> 225 564 062 <br> 
<span></span> </h4>
</div>
</div>
<div class="col-md-6 padding-15">
<div class="contact-form">
<form action="contactus.php" method="POST" enctype="multipart/form-data" id="ajax_form" class="form-horizontal">
<div class="form-group colum-row row">
<div class="col-sm-6">
<input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
</div>
<div class="col-sm-6">
<input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<!-- <button id="submit" class="default-btn" type="submit">Send Message</button> -->
<input type="submit" name="btn_insert"  id="submit" class="default-btn" value="Send Message"/>
</div>
</div>
<?php if(isset($_POST["btn_insert"])) { ?>
<div class="alert alert-success" role="alert">
<?php
echo $result; }?>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<?php 
include('footer.php');
?>

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.12.4.min.js"></script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/vendor/tether.min.js"></script>

<script src="js/vendor/headroom.min.js"></script>

<script src="js/vendor/owl.carousel.min.js"></script>

<script src="js/vendor/smooth-scroll.min.js"></script>

<script src="js/vendor/venobox.min.js"></script>

<script src="js/vendor/jquery.ajaxchimp.min.js"></script>

<script src="js/vendor/slick.min.js"></script>

<script src="js/vendor/waypoints.min.js"></script>

<script src="js/vendor/odometer.min.js"></script>

<script src="js/vendor/wow.min.js"></script>

<script src="js/main.js"></script>
</body>

<!-- contact.html  29 Nov 2019 03:34:47 GMT -->
</html>