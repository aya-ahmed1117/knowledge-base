<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <link rel="icon" href="images/favicon">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="css/google_css.css" rel="stylesheet">
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets2/css/style.css" rel="stylesheet">
<?php 
require_once("inc/config.inc");

  if($_SESSION['username'] == ''){ header("location: index.php"); }
      if(isset($_GET['logout'])){ session_destroy(); header("location: index.php"); }
   $self = $_SESSION['id'];
   $role_id = $_SESSION['role_id'];
   $s_username = $_SESSION['username'];

  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 2000)) {
session_unset();     // unset $_SESSION variable for the run-time 
session_destroy();   // destroy session data in storage
header("location: index.php");
}
 $_SESSION['LAST_ACTIVITY'] = time();
?>
</head>
<body>


  <style type="text/css">
  section {
  padding: 95px 0 0 0;
  display: block;
  overflow: hidden;
}

body{
 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: auto;
 }
     .home {
    width: 100%;
    height: 60vh;
    background-image: url('images/Pipeline.jpg');
    background-position: center top;
    background-size:cover;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  position: relative;
  border-radius: 50%;
  top: -14px;
  right: 10%;
  font-weight: bold;
  font-size: 15px;
}

.notification:hover {
  background: blue;
}

footer {
  display: block;
}

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(images/eee) center no-repeat white;
        }

#myDIV {
  -webkit-animation: mymove 5s infinite;
  animation: mymove 4s infinite;
}

@keyframes mymove {
  60% {text-shadow:10px 10px 20px yellow;}
  50% {color: red;}
}

