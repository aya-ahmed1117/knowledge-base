
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
  <title>View projects</title>
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
    float: left;
    /*text-align: center;*/
    background-color: #e9ecef;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
  }
  .PO{
    float: left;
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
.clip{
    width: 100px;
    transition: width 2s;
}
 .clip:hover{
  color: black;
  width: 300px;
  background: orange;
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

.active, .collapsible:hover {
  background-color: #555;

}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
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
    </style>
   <div style="padding: 20px;" >

  <center>
        <img src="images/per_project">
<form method="post">
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
        }else{
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
        $gogo = sqlsrv_query( $con ,"SELECT *  ,iif ([number_of_links]  = 0 , '0 %',
      cast(round(((cast( [delivered_links] as float) /cast([number_of_links] as float)) * 100),2) as nvarchar) + ' %' )[per]
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name like N'%$Customer_name' and  project_name like N'%$project' ");
        $index = sqlsrv_fetch_array($gogo);

      $project_Summary = $index['project_Summary'];
      $per = $index['per'];
      $Customer_SELECT = $index['Customer_name'];
      if($index["delivery_date"]->format('Y-m-d') == '1900-01-01'){
         $delivery_date='';}
        else{
      $delivery_date = $index['delivery_date']->format('Y-m-d');}
      if($index["PO_date"]->format('Y-m-d') == '1900-01-01'){
         $PO_Date='';}
        else{
      $PO_Date = $index['PO_date']->format('Y-m-d');}
      $number_of_links = $index['number_of_links'];
      $Total_RC_value = $index['Total_RC_value'];//.' L.E';
      $EPM_unit = $index['EPM_unit'];
      $Transmission =$index['Transmission_media'];

      $Hw_type=$index['Hw_type'];
      $Down_Payment=$index['Down_Payment'];
      $Down_Payment_Date=$index['Down_Payment_Date']->format('Y-m-d');
      $Total_NRC_value=$index['Total_NRC_value'];
      $project_id = $index['project_id'];  
      $delivered_links = $index['delivered_links'];

            $string = $Total_RC_value;
            $cur = number_format($string,0);
            $Total_RC =  "$cur EGP";

?>

          <div class="col-lg-7 floats">
            <div class="card">

  <div class="card-header">
    <img src="images/pngkey.com-white-button"width="60" height="60" style="float: left;
    vertical-align: sub; bottom: 0; top: 0;"/>
    <h5 style="float: left;font-size:20px;color:white;padding:15.9px;text-align: left;
    height: 40%;width: 40%;">View projects</h5>
  </div>

      <div class="card-body card-block">
<!--           <form  method="post" class="">
 -->
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
              <input type="text" id="project_name" name="project_name" class="former form-control project_name"value='<?php echo $project; ?>' disabled >
          </div>
      </div>
    <br>

     <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Delivery Date</div>
              <input  type="date" id="Delivery Date" name="delivery_date" class="former form-control delivery_date" value="<?php echo $delivery_date ; ?>"disabled value="<?php echo $delivery_date ; ?>">
          </div>
      </div>

      <br>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;">PO Date</div>
                <input type="date" id="PO Date" name="PO_date" class="former form-control PO_date"disabled value="<?php echo $PO_Date ; ?>">
            </div>
        </div>
         <br>

 
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              Delivered links</div>
              <input type="text" id="delivered_links" name="project_name" class="former form-control delivered_links"value='<?php echo $delivered_links; ?>' disabled >
          </div>
      </div>
      <br>

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Number of links</div>
            <input type="num" id="Number of links" name="number_of_links" placeholder="Number of links" class="former form-control number_of_links" value="<?php echo $number_of_links ; ?>"disabled>
        </div>
    </div>
    <br>
 <script src="jQuery/jquery2.min.js"></script>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;">
                  <i class="fa fa-asterisk"></i>Percentage</div>
      <input id="rate" class="former form-control"disabled value=" <?php echo $per; ?>">
     
    </div>
        </div>

    <br>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon " style="float:left;">
          <i class="fa fa-asterisk"></i>
        Total RC (L.E)</div>
    <input type="number" id="Total_RC_value" name="Total_RC_value" 
    placeholder="<?php  echo $Total_RC; ?>"class="former form-control Total_RC_value"disabled />
    </div>
</div>

          
   <br>       
    
   <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
          Project Summary</div>
  <textarea rows="5" cols="40" class="project_Summary"id="project_Summary"
               name="project_Summary" disabled><?php echo $project_Summary ; ?></textarea>
              </div>
          </div>
       <br>

      <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
            EPM Unit</div>
             <select name="EPM_unit" required class="former form-control EPM_unit" id="EPM_unit" disabled
             placeholger="EPM_unit" value="<?php echo $EPM_unit ; ?>">
                <option value="<?php echo $EPM_unit; ?>"  selected><?php echo $EPM_unit; ?></option>
                <option value="KAM">KAM</option>
                <option value="BS">BS</option>
                <option value="Fiber and prewimax">Fiber & prewimax</option>
                <option value="large and MegaProject">large & Mega Project</option>
              </select>
        </div>
    </div>
    <br>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon " style="float:left;">
          <i class="fa fa-asterisk"></i>
        Trasmission media</div>
    <input  id="Transmission_media" name="Transmission_media" 
    placeholder="<?php  echo $Transmission; ?>"class="former form-control Transmission_media"disabled />
    </div>
</div>

          <br>

       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              HW type</div>
              <input type="text" id="Hw_type" name="Hw_type" value="<?php echo $Hw_type; ?>" class="former form-control Hw_type"disabled>
          </div>
      </div>
   <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Down Payment (EGP)</div>
              <input type="number" id="Down_Payment" name="Down_Payment" 
              value="<?php echo $Down_Payment; ?>" min="0"   step="1" class="former form-control Down_Payment"disabled>
          </div>
      </div>

   <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i>Down-Payment Date</div>
              <input type="date" id="Down_Payment_Date" name="Down_Payment_Date"class="former form-control Down_Payment_Date"disabled value="<?php echo $Down_Payment_Date; ?>">
          </div>
      </div>
 
    <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Total NRC LE</div>
              <input type="number" id="Total_NRC_value" name="Total_NRC_value" 
              value="<?php echo $Total_NRC_value; ?>"disabled min="0"   step="1" class="former form-control Total_NRC_value">
          </div>
      </div>
      <br>

    <button type="button" class="collapsible" id="company_name">PO Documents</button>
    <div class="content">
      <br>
     
  <div class="form-group">
    <div class="input-group ">
        <div class="input-group-addon col-md-4 PO"><i class="fa fa-asterisk"style="float:left;"></i>PO(PDF)1</div>
<?php
if(($index["PO_PDF_1"] !== "PO_file/") && ($index["PO_PDF_1"] !== "null")){
echo '<a class="input-group-addon clip " href='.$index["PO_PDF_1"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>    
       </div>
     </div>
  <br>
<div class="form-group">
    <div class="input-group ">
        <div class="input-group-addon col-md-4 PO"><i class="fa fa-asterisk"style="float:left;"></i>Presales_solution</div>
<?php
if(($index["Presales_solution"] !== "PO_file/") && ($index["Presales_solution"] !== "null")){
echo '<a class="input-group-addon clip " href='.$index["Presales_solution"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>    
       </div>
     </div>
  <br>
<div class="form-group">
    <div class="input-group ">
        <div class="input-group-addon col-md-4 PO" ><i class="fa fa-asterisk"style="float:left;"></i>Marketing_approval</div>
<?php
if(($index["Marketing_approval"] !== "PO_file/") && ($index["Marketing_approval"] !== "null")){
echo '<a class="input-group-addon clip " href='.$index["Marketing_approval"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>    
       </div>
     </div>
  <br>

  <div class="form-group">
    <div class="input-group ">
        <div class="input-group-addon col-md-4 PO" style="float:left;"><i class="fa fa-asterisk"style="float:left;"></i>Extra_approvals</div>
<?php
if(($index["Extra_approvals"] !== "PO_file/") && ($index["Extra_approvals"] !== "null")){
echo '<a class="input-group-addon clip " href='.$index["Extra_approvals"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>    
       </div>
     </div>
  <br>

   <div class="form-group">
    <div class="input-group ">
        <div class="input-group-addon col-md-4 PO" style="float:left;"><i class="fa fa-asterisk"style="float:left;"></i>HW_LOI</div>
<?php
if(($index["HW_LOI"] !== "PO_file/") && ($index["HW_LOI"] !== "null")){
echo '<a class="input-group-addon clip" href='.$index["HW_LOI"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a>';}?>    
       </div>
     </div>
  <br>
 </div>
          <br>
          <br>          
    <button type="button" class="collapsible" id="company_name">Project acceptance</button>
    <div class="content">
      <br>
        <div class="form-group">
            <div class="input-group" >
                <div class="input-group-addon col-md-4" style="float:left;"><i class="fa fa-asterisk"></i>Acceptance(PDF)1</div><?php
    if(($index["Project_acceptance_1"] !== "Project_ACC/") && ($index["Project_acceptance_1"] !== "null")){
    echo'<a class="input-group-addon clip" href='.$index["Project_acceptance_1"].' download>
    <i class="fa fa-paperclip" style="font-size:20px;margin:0;" ></i>
    </a>';}?>
              </div>
          </div>
    <br>
        <div class="form-group">
            <div class="input-group" >
                <div class="input-group-addon col-md-4" style="float:left;"><i class="fa fa-asterisk"></i>Acceptance(PDF)2</div><?php
    if(($index["Project_acceptance_2"] !== "Project_ACC/") && ($index["Project_acceptance_2"] !== "null")){
    echo'<a class="input-group-addon clip" href='.$index["Project_acceptance_2"].' download>
    <i class="fa fa-paperclip" style="font-size:20px;margin:0;" ></i>
    </a>';}?>
              </div>
          </div>
    <br>
    <div class="form-group">
        <div class="input-group" >
            <div class="input-group-addon col-md-4" style="float:left;"><i class="fa fa-asterisk"></i>Acceptance(PDF)3</div><?php
if(($index["Project_acceptance_3"] !== "Project_ACC/") && ($index["Project_acceptance_3"] !== "null")){
echo'<a class="input-group-addon clip" href='.$index["Project_acceptance_3"].' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;" ></i>
</a>';}?>
          </div>
      </div>
<br>
    <div class="form-group">
        <div class="input-group" >
            <div class="input-group-addon col-md-4" style="float:left;"><i class="fa fa-asterisk"></i>Acceptance(PDF)4</div><?php
if(($index["Project_acceptance_4"] !== "Project_ACC/") && ($index["Project_acceptance_4"] !== "null")){
echo'<a class="input-group-addon clip" href='.$index["Project_acceptance_4"].' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;" ></i>
</a>';}?>
          </div>
      </div>
<br>
    <div class="form-group">
        <div class="input-group" >
            <div class="input-group-addon col-md-4" style="float:left;"><i class="fa fa-asterisk"></i>Acceptance(PDF)5</div><?php
if(($index["Project_acceptance_5"] !== "Project_ACC/") && ($index["Project_acceptance_5"] !== "null")){
echo'<a class="input-group-addon clip" href='.$index["Project_acceptance_5"].' download>
<i class="fa fa-paperclip" style="font-size:20px;margin:0;" ></i>
</a>';}?>
          </div>
      </div>
</div><!-- collapsible-->
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

<script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
<script src="js/table2excel.js" type="text/javascript"></script>
<script type="text/javascript">
        function Export() {
            $("#tblCustomers").table2excel({
                filename: "Reports.xls"
            });
        }
    </script>
    <script type="text/javascript">
  function myfunc(){
    var start = new Date($('#adate').val());
    var end = new Date($('#bdate').val());

// end - start returns difference in milliseconds 
var diff = new Date(end - start);

// get days
var days = diff/1000/60/60/24;
days = days+1
$('#countDays').val(Math.round(days));
    alert(Math.round(days));
}

</script>

</div>
<br>
<br>
<br>
<br>

<?php 
  include("footer.html");

?>
  
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