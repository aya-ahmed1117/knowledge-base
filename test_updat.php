
 <?php
        //require_once("inc/config.inc");
        include("pages_home.php");
 
      $self = $_SESSION['id'];
      $role_id = $_SESSION['role_id'];
         $usernames="";
         $Customer_name="";
      if(isset($_POST['username'])){$usernames = $_POST['username'];}
      if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
      if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
        
        //$Units ="";
        $groups = "";
        $groups2 = "";
        $units="";
        $units2="";
        $project_Summary="";
      ?>

<head>
  <title>Daily report</title>
  <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/kpi_css.css">

</head>
<?php 
       $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id = 19  ");
        $index = sqlsrv_fetch_array($gogo);

      $project_Summary = $index['project_Summary'];
      $Customer_SELECT = $index['Customer_name'];
      $delivery_date = $index['delivery_date']->format('Y-m-d');
      $PO_Date = $index['PO_date']->format('Y-m-d');
      $number_of_links = $index['number_of_links'];
      $Total_RC_value = $index['Total_RC_value'];
      $EPM_unit = $index['EPM_unit'];
      $project_id = $index['project_id'];
      $Transmission =$index['Transmission_media'];

  $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id = 19  ");
       while($index = sqlsrv_fetch_array($gogo)){

     echo $PO_PDF_1 =$index['PO_PDF_1'];
     echo $PO_PDF_2 =$index['PO_PDF_2'];
     echo $PO_PDF_3 =$index['PO_PDF_3'];
     echo $Project_acceptance_1 =$index['Project_acceptance_1'];
     echo $Project_acceptance_2 =$index['Project_acceptance_2'];
     echo $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];

}

// //admin reject
// if(isset($_GET['update'])){
// $s_username = $_SESSION['username'];

//  $sqltime = date ("Y-m-d H:i:s");
//   $date = strtotime($sqltime);
//   $date = strtotime("+42 minute", $date);
//   $new_date= date('Y-m-d H:i:s', $date);

// if(isset($_FILES['PO_PDF_1'])){
//    $target_dir = "PO_file/";
// $imageFileType = strtolower(pathinfo($_FILES["PO_PDF_1"]["name"],PATHINFO_EXTENSION));
// $target_file = strtolower($target_dir.basename(strtotime("4 seconds").'.'.$imageFileType));
// $uploadOk = 1;

// }
// ///if($uploadOk == 1){
// $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
//     set[delivery_date] = '$delivery_date'
//       ,[PO_date] = '$PO_date'
//       ,[PO_PDF_1]= '$target_file'
//       ,[PO_PDF_2]= '$PO_PDF_2'
//       ,[PO_PDF_3]= '$PO_PDF_3'
//       -- ,[Project_acceptance_1] = '$Project_acceptance_1'
//       -- ,[Project_acceptance_2] = '$Project_acceptance_2'
//       -- ,[Project_acceptance_3] = '$Project_acceptance_3'
//       -- ,[Project_acceptance_4] = '$Project_acceptance_4'
//       -- ,[Project_acceptance_5] = '$Project_acceptance_5'
//       ,[Creation_time]='$new_date'
//       ,[Creator_username] ='$s_username'

//     where project_id = 19 ");
// echo 'fjfbjkkkk123';
// ////}
// }
?>
     <style>
 .grhdr {
    padding: 15px;
    height: 64px;background-color: #55608f;
    margin-top:0.1%;
  }

