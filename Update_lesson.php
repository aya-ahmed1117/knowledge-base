
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
  <title>Lesson Learned</title>
  <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/kpi_css.css">

</head>

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

    </style>
   <div style="padding: 20px;" id="page">

  <center>
        <img src="images/Updatinglesson_Learned">
<form  method="post" id="logBoard">
    <div class="col col-md-5">
       <div class="input-group">
  <span class="input-group-text" id="basic-addon1 Customer">Customer name</span>
   <select name="Customer_name" id="Customer_name" class="form-control Cust_name" placeholder="Select Customer name..."  value='<?php if($Customer_name != '') echo $Customer_name;
 if(isset($_POST['Customer_name'])) echo $_POST['Customer_name']; ?>' >
      <option value="0" action="none" style="color:red;" selected disabled="true">Select Customer name...
                </option>
                 <?php
   if(($_SESSION['username'] == 'maha.magdy')||($_SESSION['username'] == 'muhmoud.saleh') ||
     ($_SESSION['username'] == 'x_test') ){
          $gogo = sqlsrv_query( $con ,"SELECT DISTINCT  [Customer_name]
               FROM [EPMKS].[dbo].[tbl_Projects_details] ");
                  while($index = sqlsrv_fetch_array($gogo)){
                  $rows = '<option ';
                  $rows .= $index['Customer_name'] ? "selected" : "";;
                  $rows .= 'value="'.$index['Customer_name'].'">'.$index['Customer_name'].'</option>';
              echo $rows;

             $Customer_name =$index['Customer_name'];
                    
            }
        }
        else{
            $gogo = sqlsrv_query( $con ,"SELECT DISTINCT  [Customer_name]
               FROM [EPMKS].[dbo].[tbl_Projects_details] where [Creator_username] ='$s_username'");
                  while($index = sqlsrv_fetch_array($gogo)){
                  $rows = '<option ';
                  $rows .= $index['Customer_name'] ? "selected" : "";;
                  $rows .= 'value="'.$index['Customer_name'].'">'.$index['Customer_name'].'</option>';
              echo $rows;

             $Customer_name =$index['Customer_name'];
                    
            }
        }

              ?> 
</select>


<br>
    <div class="input-group-btn">
      <button class="btn btn-primary" type='submit' name='submit' value="Get data">
    Get data</button></div>
        </div>
    </div>
    <br>
    <p id="chkveg" name="project_Summary[]" ></p>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <?php 
    if(isset($_POST['submit'])){
        // empty
        if(empty($_POST["project_name"])){
              //echo 'data is not found';
              echo '<script>alert("Please Select Project name to proceed");   </script>';
            }
            // not empty
   if(!empty($_POST["project_name"])){
       $projects_NAMES = $_POST["project_name"];
       foreach($projects_NAMES as $project){
       }
   } 

    if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
    if(isset($_POST['project_name[]'])){$project_name = $_POST['project_name[]'];}

  ?>

<?php
  if(!empty($_POST["project_name"])){
       $projects_NAMES = $_POST["project_name"];
       foreach($projects_NAMES as $project){
       }
          $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name =N'$Customer_name' and  project_name =N'$project' ");
        $index = sqlsrv_fetch_array($gogo);

            $project_Summary = $index['project_Summary'];
            $Customer_SELECT = $index['Customer_name'];
            //$delivery_date = $index['delivery_date']->format('Y-m-d');
            $PO_Date = $index['PO_date'];
            $number_of_links = $index['number_of_links'];
            $Total_RC_value = $index['Total_RC_value'];
            $EPM_unit = $index['EPM_unit'];
            $project_id = $index['project_id'];
            $Q1_Whats = $index['Q1_What_was_done_well'];
            $Q2_Whats = $index['Q2_What_wasnt_done_well'];
            $Q3_Actions = $index['Q3_Actions_taken'];
            $Q4_else = $index['Q4_What_else_could_be_improved'];


?>

</form>

          <div class="col-lg-7 floats">
            <div class="card">

  <div class="card-header">
    <img src="images/pngkey.com-white-button"width="60" height="60" style="float: left;
    vertical-align: sub; bottom: 0; top: 0;"/>
    <h5 style="float: left;font-size:20px;color:white;padding:15.9px;text-align: left;
    height: 40%;width: 40%;"></h5>
  </div>

      <div class="card-body card-block">

    <input type="text" id="project_id" name="project_id" placeholder="project_id" class="former form-control project_id"value='<?php echo $project_id; ?>' disabled style="display: none;" >
        <input type="text" id="project_Summary" name="project_Summary" placeholder="project_Summary" class="former form-control project_Summary"value='<?php echo $project_Summary; ?>' disabled style="display: none;" >
      
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
              <input type="text" id="project_name" name="project_name" placeholder="project_name" class="former form-control project_name"value='<?php echo $project; ?>' disabled >
          </div>
      </div>
    <br>

 <div class="form-group">
    <div class="input-group">
        <div class="input-group-addon" style="float:left;">Q1_What_was_done_well</div>
        <!-- <input type="text" id="Q1_What_was_done_well" name="Q1_What_was_done_well" placeholder="write your answer..." class="former form-control Q1"value="<?php echo $Q1_Whats ; ?>"> -->
    <textarea rows="5" cols="40" class="Q1"id="Q1_What_was_done_well" 
    name="Q1_What_was_done_well"><?php echo $Q1_Whats; ?></textarea>
            </div>
        </div>
        <br>

  <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" style="float:left;">Q2 What wasn’t done well?</div>
             <textarea rows="5"cols="40"class="Q2"id="Q2_What_wasnt_done_well"name="Q2_What_wasnt_done_well" 
  ><?php echo $Q2_Whats ; ?></textarea>
        </div>
    </div>

        <br>

      <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;">Q3 Actions taken?</div>
  <!--       <input type="text" id="Q3_Actions_taken" name="Q3_Actions_taken" placeholder="write your answer" class="former form-control Q3"value="<?php echo $Q3_Actions ; ?>"> --> 
 <textarea rows="5" cols="40"id="Q3_Actions_taken" class="Q3" name="Q3_Actions_taken"><?php echo $Q3_Actions ; ?></textarea>
 
            </div>
        </div>

            <br>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon" style="float:left;">Q4 What else could be improved?</div>
     
        <textarea rows="5" cols="40" id="Q4_What_else_could_be_improved" 
        name="Q4_What_else_could_be_improved" class="Q4"><?php echo $Q4_else ; ?></textarea>
    </div>
</div>  

<br>
<div style="clear: both; ">
   <?php 
   if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
  $selected = sqlsrv_query($con ,"SELECT * FROM [EPMKS].[dbo].[tbl_Projects_details]");

   while($output_query = sqlsrv_fetch_array($selected)){
   $test =$output_query["project_id"];
        }
   echo'<button type="button" class="btn btn-primary submit" style="width: 40%;" 
value="'.$project_id.'" name="save"
data-type="'.$project_id.'" data-id="'.$project_id.' data-project_id="'.$project_id.'">Update</button>';
  ?>
</div>

               
                
                        </div>
                    </div>
                </div>
 </center>
         <?php 
             }
              }
                ?>

  <script type="text/javascript" src="jQuery/jquery-2.2.4.js"></script>
  <script type="text/javascript" src="jQuery/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$("#Customer_name").change(function(){
var Units_ID=$(this).val();
var pro_id = $(this).data('id');
var project =$('.project_Summary').val();

var post_id ='Customer_name='+Units_ID+'&project_Summary='+project+'&project_id='+pro_id;

      $.ajax({
        type: "POST",
        url: "connect.php",
        data: post_id,
        cache: false,
        success: function(cities){
         console.log(post_id);

        $("#chkveg").html(cities);

    }, error: function(err){
      
          console.log(err);
        }
  });
return false;
 
  });
 });


