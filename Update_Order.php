
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
  <title>Update Project</title>
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

/****************/
.collapsible {
  background-color: #383f88;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}
#company_name {
        position: relative;
    }

        #company_name:hover:after {
            content: '\f01a';
            font: normal normal normal 25px/1 FontAwesome;
            padding-left:2%;
            position: absolute;
        }

.active, .collapsible:hover {
  background-color: #555;
  content: "\f01a";
}

  
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
    </style>

   <div style="padding: 20px;" >

  <center>
        <img src="images/updating_Existing_Project">
<form  method="post" enctype="multipart/form-data">
    <div class="col col-md-5">
       <div class="input-group">
  <span class="input-group-text" id="basic-addon1 Customer">Customer name</span>
   <select name="Customer_name" id="Customer_name" class="form-control Cust_name" placeholder="Select Customer name..."  value='<?php if($Customer_name != '') echo $Customer_name;
 if(isset($_POST['Customer_name'])) echo $_POST['Customer_name']; ?>' >
      <option value="0" action="none" style="color:red;" selected disabled="true">Select Customer name...
                </option>
                 <?php
  if(($_SESSION['username'] == 'maha.magdy') ||
   ($_SESSION['username'] == 'muhmoud.saleh') || ($_SESSION['username'] == 'x_test') ){
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
               FROM [EPMKS].[dbo].[tbl_Projects_details]  where [Creator_username] ='$s_username' ");
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
        if(empty($_POST["project_name"])){
              //echo 'data is not found';
              echo '<script>alert("Please Select Project name to proceed");   </script>';
            }
            
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
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name  like N'%$Customer_name' and  project_name like N'%$project' ");
        $index = sqlsrv_fetch_array($gogo);

      $project_Summary = $index['project_Summary'];
      $Customer_SELECT = $index['Customer_name'];
      $delivery_date = $index['delivery_date']->format('Y-m-d');
      $PO_Date = $index['PO_date']->format('Y-m-d');
      $number_of_links = $index['number_of_links'];
      $delivered_links = $index['delivered_links'];
      $Total_RC_value = $index['Total_RC_value'];
      $EPM_unit = $index['EPM_unit'];
      $project_id = $index['project_id'];
      $Transmission =$index['Transmission_media'];
      $Hw_type=$index['Hw_type'];
      $Down_Payment=$index['Down_Payment'];
      $Down_Payment_Date=$index['Down_Payment_Date']->format('Y-m-d');
      $Total_NRC_value=$index['Total_NRC_value'];

  $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name like N'%$Customer_name' and  project_name =N'$project' ");
       while($index = sqlsrv_fetch_array($gogo)){

      $PO_PDF_1 =$index['PO_PDF_1'];
      $Presales_solution =$index['Presales_solution'];
      $Marketing_approval =$index['Marketing_approval'];
      $Extra_approvals =$index['Extra_approvals'];
      $HW_LOI =$index['HW_LOI'];

      $Project_acceptance_1 =$index['Project_acceptance_1'];
      $Project_acceptance_2 =$index['Project_acceptance_2'];
      $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];

}
      

?>
 <div class="col-lg-7 floats">
   <div class="card">

  <div class="card-header">
    <img src="images/pngkey.com-white-button"width="60" height="60" style="float: left;
    vertical-align: sub; bottom: 0; top: 0;"/>
    <h5 style="float: left;font-size:20px;color:white;padding:15.9px;text-align: left;
    height: 40%;width: 40%;">Update existing projects</h5>
  </div>

      <div class="card-body card-block">
<!--   <form  method="post" class=""> -->
    <input type="text" id="project_id" name="project_id" placeholder="project_id" class="former form-control project_id"value='<?php echo $project_id; ?>' disabled style="display: none;" >
      
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
              <div class="input-group-addon" style="float:left;">Delivery Date</div>
              <input type="date" id="Delivery Date" name="delivery_date" placeholder="Delivery Date" class="former form-control delivery_date" value="<?php echo $delivery_date ; ?>">
          </div>
      </div>

      <br>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;">PO Date</div>
                <input type="date" id="PO Date" name="PO_date" placeholder="PO Date" class="former form-control  PO_date" value="<?php echo $PO_Date ; ?>">
            </div>
        </div>
        <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Delivered links</div>
              <input type="number" id="delivered_links" autocomplete="off" name="delivered_links" placeholder="delivered links" class="former form-control delivered_links"
              autocomplete="off" value="<?php echo $delivered_links ; ?>">
          </div>
      </div>
      <br>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Number of links</div>
                <input type="number" id="number_of_links" name="number_of_links" placeholder="Number of links" class="former form-control number_of_links" autocomplete="off" value="<?php echo $number_of_links ; ?>">
            </div>
        </div>

         <br>
 <script src="jQuery/jquery2.min.js"></script>

