<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- projects.html  29 Nov 2019 03:33:45 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Construction & Building HTML Template">
<meta name="author" content="AlexaTheme">
<title>Project</title>
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
<h2>Specialized projects</h2>
<p>Arn Group</p>
</div>
</div>
</section>
<section class="projects-section padding">
<div class="container">
<div class="row">
<?php
include("dbconfig.php");			
				$display = "SELECT projects.Id as PId,projects.Img_URL_1,projects.Name as PName,category.Name from projects 
				inner join category on projects.Category_Id = category.Id ";
				$query = mysqli_query($connection,$display);
                $count = mysqli_num_rows($query);
               
				if($count > 0)
				{	
					while($row = mysqli_fetch_array($query))
					{

?>
<div class="col-lg-4 col-sm-6 padding-15">
<div class="project-item">
<img src="Admin_Pages/images/<?php echo $row["Img_URL_1"]?>" alt="projects" style="height: 450px;">
<div class="overlay"></div>
<a href="#" class="view-icon ajax-popup-link"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="#" class="category"><?php echo $row["Name"]?></a>
<h3><a href="project-single.php?btn_id=<?php echo $row["PId"]?>" class="tittle"><?php echo $row["PName"]?></a></h3>
</div>
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

<!-- projects.html  29 Nov 2019 03:33:52 GMT -->
</html>