.header {
    transition: all 0.5s;
    z-index: 997;
    padding: 8px 0 0 0;
    background: linear-gradient(to left, #713391 1%, #383f88 60%);
        }
/*
 .footer{
    background-color: #FFF;
    margin-top: 1.33333rem;
    padding-bottom: 2.33333rem;
    padding-top: 2.33333rem;
        margin-top: 2.66667rem;
  background: linear-gradient(to left, #383f88 1%, #713391 60%);}*/

  </style>

  <div class="se-pre-con"></div>
<div>
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center">
        <img src="images/Untitled-removebg5" style="margin-left: -45%;">
      </a>

    <nav id="navbar" class="navbar">
      <ul>
<li class="dropdown"><a href="#">
  <span>Projects</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="ADD_newOrder.php">Add Project
        <i class="fa fa-sign-out" ></i></a></li>
        <li><a href="Update_Order.php">Update Project
        <i class="fa fa-sign-out" ></i></a></li>
        <?php 
        if(($_SESSION['username'] == 'maha.magdy')||($_SESSION['username'] == 'muhmoud.saleh') ||
            ($_SESSION['username'] == 'x_test') ){
          ?>
        <li><a href="delete_order.php">Delete Project
        <i class="fa fa-sign-out" ></i></a></li>
        <?php }
        ?>
        <li><a href="view_projects.php">View per Project
        <i class="fa fa-sign-out" ></i></a></li>
        <li><a href="History_view.php">All Projects
        <i class="fa fa-sign-out" ></i></a></li>    
        </ul>
      </li>
    
    <li class="dropdown"><a href="#"><span>Lesson Learned</span>
      <i class="bi bi-chevron-down"></i></a>
         <ul>     
          <li><a href="update_lesson.php">Update 
            <i class="fa fa-sign-out" ></i></a></li> 
          <li><a href="view_lesson.php">View Lesson Learned
            <i class="fa fa-sign-out" ></i></a></li>     
        </ul>
      </li>

      <li class="dropdown"><a >Inventory
           <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href=".php">...
              <i class="fa fa-sign-out" ></i></a></li>
              <li><a class="nav-link scrollto" href="Employee_info.php">...
              <i class="fa fa-sign-out" ></i></a></li> -->
            </ul>
      </li>


     <li class="dropdown"><a >Knowledge
        <i class="bi bi-chevron-down"></i></a>
           <ul>
               <!-- <li><a class="nav-link scrollto" href=".php">
              </a></li>  -->      
            </ul>
      </li>

      <li class="dropdown"><a href="">More Info
        <i class="bi bi-chevron-down"></i></a>
           <ul>
            <li><a href="change_password.php">Change password</a></li>
            </ul>
      </li>
  
        <li title="Unit:">
          <a href="#" style="font-size:10px;">
          <span  class="glyphicon glyphicon-user"></span>
          Login<samp>: <?php echo $_SESSION['username'] ;?></samp>
          </a>
            </li>
          <li><a href="?logout"><span style="font-size:10px;">
            <i class="fa fa-sign-out"></i>
          </span>log out</a></li>

        </ul>
      </li>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </li></ul> 
      </nav>

    </div>
  </header>
</div>
  <?php 
  if(($_SESSION['username'] == 'maha.magdy')||($_SESSION['username'] == 'muhmoud.saleh') ||
     ($_SESSION['username'] == 'x_test') ){
     $f_query= sqlsrv_query($con,"SELECT count( [project_id]) prokects
     
  FROM [EPMKS].[dbo].[tbl_Projects_details]");
    $f_output = sqlsrv_fetch_array($f_query);
    $project =$f_output['prokects'];
    $s_query= sqlsrv_query($con,"SELECT count([project_id]) number 
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where [Q1_What_was_done_well] is not null");
    $s_output = sqlsrv_fetch_array($s_query);
    $Lesson_L=$s_output['number'];
  }
else{
    $f_query= sqlsrv_query($con,"SELECT count( [project_id]) prokects
     
  FROM [EPMKS].[dbo].[tbl_Projects_details] where [Creator_username] = '$s_username'");
    $f_output = sqlsrv_fetch_array($f_query);
    $project =$f_output['prokects'];
    $s_query= sqlsrv_query($con,"SELECT count([project_id]) number 
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where [Q1_What_was_done_well] is not null and [Creator_username] = '$s_username'");
    $s_output = sqlsrv_fetch_array($s_query);
    $Lesson_L=$s_output['number'];
  }
  ?>
 
 <section >
       <!--div class="home" style="width: 100%;
    height:60vh;
    background-position: center top;
  background-size:cover;">
    </div-->
    </section>
<br>
<div style="padding:30px;">
     <div class="row">

<div class="col-md-3">
<div class="card">
    <div class="card-header">
        <strong class="card-title mb-3">Projects</strong>
    </div>
    <div class="card-body"style="background-color:#383f88;padding:12.5%;height:12.5%;">
        <div class="mx-auto d-block">
          <a href="History_view.php">
            <img class="mx-auto d-block" src="images/document"style="width:150px;">
            <h5 class="text-sm-center mt-2 mb-1" style="color: #fff;">Projects</h5>
            <div class="location text-sm-center" style="color: #fff;"><i class="fa fa-map-marker"></i> 
              <?php echo $project;?></div>
            </a>
        </div>
    </div>
</div>
</div>

  <div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Lesson Learned</strong>
        </div>
        <div class="card-body"style="background-color:#bc6fb5;padding:12.5%;height:12.5%;">
            <div class="mx-auto d-block">
              <a href="view_lesson.php">
                <img class="mx-auto d-block" src="images/ClipartKey_1441140" style="width:160px;">
                <h5 class="text-sm-center mt-2 mb-1"style="color:#fff;">Lesson Learned</h5>
                <div class="location text-sm-center"style="color:#fff;"><i class="fa fa-map-marker"></i><?php echo $Lesson_L;?></div>
                </a>
            </div>
        </div>
    </div>
  </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Inventory Items</strong>
            </div>
            <div class="card-body"style="background-color:#8f87ba;padding:12.5%;height:12.5%;">
                <div class="mx-auto d-block">
                    <img class="mx-auto d-block" src="images/ClipartKey" style="width:183px;">
                    <h5 class="text-sm-center mt-2 mb-1"style="color: #fff;">Inventory</h5>
                    <div class="location text-sm-center"style="color:#fff;"><i class="fa fa-map-marker"></i>
                      <?php echo '0'?></div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Knowledge base topic</strong>
            </div>
            <div class="card-body"style="background-color:#713391;padding:12.5%;height:12.5%;">
                <div class="mx-auto d-block">
                    <img class="mx-auto d-block" src="images/pngkeygyj" style="width:120px;" >
                    <h5 class="text-sm-center mt-2 mb-1"style="color: #fff;">Knowledge</h5>
                    <div class="location text-sm-center"style="color: #fff;"><i class="fa fa-map-marker"></i> <?php echo '0'?></div>
                </div>
                
            </div>
        </div>
    </div>
  
  </div>
</div>
<script src="jQuery/jquery-3.6.0.js"></script>
<script type="text/javascript" src="jQuery/jquery-2.2.4.js"></script>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script-->
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script!-->
<script type="text/javascript">
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>


<?php
 include ("footer.html");
 ?>