<!--     <script type="text/javascript">
    $(function() {
      $("#delivered_links, #number_of_links").change(function() { // input on change
        var result = parseFloat(parseInt($("#delivered_links").val())*100 ) /
         parseInt($("#number_of_links").val(),10) + '%';
       $('#rate').val(result||'');
      })
    });
    </script>  -->
    <script type="text/javascript">
    $(function() {
      $("#delivered_links, #number_of_links").change(function() { // input on change
        var result = (parseFloat(parseInt($("#delivered_links").val())*100 ) 
          /  parseInt($("#number_of_links").val(),10)).toFixed(1) + '%';
        
       $('#rate').val(result||''); 
      })
    });
    </script>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;">
                  <i class="fa fa-asterisk"></i>percentage</div>
      <input id="rate" class="former form-control"disabled>
    </div>
        </div>

    <br>      
     
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" style="float:left;">
              <i class="fa fa-asterisk"></i>
            Total RC  (L.E)</div>
        <input type="number" autocomplete="off" id="Project Summary" name="Total_RC_value" 
        placeholder="Total RC value (L.E)" min="0"  step="1" class="former form-control Total_RC_value" value="<?php echo $Total_RC_value; ?>">
        </div>
    </div>

<br>
<div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;"><i class="fa fa-user"></i>
          Trasmission media</div>
       <select name="Transmission_media" class="former form-control Transmission_media" id="Transmission_media" 
         placeholger="Transmission_media" value="<?php echo $Transmission; ?>">
            <option value="<?php echo $Transmission; ?>"  selected>
              <?php echo $Transmission; ?></option>
              <option value="4G">4G</option>
              <option value="Fiber">Fiber</option>
              <option value="Local_Loop">Local Loop</option>
              <option value="Local loop & 4G">Local loop & 4G</option>
              <option value="Wimax">Wimax</option>
            </select>
      </div>
  </div>
            <br>
     
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              HW type</div>
              <input type="text" id="Hw_type" name="Hw_type" value="<?php echo $Hw_type; ?>" class="former form-control Hw_type">
          </div>
      </div>
   <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Down Payment (EGP)</div>
              <input type="number" id="Down_Payment" name="Down_Payment" 
              value="<?php echo $Down_Payment; ?>" min="0"   step="1" class="former form-control Down_Payment">
          </div>
      </div>

   <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i>Down-Payment Date</div>
              <input type="date" id="Down_Payment_Date" name="Down_Payment_Date"class="former form-control Down_Payment_Date" value="<?php echo $Down_Payment_Date; ?>">
          </div>
      </div>
 
    <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Total NRC LE</div>
              <input type="number" id="Total_NRC_value" name="Total_NRC_value" 
              value="<?php echo $Total_NRC_value; ?>" min="0"   step="1" class="former form-control Total_NRC_value">
          </div>
      </div>
      <br>
            <button type="button" class="collapsible" id="company_name">PO Documents</button>
    <div class="content">
      <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>PO(PDF)1</div>
            
   <input type="file" id="PO_PDF_1" name="PO_PDF_1" class="former form-control PO_PDF_1"
     value="<?php echo $PO_PDF_1 ;?>" /><?php //echo $PO_PDF_1 ;?>
     <span id="msg" style="color:red"></span> <br/>

