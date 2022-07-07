<!DOCTYPE html>
<?php
     ob_start();
     require_once("inc/config.inc");
 ?>

<html>
<head>
    <title>Workforce Login</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="referrer" content="strict-origin" />
  <link rel="icon" href="images/favicon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Merriweather&display=swap" rel="stylesheet">
<link rel="stylesheet"type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/loginphp.css">
<link href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link rel="stylesheet" type="text/css" href="css/calend_css.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/mainlog.css">
<script type="text/javascript" src="jQuery/jquery-3.6.0.js"></script>
<script type="text/javascript" src="jQuery/package/dist/sweetalert.min.js"></script>


<style>
* {
  box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    height: 100%;
    background-image: url("images/kkuyf_yitf");
    -webkit-backdrop-filter: blur(6.5px);
  backdrop-filter: blur(6.5px);
    background-repeat: no-repeat;
    background-size: cover;
}

/* Style the header */
header {
 /* background: linear-gradient(to left, #383f88 1%, #713391 60%);*/
  background-image: url("images/newlogin");
  padding: 30px;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Create two columns/boxes that floats next to each other 
nav {
  float: left;
  width: 30%;
  height: 300px; 
  background: #ccc;
  padding: 20px;
}
*/
/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 30px;
  width: 40%;
}

section{
    display: table;
    clear: both;
    width: 90%;
    margin: 0 auto;
    position: relative;
}
footer {
  background-color: #777;
  padding: 50px;
  text-align: center;
  color: white;
  height: auto;
  bottom: 0;
  top: 0;

}

/*@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}*/


.left_titel{
    float: right;
    height: auto;
    color: #999;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
 .btn-submit:hover{
    border: 3px solid lightyellow;
 }
 input[type=text]:focus,
 input[type=password]:focus {
    background-color: #fff7e3;
    outline: none;
    transition: 20ms box-shadow ease-in-out;
}
input[type=text],
input[type=password] {
    background-color: lightgray;
  
}


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 10; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /*Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */



}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
 position: static;
 z-index: 10; 
}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.swal-footer {
    text-align: right;
    padding-top: 13px;
    margin-top: 13px;
    padding: 13px 16px;
    border-radius: inherit;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.swal-button {
    background-color: #7cd1f9;
    color: #fff;
    border: none;
    box-shadow: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 14px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
}
.swal-button:hover{
  background-color: orange;

}
.former:focus{
    display: block;
    outline: 0;
    border-color: #383f88;
    box-shadow: 0 0 10px #383f88;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1pxsolid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
</head>
<body>

<header>
  <div >

<p href="home.php">
<img src="images/icon-removebg-preview" >
      </p>

<h6 class="left_titel">© Copyrights 2021 Enterprice Workforce Management</h6>
    </div>
</header>

 <br>
    <div class="signup-form" style="padding: 50px;" >
  
    <form  method="post" class="">
       <span >

    <label>
        <h4  style="font-weight: bold;color: #383f88;font-size: 20px;"> <i class="gg-calendar-next"></i> &nbsp;
        Member Login</h4></label>
</span>
        <br>
         <div class="row">

    <div class="col-md-6">
      <div class="input-group">
        <label >
            <span class="input-group-text"  style="background:#713391; color:white;"> 
              <i class="fa fa-user"></i>&nbsp; Enter Username</span>
        </label>
       <input type="text" id="username" class="former" name="username" placeholder="Username" >
        
      </div>
    </div>

    <div class="col-md-6">
        <div class="input-group">
      <label> 
        <span class="input-group-text" style="background:#713391; color:white;">
            <i class="gg-password"></i> &nbsp; Enter Password</span></label>
        <input type="password" class="former" name="password" id="password" placeholder="Password">
    </div>
     </div>
      </div>

 
<br>
         <center>
<button type="submit" name="submit" value="Save"  class="btn-submit" id="submit" 
style="width: 30%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;background: linear-gradient(to left, #383f88 1%, #713391 60%);">
  Login
</button>
<br>
<br>

<!--div >
<input type="reset"  style="background-color:#ed7f15;width: 30%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;" class="btn"  value="Reset"></input>
  </div-->
</center>


  
<?php
  $DBhost = "10.109.18.18";
  // $DBuser = "epmweb";
  // $DBpass = "TEData@b12345678";
  // $DBname = "EPMKS";
  // $CharacterSet = "UTF-8";
  
  $connectionInfo = array( "Database"=>"EPMKS" , "UID"=> "epmweb" ,"CharacterSet" => "UTF-8", "PWD"=> "12345678");
  $con = sqlsrv_connect($DBhost, $connectionInfo);

  ?>


       <?php 
        if(isset($_POST['username'])){ $username = $_POST['username']; }
        if(isset($_POST['password'])){ $password = $_POST['password']; }

        if (isset($_POST['submit'])) {
            if ($password !== "" && $username !== "") {
            $check_user_sql = sqlsrv_query( $con ,"SELECT * FROM [EPMKS].[dbo].tbl_login WHERE username = '$username'" );
            $count_results  = 1 ;
              while( $extract_data2 = sqlsrv_fetch_array( $check_user_sql , SQLSRV_FETCH_ASSOC))
              {

                $extract_data  = (object) $extract_data2 ;
                
                  if ($count_results !== 0) {
                      if ($password == $extract_data->password) {
                      $user_id                     = $extract_data->id; 
                      $usern                       = $extract_data->username; 
                      $pass                        = $extract_data->password; 
                      $role_id                   = $extract_data->role_id; 
                if (!isset($_SESSION)) {
                  session_start();
                }        

                      $_SESSION['id']              = $user_id; 
                      $_SESSION['username']        = $usern;
                      $_SESSION['password']        = $pass;
                      $_SESSION['role_id']         = $role_id;
                 header('location: home.php');
                      } if ($password == '123'){
                        header('location: change_password.php');
                      }
         else { echo '<script>
    swal({
    title: "wrong password.",
  icon: "error",
  })
     </script>'; }

                  } else { echo '<script>
    swal({
    title: "wrong username.",
  icon: "error",
  })
     </script>'; }
              }

            } else { echo '
            <script>
    swal({
    title: "username & password field must not be empty.",
  icon: "error",
  })
     </script>'; }
        }
  
        ?>
</div>

 </form>

</div>

 <script>
//form
// var myIN = document.getElementById("myIN");

// // submit button
// var btn = document.getElementById("submit");


// // Get the <closed> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
// var closeddd = document.getElementsByClassName("closed")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//   myIN.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   myIN.style.display = "none";
// }

// // When the user clicks on <closeddd> (OK), close the modal
// closeddd.onclick = function() {
//   myIN.style.display = "none";
// }


// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }


</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>
<script src="vendor/bootstrap/js/popper.js" type="20f1e2767bf4d7db5bfe8337-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="20f1e2767bf4d7db5bfe8337-text/javascript"></script>
<script src="vendor/select2/select2.min.js" type="20f1e2767bf4d7db5bfe8337-text/javascript"></script>
<script src="js/mainlog.js"></script>

</body>
</html>