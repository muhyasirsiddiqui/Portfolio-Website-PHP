<?php
session_start();
if(!isset($_SESSION["un"]))
{
	header("Location:Login.php");
	
}
include("config.php");

?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us Form</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i></i>
                </button>
                <a class="navbar-brand" href="Dashboard.php"><label style="color:#FFF;"><?php echo $_SESSION["un"] ?></label></a>
                <a class="navbar-brand hidden" href="./"><img src="img/letter_c_PNG26.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="ContactUs.php"> <i class="menu-icon fa fa-dashboard"></i>ContactUs </a>
                    </li>
                    <li class="active">
                        <a href="ServiceForm.php"> <i class="menu-icon fa fa-dashboard"></i>Service </a>
                    </li>
                    <li class="active">
                        <a href="Dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Projects </a>
                    </li>
                    <h3 class="menu-title">All Tables</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Add Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="Add_Items.php">Add Item</a></li>
                             <li><i class="fa fa-puzzle-piece"></i><a href="Add_Category.php">Add Category</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="Add_Slider.php">Add Slider Image</a></li>
                             <li><i class="fa fa-puzzle-piece"></i><a href="Add_Home_Pro.php">Add Home Product</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Show Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="Show_Items.php">Show Cake Table</a></li>
                           <li><i class="fa fa-table"></i><a href="Show_Category_Table.php">Show Category Table</a></li>
                             <li><i class="fa fa-table"></i><a href="Show_User.php">Show User Table</a></li>
                             <li><i class="fa fa-table"></i><a href="Show_Slider.php">Show Slider Table</a></li>
                                <li><i class="fa fa-table"></i><a href="Show_home_pro.php">Show Product Table</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="img/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="img/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="img/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="img/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="img/icon_copy_copy.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
  <!----------****Edite Action Start****------------->
                     <?php
					 $value = "Record Add";
					 $color = "btn btn-success";
					 if(isset($_GET["edit_id"]))
					 {
						 $visile="visible"	;  
						 $value = "Record Update";
						 $color = "btn btn-primary";
						 $editcakeid = $_GET["edit_id"];
						 $query = mysqli_query($connection,"select * from contactmsgs where Id='".$editcakeid."'");
						 $tbl_row = mysqli_fetch_array($query);						
						 $message = $tbl_row["Msg"];
						 $email = $tbl_row["Email"];
						 $number = $tbl_row["Number"];
						 $subject = $tbl_row["Subject"];
						 $created_on = $tbl_row["Created_On"];
					
					}
					  if(!isset($_GET["edit_id"]))
					  {
					$visile="hidden"	;  
					$value = "Record Insert";
					 $color = "btn btn-success";
					 	  
						 }
					  
					  
					 
					 ?>
<!----------****Edite Action End****------------->



     <!--- Update Action -->

<?php
if(isset($_POST["btn_insert"]))
  {
    
    /*$Update_msg = $_POST["mot"];
    $Update_email = $_POST["ser"];
    $Update_number = $_POST["rep"];
    $Update_subject = $_POST["gra"];
    $Update_createdon = $_POST["dname"];*/
    
  
  if(!empty($_POST["hideid"]))
  {

    $Update_id = $_POST["hideid"];
    $Update_query = mysqli_query($connection,"update contactmsgs set Is_Responded=1
where Id= '".$Update_id."'");
    if($Update_query)
    {
      $result = "Record Updated";
      
    }
    else
      {
          $result = "Record Not Updated";       
      }
    
    
    }
 
}
?>
<!--- Update Action End -->
       

            

					<div class="col-lg-12">
                    <div class="card">
                    <form method="post" action="ContactUsForm.php" enctype="multipart/form-data">
                      <div class="card-header"><strong>Product</strong><small> Form</small></div>
                      <div class="card-body card-block">
                       <input class="form-control" type="hidden" name="hideid" value="<?php echo @$editcakeid?>"/>  
                        <div class="form-group">
                        <label class=" form-control-label"><b>Message</b></label>
                        <input type="text" name="c_name" class="form-control" value="<?php echo @$message?>">
                        </div>
                        
                        <div class="form-group">
                        <label class=" form-control-label"><b>Email</b></label>
                      <input type="text" name="c_flavour" class="form-control"  value="<?php echo @$email?>">
                        </div>
                        
                        
						<div class="form-group"><label class=" form-control-label"><b>Number</b></label>
                         <input type="text" name="c_flavour" class="form-control"  value="<?php echo @$number?>">
                          </div>
						        <div class="form-group"><label class=" form-control-label"><b>Subject</b></label>
                         <textarea rows="6" name="c_des" class="form-control" style="height:100px;"><?php echo @$subject?>
                        
                        </textarea>    
                          </div> 
                                <div class="form-group">
                                    <label class=" form-control-label"><b>Created On</b></label>
                           <input type="text" name="c_flavour" class="form-control"  value="<?php echo @$created_on?>">   
                          </div>
                          <div class="form-group">
                                  
                        <input type="submit" name="btn_insert"  value="Marks as Read" class="<?php echo @$color ?>" />    
                          </div>
                          <div class="form-group">
                          <label class=" form-control-label"><?php if(isset($_POST["btn_insert"])) echo $result ?></label>
                        
                          </div>            
                        </div>
                        </form>
                    </div>
                  </div>


				<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#cakeimg')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>          




    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
