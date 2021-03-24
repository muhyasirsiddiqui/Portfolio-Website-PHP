<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- project-single.html  29 Nov 2019 03:33:52 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Construction & Building HTML Template">
<meta name="author" content="AlexaTheme">
<title>View Projects</title>
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

<section class="page-header padding">
<div class="container">

<div class="page-content text-center">
<h2>Arn Services</h2>
<p></p>
</div>
</div>
</section>
<section class="project-single-section padding">
<div class="container">
<div class="row project-single-wrap align-items-center">

  <?php 	
				   
				include("dbconfig.php");
				$s_name = $_GET["btn_id"];		
				$display = "SELECT * from services 
				 where Id='".$s_name."'";
				$query = mysqli_query($connection,$display);
				$count = mysqli_num_rows($query);
				if($count > 0)
				{
					while($row = mysqli_fetch_array($query))
					{
			?>	
	

<div class="col-md-6 sm-padding">

<div id="project-single-carousel" class="project-single-carousel box-shadow owl-carousel">
<div class="single-carousel">
<img src="Admin_Pages/images/<?php echo $row["Img_URL_1"]?>" alt="img" style="height: 650px;">
</div>
<div class="single-carousel">
<img src="Admin_Pages/images/<?php echo $row["Img_URL_2"]?>" alt="img" style="height: 650px;">
</div>
</div>
</div>
<div class="col-md-6 sm-padding">
<div class="project-single-content">
<h2><?php echo $row["Name"]?></h2>
<p><?php echo $row["Description"]?></p>
<ul class="project-details">
<li><span>Summary</span><p><?php echo $row["Summary"]?></p></li>
</ul>
</div>
</div>
<?php
}
}
?>
</div>
 </div>
</section>
<div class="sponsor-section bg-grey">
<div class="dots"></div>
<div class="container">
<div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
<div class="sponsor-item">
<img src="img/sponsor1.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor2.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor3.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor4.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor5.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor6.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor7.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor8.png" alt="sponsor">
</div>
</div>
</div>
</div>

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

<!-- project-single.html  29 Nov 2019 03:34:14 GMT -->
</html>