input ,.former{
    display: block;
    width: 20%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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

.input-group-addon {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #495057;
    text-align: center;
    background-color: #e9ecef;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
  }

  .card-header {
    padding: 0.5rem 1rem;
    margin-bottom: 0;
    background: linear-gradient(to bottom, #8f87ba 0%, #713391 100%);
     /*#8f87ba;#713391 ;*/
    border-bottom: 1px solid rgba(0,0,0,.125);
}
.btn-submit:hover{
    border: 2px solid lightyellow;
 }

 .clip:hover{
  color: green;
  transform: rotate(45deg);

  background-color: orange;
 }
textarea {
  width: 100%;
  min-height: 100px;
  background: url(http://i.imgur.com/2cOaJ.png) top -12px left / auto no-repeat, 
              linear-gradient(#F1F1F1 50%, #F9F9F9 50%) top left / 100% 32px;
  border: 1px solid #CCC;
  box-sizing: border-box;
  padding: 0 0 0 30px;
  resize: vertical;
  line-height: 16px;
  font-size: 13px;
}
.overlay:before {
  content:"";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: block;
  background: rgba(0, 0, 0, 0.2);
  position: fixed;
  z-index: 9;
}
.overlay .popup {
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: fixed;
  top: 0;
  left: 35%;
  padding: 25px;
  margin: 100px auto;
  z-index: 10;
  -webkit-transition: all 0.6s ease-in-out;
  -moz-transition: all 0.6s ease-in-out;
  transition: all 0.6s ease-in-out;
}
.overlay:target .popup {
    top: 100%;
    left: -50%;
}

@media screen and (max-width: 768px){
  .box{
    width: 70%;
  }
  .overlay .popup{
    width: 70%;
    left: 15%;
  }
}

.deleteMeetingClose {
    font-size: 1.5em;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 5px;
}
    </style>
   <?php

 

?>
   <div style="padding: 20px;" >

  <center>
        <img src="images/updating_Existing_Project">
<form  method="post">

          <div class="col-lg-7 floats">
            <div class="card">

  <div class="card-header">
    <img src="images/pngkey.com-white-button"width="60" height="60" style="float: left;
    vertical-align: sub; bottom: 0; top: 0;"/>
    <h5 style="float: left;font-size:20px;color:white;padding:15.9px;text-align: left;
    height: 40%;width: 40%;">Update existing projects</h5>
  </div>

      <div class="card-body card-block">

    <input type="text" id="project_id" name="project_id" placeholder="project_id" class="former form-control project_id"value='<?php echo $project_id; ?>' disabled  >
      
              <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              Customer Name</div>
              <input type="text" id="Customer_name" name="Customer_name" placeholder="Customer_name" class="former form-control Customer_name"value='<?php echo $Customer_name; ?>' disabled >
          </div>
      </div>
          <br>       
        
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              Project Name</div>
              <input type="text" id="project_name" name="project_name" placeholder="project_name" class="former form-control project_name"value='Branch 970776' disabled >
          </div>
      </div>
    <br>

     <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Delivery Date</div>
              <input type="date" id="Delivery Date" name="delivery_date" placeholder="Delivery Date" class="former form-control delivery_date" value="<?php echo $delivery_date ; ?>">
          </div>
      </div>

      <br>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;">PO Date</div>
                <input type="date" id="PO_date" name="PO_date" class="former form-control PO_date" value="<?php echo $PO_Date ; ?>">
            </div>
        </div>
   
            <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>PO(PDF)1</div>
   <input type="file" name="PO_PDF_1" class="former form-control" id="PO_PDF_1" /><?php echo $PO_PDF_1 ;?>
     <span id="msg" style="color:red"></span> <br/>
 <?php
if(($index["PO_PDF_1"] !== "PO_file/") && ($index["PO_PDF_1"] !== "null")){
echo '<a class="input-group-addon clip" href='.$index["PO_PDF_1"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>
  <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>PO(PDF)2</div>
   <input type="file" id="PO_PDF_2" name="PO_PDF_2" class="former form-control PO_file"
    value="<?php echo $index["PO_PDF_2"];?>"/>
     <?php echo $PO_PDF_2 ;?>
     <span id="msg" style="color:red"></span> <br/>
<?php
if(($index["PO_PDF_2"] !== "PO_file/") && ($index["PO_PDF_2"] !== "null")){
echo '<a class="input-group-addon clip" href='.$index["PO_PDF_2"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>
  <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>PO(PDF)3</div>
   <input type="file" id="PO_PDF_3" name="PO_PDF_3" class="former form-control PO_file"
    value="<?php echo $index["PO_PDF_3"];?>" />
     <?php echo $PO_PDF_3 ;?>
     <span id="msg" style="color:red"></span> <br/>
<?php
if(($index["PO_PDF_3"] !== "PO_file/") && ($index["PO_PDF_3"] !== "null")){
echo '<a class="input-group-addon clip" href='.$index["PO_PDF_3"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>
  <br>

      

<div style="clear: both;">
<?php 
   if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
  $selected = sqlsrv_query($con ,"SELECT * FROM [EPMKS].[dbo].[tbl_Projects_details]");

   while($output_query = sqlsrv_fetch_array($selected)){
   $test =$output_query["project_id"];
}
   '
<a type="button" width="1%" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9), 0 6px 22px 0 rgba(0,0,0,0.20);"class="btn btn btn-outline-success" href="?update='.$project_id.'">Admin approve</a>';
  ?>
 
    <button type="submit" class="btn btn-primary" name="submit" >save</button>
  
  <br>
</div>
  <br>

 </div>
                    </div>
                </div>

        </form>
 </center>
</div>

 <?php 
 $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id = 19  ");
        while($index = sqlsrv_fetch_array($gogo)){
 
      echo $PO_PDF_1 =$index['PO_PDF_1'];
      echo $PO_PDF_2 =$index['PO_PDF_2'];
      echo $PO_PDF_3 =$index['PO_PDF_3'];
      $Project_acceptance_1 =$index['Project_acceptance_1'];
      $Project_acceptance_2 =$index['Project_acceptance_2'];
      $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];
}
 
 if(isset($_POST['submit'])){


  if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}  
  if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
  if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
  if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
  if(isset($_POST['delivery_date'])){$delivery_date = $_POST['delivery_date'];}
  if(isset($_POST['PO_date'])){$PO_date = $_POST['PO_date'];}

//   if(isset($_FILES['PO_PDF_1'])){
//   $target_dir = "PO_file/";

// $image= $_FILES["PO_PDF_1"];
//  $UploadOk = 1;
// $imageFileType = strtolower(pathinfo($_FILES['PO_PDF_1']["name"],PATHINFO_EXTENSION));
// $target_file =  strtolower($target_dir.basename(strtotime("now").'.'.$imageFileType));
//  move_uploaded_file($_FILES["PO_PDF_1"]["tmp_name"], $target_file2);

// if(empty($target_file)){
//      $UploadOk = 0;
//     ///echo $location == $PO_PDF_1;
// }
//  if (move_uploaded_file($_FILES["PO_PDF_2"]["tmp_name"], $target_file2)) {
//      echo"The file ". htmlspecialchars( basename( $_FILES["PO_PDF_2"]["name"])). " has been uploaded.";}

// }
  if(isset($_FILES['PO_PDF_1']['name'])){
    $test = explode('.', $_FILES['PO_PDF_1']['name']);
    $extension1 = end($test);    
    $name = basename(strtotime("2 seconds").'.'.$extension1);

    $location1 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['PO_PDF_1']['tmp_name'], $location1);
    $uploadOk = 1;
    if($_FILES["PO_PDF_1"]["size"] == 0){
       $location1 =$index['PO_PDF_1'];
        $uploadOk = 0; 
    }}

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);
   $s_username = $_SESSION['username']; 
if($uploadOk == 1){
   $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,PO_date='$PO_date'
      ,[PO_PDF_1]= '$location1'
      ,[PO_PDF_2]= '$PO_PDF_2'
      ,[PO_PDF_3]='$PO_PDF_3'
      ,[Creator_username] ='$s_username'
      ,[Creation_time]='$new_date'

    where project_id = 19 ");
   echo "UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,PO_date='$PO_date'
      ,[PO_PDF_1]= '$location1'
      ,[PO_PDF_2]= '$PO_PDF_2'
      ,[PO_PDF_3]='$PO_PDF_3'
      ,[Creator_username] ='$s_username'
      ,[Creation_time]='$new_date'

    where project_id = 19 ";
}}

/*
if(isset($_FILES['PO_PDF_1'])){
   $target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_1"]["name"],PATHINFO_EXTENSION));
$target_file = strtolower($target_dir.basename(strtotime("4 seconds").'.'.$imageFileType));
$uploadOk = 1;
move_uploaded_file($_FILES["PO_PDF_1"]["tmp_name"], $target_file);

}
//PO_PDF_2
 if(isset($_FILES['PO_PDF_2']['name'])){
    $test = explode('.', $_FILES['PO_PDF_2']['name']);
    $extension2 = end($test);    
    $name = basename(strtotime("2 seconds").'.'.$extension2);

    $location2 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['PO_PDF_2']['tmp_name'], $location2);
    $uploadOk = 1;
    if($_FILES["PO_PDF_2"]["size"] == 0){
       // $location2 =$index['PO_PDF_2'];
        $uploadOk = 0; 
    }}
//PO_PDF_3
 if(isset($_FILES['PO_PDF_3']['name'])){
    $test = explode('.', $_FILES['PO_PDF_3']['name']);
    $extension3 = end($test);    
    $name = basename(strtotime("5 seconds").'.'.$extension3);

    $location3 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['PO_PDF_3']['tmp_name'], $location3);
    $uploadOk = 1;
        if($_FILES["PO_PDF_3"]["size"] == 0){
    $uploadOk = 0;
     //$location3 == $index['PO_PDF_3'];
        }
        }

        if($uploadOk == 1){
          echo 'ok<br>';
          $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_date'
      ,[PO_PDF_1]= '$target_file'
      ,[PO_PDF_2]= '$location2'
      ,[PO_PDF_3]= '$location3'
      -- ,[Project_acceptance_1] = '$Project_acceptance_1'
      -- ,[Project_acceptance_2] = '$Project_acceptance_2'
      -- ,[Project_acceptance_3] = '$Project_acceptance_3'
      -- ,[Project_acceptance_4] = '$Project_acceptance_4'
      -- ,[Project_acceptance_5] = '$Project_acceptance_5'
      ,[Creation_time]='$new_date'
      ,[Creator_username] ='$s_username'

    where project_id = 19 ");
        }

       
        if($uploadOk == 0){
          echo 'no data<br>';
          $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,PO_date='$PO_date'
     ,[PO_PDF_1]= '$PO_PDF_1'
      ,[PO_PDF_2]= '$PO_PDF_2'
      ,[PO_PDF_3]='$PO_PDF_3'
      ,[Creator_username] ='$s_username'
      ,[Creation_time]='$new_date'

    where project_id = 19 ");
        }
        

  $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_date'
      ,[PO_PDF_1]= '$target_file'
      ,[PO_PDF_2]= '$location2'
      ,[PO_PDF_3]= '$location3'
      -- ,[Project_acceptance_1] = '$Project_acceptance_1'
      -- ,[Project_acceptance_2] = '$Project_acceptance_2'
      -- ,[Project_acceptance_3] = '$Project_acceptance_3'
      -- ,[Project_acceptance_4] = '$Project_acceptance_4'
      -- ,[Project_acceptance_5] = '$Project_acceptance_5'
      ,[Creation_time]='$new_date'
      ,[Creator_username] ='$s_username'

    where project_id = 19 ");
    
// if(isset($_FILES['PO_PDF_2'])){
//    $target_dir = "PO_file/";
// $imageFileType = strtolower(pathinfo($_FILES["PO_PDF_2"]["name"],PATHINFO_EXTENSION));
// $target_file2 = strtolower($target_dir.basename(strtotime("10 seconds").'.'.$imageFileType));
// $UploadOk = true;

// if (empty($target_file2)) {
//   echo 'empty';
//   //$uploadOk = 0;
//   $UploadOk = false;
// }
//  if (move_uploaded_file($_FILES["PO_PDF_2"]["tmp_name"], $target_file2)) {
//      "The file ". htmlspecialchars( basename( $_FILES["PO_PDF_2"]["name"])). " has been uploaded.";}

//    }
//     //////////////////////////////////////////////// PO pdf3
// if(isset($_FILES['PO_PDF_3'])){
//    $target_dir = "PO_file/";
// $imageFileType = strtolower(pathinfo($_FILES["PO_PDF_3"]["name"],PATHINFO_EXTENSION));
// $target_file3  = strtolower($target_dir.basename(strtotime("3 seconds").'.'.$imageFileType));
//  //$uploadOk = 1;
// $UploadOk = true;


// if (empty($target_file3)) {
  
//   $UploadOk = false;
// }
//  if (move_uploaded_file($_FILES["PO_PDF_3"]["tmp_name"], $target_file3)) {
//      "The file ". htmlspecialchars( basename( $_FILES["PO_PDF_3"]["name"])). " has been uploaded.";}
//    }
  
 

// //if($UploadOk == true){
//     $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
//     set[delivery_date] = '$delivery_date'
//       ,PO_date='$PO_date'
//       ,[PO_PDF_1]= '$target_file'
//       ,[PO_PDF_2]= '$target_file2'
//       ,[PO_PDF_3]='$target_file3'
//       ,[Creator_username] ='$s_username'
//       ,[Creation_time]='$new_date'

//     where project_id = 19 ");
    
// }
   //if($UploadOk = false){

 //    $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
 //    set[delivery_date] = '$delivery_date'
 //      ,PO_date='$PO_date'
 //      ,[PO_PDF_1]= '$PO_PDF_1'
 //      ,[PO_PDF_2]= '$PO_PDF_2'
 //      ,[PO_PDF_3]='$PO_PDF_3'
 //      ,[Creator_username] ='$s_username'
 //      ,[Creation_time]='$new_date'

 //    where project_id = 19 ");

 //    echo  "UPDATE [EPMKS].[dbo].[tbl_Projects_details]
 //    set[delivery_date] = '$delivery_date'
 //      ,PO_date='$PO_date'
 //      ,[PO_PDF_1]= '$PO_PDF_1'
 //      ,[PO_PDF_2]= '$PO_PDF_2'
 //      ,[PO_PDF_3]='$PO_PDF_3'
 //      ,[Creator_username] ='$s_username'
 //      ,[Creation_time]='$new_date'

 //    where project_id = 19 ";

 // // }}*/

 ?>

                     
<br>
<br>
<br>
<br>
  <script type="text/javascript" src="jQuery/jquery-2.2.4.js"></script>
  <script type="text/javascript" src="jQuery/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
  <script src="js/table2excel.js" type="text/javascript"></script>
  <?php 
  include("footer.html");

?>
  
 