</script>

<script>
$(document).ready(function(){
  $('.submit').click('.project_id',function(){
      var project_id = $(this).val();
      var project =$('.project_Summary').val();
      var Customer_name = $('.Customer_name').val();
      var project_name = $('.project_name').val();
      var Q1_What = $('.Q1').val();
      var Q2_What = $('.Q2').val();
      var Q3_What = $('.Q3').val();
      var Q4_What = $('.Q4').val();

var dataString ='project_Summary='+project+'&Customer_name='+Customer_name+'&project_name='+project_name+'&Q1_What_was_done_well='+Q1_What+'&Q2_What_wasnt_done_well='+Q2_What+'&Q3_Actions_taken='+Q3_What+'&Q4_What_else_could_be_improved='+Q4_What+'&project_id='+project_id

event.preventDefault();
   $.ajax({
    url: 'ajax_update_lesson.php',
    type: 'POST',
    data:dataString,  
    cache: false,
    success: function(test){ 
        console.log(dataString);    
   swal({ title: "Updated ... :)", icon: "success",});
   setTimeout(function(){// wait for 5 secs(2)
          // location.reload();
           window.location.href=window.location.href // then reload the page.(3)
      }, 1900); 
   
    }, error: function(err){
      swal({ title: "Error", icon: "warning",});

          console.log(err);
        }
  });
return false;
 
  });
 });
  </script>
<script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
<script src="js/table2excel.js" type="text/javascript"></script>
</div>
<br>
<br>
<br>
<br>

<?php 
  include("footer.html");

?>
 