<?php
if(($PO_PDF_1 !== "PO_file/") && ($PO_PDF_1 !== "null")){
echo '<a class="input-group-addon clip" href='.$PO_PDF_1.' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>
  <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>Presales solution</div>
   <input type="file" id="Presales_solution" name="Presales_solution" class="former form-control Presales_solution"
    value="<?php echo $Presales_solution ;?>"/>
     <?php// echo $Presales_solution ;?>
     <span id="msg" style="color:red"></span> <br/>
  
<?php
if(($Presales_solution !== "PO_file/") && ($Presales_solution!== "null")){
echo '<a class="input-group-addon clip" href='.$Presales_solution.' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>
     
  <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>Marketing approval</div>
   <input type="file" id="Marketing_approval" name="Marketing_approval" class="former form-control Marketing_approval"
     value="<?php echo $Marketing_approval ;?>" />
     <?php //echo $Marketing_approval ;?>
     <span id="msg" style="color:red"></span> <br/>
<?php
if(($Marketing_approval !== "PO_file/") && ($Marketing_approval !== "null")){
echo '<a class="input-group-addon clip" href='.$Marketing_approval.' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>
  <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>Presales solution</div>
   <input type="file" id="Extra_approvals" name="Extra_approvals" class="former form-control Extra_approvals"
    value="<?php echo $Extra_approvals ;?>"/>
     <?php //echo $Presales_solution ;?>
     <span id="msg" style="color:red"></span> <br/>
<?php
if(($Extra_approvals !== "PO_file/") && ($Extra_approvals !== "null")){
echo '<a class="input-group-addon clip" href='.$Extra_approvals.' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>

   <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">
            <i class="fa fa-asterisk"></i>HW LOI</div>
   <input type="file" id="HW_LOI" name="HW_LOI" class="former form-control HW_LOI"
    value="<?php echo $HW_LOI ;?>"/>
     <?php //echo $HW_LOI ;?>
     <span id="msg" style="color:red"></span> <br/>
<?php
if(($HW_LOI !== "PO_file/") && ($HW_LOI !== "null")){
echo '<a class="input-group-addon clip" href='.$HW_LOI.' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>
            </div>
          </div>
     
  <br>

</div><!-- collapsible-->
  <br>
  <br>

<button type="button" class="collapsible" id="company_name">Project acceptance</button>
    <div class="content">
  <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Acceptance(PDF)1</div>
<input type="file" id="Project_acceptance_1" name="Project_acceptance_1" class="form-control" value="<?php echo $Project_acceptance_1 ;?>" /><?php //echo $Project_acceptance_1 ;?>
      <span id="msg2" style="color:red"></span>  <br/>
<?php
if(($Project_acceptance_1 !== "Project_ACC/") && ($Project_acceptance_1 !== "null")){
echo'<a class="input-group-addon clip" href='.$Project_acceptance_1.' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i>
</a>';}?>
          </div>
      </div>
   <br>
    
     <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Acceptance(PDF)2</div>
<input type="file" id="Project_acceptance_2" name="Project_acceptance_2" class="form-control" value="<?php echo $Project_acceptance_2 ;?>" /><?php // echo $Project_acceptance_2 ;?>
      <span id="msg2" style="color:red"></span>  <br/>
<?php
if(($Project_acceptance_2 !== "Project_ACC/") && ($Project_acceptance_2 !== "null")){
echo'<a class="input-group-addon clip" href='.$Project_acceptance_2.' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i>
</a>';}?>
          </div>
      </div>
   <br> 
   <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Acceptance(PDF)3</div>
<input type="file" id="Project_acceptance_3" name="Project_acceptance_3" class="form-control"value="<?php echo $Project_acceptance_3 ;?>" /><?php //echo $Project_acceptance_3 ;?>
      <span id="msg2" style="color:red"></span>  <br/>
<?php
if(($Project_acceptance_3 !== "Project_ACC/") && ($Project_acceptance_3 !== "null")){
echo'<a class="input-group-addon clip" href='.$Project_acceptance_3.' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i>
</a>';}?>
          </div>
      </div>
   <br> 
    <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Acceptance(PDF)4</div>
<input type="file" id="Project_acceptance_4" name="Project_acceptance_4" class="form-control" value="<?php echo $Project_acceptance_4 ;?>"  /><?php //echo $Project_acceptance_4 ;?>
      <span id="msg2" style="color:red"></span>  <br/>
<?php
if(($Project_acceptance_4 !== "Project_ACC/") && ($Project_acceptance_4 !== "null")){
echo'<a class="input-group-addon clip" href='.$Project_acceptance_4.' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i>
</a>';}?>
          </div>
      </div>
   <br> 
     <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Acceptance(PDF)5</div>
<input type="file" id="Project_acceptance_5" name="Project_acceptance_5" class="form-control" value="<?php echo $Project_acceptance_5 ;?>"  /><?php //echo $Project_acceptance_5 ;?>
      <span id="msg2" style="color:red"></span>  <br/>
<?php
if(($Project_acceptance_5 !== "Project_ACC/") && ($Project_acceptance_5 !== "null")){
echo'<a class="input-group-addon clip" href='.$Project_acceptance_5.' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i>
</a>';}?>
          </div>
      </div>
   <br> 

    </div><!-- collapsible-->
  <br>
  <br>
   <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
          Project Summary</div>
  <textarea rows="5" cols="40" class="project_Summary"id="project_Summary"
               name="project_Summary"><?php echo $project_Summary ; ?></textarea>
      </div>
  </div>
       <br>

  <div class="form-group">
    <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-user"></i>
        EPM Unit</div>
         <select name="EPM_unit" required class="former form-control EPM_unit" id="EPM_unit" 
         placeholger="EPM_unit" value="<?php echo $EPM_unit ; ?>">
            <option value="<?php echo $EPM_unit; ?>"  selected>
              <?php echo $EPM_unit; ?></option>
            <option value="KAM">KAM</option>
            <option value="BS">BS</option>
            <option value="Fiber and prewimax">Fiber & prewimax</option>
            <option value="large and MegaProject">large & Mega Project</option>
          </select>
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
   echo'<style type="text/css">
  .btn-primary:hover{
  width: 50%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;background: linear-gradient(to left, #383f88 1%, #713391 60%);
}
</style>
   <button type="button" class="btn btn-primary submit" style="width: 50%;padding: 10px;font-size: 15px;"
value="'.$project_id.'"name="save" id="submit"
data-type="'.$project_id.'" data-id="'.$project_id.'">Update</button>';
  ?>
</div>
</div>
</div>
</div>
                      </div>
                    </div>
                </div>
        </form>
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
    var project =$('.project_Summary').val();

    var post_id ='Customer_name='+Units_ID+'&project_Summary='+project;

          $.ajax({
            type: "POST",
            url: "connect.php",
            data: post_id,
            cache: false,
            success: function(cities){
             // console.log(cities);
            $("#chkveg").html(cities);
            
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
      var delivery_date = $('.delivery_date').val();
      var PO_Date= $('.PO_date').val();
      var number_of_links= $('.number_of_links').val();
      var Total_RC_value = $('.Total_RC_value').val();
      var EPM_unit= $('.EPM_unit').val();
      var Transmission= $('.Transmission_media').val();

      var Hw_type = $('.Hw_type').val();
      var Down_Payment = $('.Down_Payment').val();
      var Down_Payment_Date = $('.Down_Payment_Date').val();
      var Total_NRC_value = $('.Total_NRC_value').val();

      //var PO_PDF_1= $('.PO_PDF_1').val();
      var submit = document.getElementById('submit');


 var propert = document.getElementById('PO_PDF_1').files[0];
        /// console.log(propert);
 var propert2 = document.getElementById('Presales_solution').files[0];

 var propert3 = document.getElementById('Marketing_approval').files[0];
 var propert4 = document.getElementById('Extra_approvals').files[0];
 var propert5 = document.getElementById('HW_LOI').files[0];

//         ///***************************Project_acceptance_1
 var property2 = document.getElementById('Project_acceptance_1').files[0];
//     var image_name2 = property2.name;
//     var image_extension2 = image_name2.split('.').pop().toLowerCase();

//     if(jQuery.inArray(image_extension2,['gif','jpg','jpeg','pdf','png']) == -1){
//       alert("Invalid image file");
//     }
//     // Project_acceptance_2
 var project2 = document.getElementById('Project_acceptance_2').files[0];
//     var image_name2 = project2.name;
//     var image_extension2 = image_name2.split('.').pop().toLowerCase();

//     if(jQuery.inArray(image_extension2,['gif','jpg','jpeg','pdf','png']) == -1){
//       alert("Invalid image file");
//     }
var project3 = document.getElementById('Project_acceptance_3').files[0];
var project4 = document.getElementById('Project_acceptance_4').files[0];
var project5 = document.getElementById('Project_acceptance_5').files[0];


        var formData = new FormData();
      formData.append("PO_PDF_1",propert);
      formData.append("Presales_solution",propert2);
      formData.append("Marketing_approval",propert3);
      formData.append("Extra_approvals",propert4);
      formData.append("HW_LOI",propert5);

      formData.append("Project_acceptance_1",property2);
      formData.append("Project_acceptance_2",project2);
      formData.append("Project_acceptance_3",project3);
      formData.append("Project_acceptance_4",project4);
      formData.append("Project_acceptance_5",project5);

      formData.append("delivery_date",delivery_date);
      formData.append("PO_date",PO_Date);
      formData.append("project_Summary",project);
      formData.append("Customer_name",Customer_name);
      formData.append("project_name",project_name);
      formData.append("number_of_links",number_of_links);
      formData.append("Total_RC_value",Total_RC_value);
      formData.append("EPM_unit",EPM_unit);
      formData.append("Transmission_media",Transmission);

      formData.append("Hw_type",Hw_type);
      formData.append("Down_Payment",Down_Payment);
      formData.append("Down_Payment_Date",Down_Payment_Date);
      formData.append("Total_NRC_value",Total_NRC_value);

      formData.append("project_id",$(this).val());


  // var dataString ='project_Summary='+project+'&Customer_name='+Customer_name+'&project_name='+project_name+'&delivery_date='+delivery_date+'&PO_date='+PO_Date+'&EPM_unit='+EPM_unit+'&Total_RC_value='+Total_RC_value+'&number_of_links='+number_of_links+'&project_id='+project_id;

//url: 'last_update.php',ajax_update
   $.ajax({
    url: 'update_upload.php',
    type: 'POST',
    data:formData,  
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function(data){

    $('#submit').html('Loading...');
    $('#submit').prop('disabled', true);
    //$('.note').val("");
          },
    success: function(data){ 
    swal({ title: "Updated ... :)", icon: "success",});

       //$('#msg').html('Done');
      // $('#msg2').html('Done');
    setTimeout(function(){
           //window.location.href=window.location.href;
           window.location.href=window.location.href 
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
  <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
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
  
 