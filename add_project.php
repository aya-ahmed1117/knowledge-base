
<?php 
include("pages_home.php");
include("index.py");


?>
<title>Add New Project</title>

<script type="text/javascript" src="jQuery/package/dist/sweetalert.min.js"></script>
</head>
<style> 

tr:nth-child(even) {
  background-color: lightgray;
}
/*
.overlay:before {
  content:"";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: block;
  background: rgba(0, 0, 0, 0.6);
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
}*/
	 .grhdr {
    padding: 15px;
    height: 64px;background-color: #55608f;
    margin-top:0.1%;
  }
input ,.former{
    display: block;
    width: 50%;
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

body {
  margin: 0;
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

<center>
 

  <img src="images/AddingNewproject">  
 
          <div class="col-md-6 floats" id="floats">
            <div class="card">
                <div class="card-header">
                
    <img src="images/pngkey.com-white-button"width="60" height="60" style="float: left;
   vertical-align: sub; bottom: 0; top: 0;"/>
   <h5 style="float: left;font-size:20px;color:white;padding:15.9px;text-align: left;
     height: 40%;width: 80%;">Please Fill The below data</h5>
    

</div>
  <div class="card-body card-block">
      <form method="post"  enctype="multipart/form-data">

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" style="float:left;"><i class="fa fa-user"></i>
                        Customer name</div>

<input list="browser" type="search" name="Customer_name" placeholder="Select Customer_name..."class="former form-control" required /> 

<datalist id="browser" name="Customer_name">

     <?php
     //
$checks = sqlsrv_query( $con ,"SELECT  [AccountNumber],[AccountName]
        FROM [EPMKS].[dbo].[tbl_customers] order by AccountName");
  while($outputs = sqlsrv_fetch_array($checks)){
        $rows = '<option ';
        $rows .= $outputs['AccountName'] ? "selected" : " ";;
        $rows .= ' value="'.$outputs['AccountName'].'">'.$outputs['AccountName'].'</option>';
  
  echo $rows;
}
  ?>
 </datalist> 

     <!--      <select name="Customer_name" required class="former form-control" id="">
              <option value="0"  selected>Select..</option>
                               <?php
      $customs = sqlsrv_query( $con ,"SELECT  [AccountNumber],[AccountName]
                  FROM [EPMKS].[dbo].[tbl_customers] order by AccountName");
            while($index_cust = sqlsrv_fetch_array($customs)){
            $rows = '<option ';
            $rows .= $index_cust['AccountName'] ? "selected" : "";;
            $rows .= 'value="'.$index_cust['AccountName'].'">'.$index_cust['AccountName'].'</option>';
             echo $rows;
                 }

            ?> 
                         </select> -->
                      </div>
                  </div>
         <br>       
        
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              Project name</div>
              <input type="text" id="project_name" name="project_name" placeholder="project_name" class="former form-control" required="true">
          </div>
      </div>
  
   <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i>Delivery Date</div>
              <input type="date" id="Delivery Date" name="delivery_date" placeholder="Delivery Date" class="former form-control">
          </div>
      </div>
 
    <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i> PO Date</div>
              <input type="date" id="PO Date" name="PO_Date" placeholder="PO Date" class="former form-control">
          </div>
      </div>
      <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Number of links</div>
              <input type="number" id="Number of links" name="number_of_links" placeholder="Number of links" class="former form-control">
          </div>
      </div>
      <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Delivered links</div>
              <input type="number" id="delivered_links" name="delivered_links" placeholder="delivered links" class="former form-control">
          </div>
      </div>
      <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Total RC LE</div>
              <input type="number" id="Project Summary" name="Total_RC_value" 
              placeholder="Total RC value (L.E)" min="0"   step="1" class="former form-control">
          </div>
      </div>
    <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
          Trasmission media</div>
           <select name="Transmission_media"  class="former form-control" id="Transmission_media" 
           placeholger="Transmission_media">
              <option value="0"  selected>Select Media</option>
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
              <input type="text" id="Hw_type" name="Hw_type" placeholder="Add HW type ..." class="former form-control">
          </div>
      </div>

   <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Down Payment (EGP)</div>
              <input type="number" id="Down_Payment" name="Down_Payment" 
              placeholder="Down Payment (EGP) ..." min="0"   step="1" class="former form-control">
          </div>
      </div>

   <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i>Down-Payment Date</div>
              <input type="date" id="Down_Payment_Date" name="Down_Payment_Date"class="former form-control">
          </div>
      </div>
 
    <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Total NRC LE</div>
              <input type="number" id="Total_NRC_value" name="Total_NRC_value" 
              placeholder="Total NRC value (EGP) ..." min="0"   step="1" class="former form-control">
          </div>
      </div>
            <br>
    <button type="button" class="collapsible" id="company_name">PO Documents</button>
    <div class="content">
      <br>


  <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon"style="float:left;"><i class="fa fa-asterisk"></i>
        PO</div>
     <input type="file" name="PO_PDF_1" class="former form-control" id="PO_PDF_1"/>

      </div>
  </div>

  <br>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Presales solution</div>
     <input type="file" name="Presales_solution" class="former form-control" id="Presales_solution"/>

      </div>
  </div>
  <br>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Marketing approval</div>
     <input type="file" name="Marketing_approval" class="former form-control" id="Marketing_approval" />

      </div>
  </div>
 <br>
 <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Extra_approvals</div>
     <input type="file" name="Extra_approvals" class="former form-control" id="Extra_approvals" />

      </div>
  </div>
 <br>
 <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        HW LOI</div>
     <input type="file" name="HW_LOI" class="former form-control" id="HW_LOI" />

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
    <input type="file" name="Project_acceptance_1"class="form-control"id="Project_acceptance_1" />

      </div>
  </div>
       <br> 

    <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)2</div>
    <input type="file" name="Project_acceptance_2"class="form-control"id="Project_acceptance_2" />

      </div>
  </div>
       <br>
    <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)3</div>
    <input type="file" name="Project_acceptance_3"class="form-control"id="Project_acceptance_3" />

      </div>
  </div>
       <br>

      <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)4</div>
    <input type="file" name="Project_acceptance_4"class="form-control"id="Project_acceptance_4" />

      </div>
  </div>
       <br>

      <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)5</div>
    <input type="file" name="Project_acceptance_5"class="form-control"id="Project_acceptance_5" />

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
              <!-- <input type="text" id="project_Summary" name="project_Summary" placeholder="project_Summary" class="former form-control"> -->
              <textarea rows="5" cols="40" class="project_Summary"id="project_Summary"
               name="project_Summary"></textarea>
          </div>
      </div>
        <br>

          <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
                EPM Unit</div>
                 <select name="EPM_unit" required class="former form-control" id="EPM_unit" 
                 placeholger="EPM_unit">
                    <option value="0"  selected>Select Unit</option>
                    <option value="KAM">KAM</option>
                    <option value="BS">BS</option>
                    <option value="Fiber and prewimax">Fiber & prewimax</option>
                    <option value="large and MegaProject">large & Mega Project</option>
                  </select>
            </div>
        </div>
   
                  <br>

<div style="clear: both;">
      <button type="submit" class="btn-submit submit" id="mySubmit" onclick="myFunction()" name="save" id="submitID" 
      onclick="myFunction()"
      style="width: 30%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;background: linear-gradient(to left, #383f88 1%, #713391 60%);" title="Add New Order">Add New</button>
</div>

                          </form>
                        </div>
                    </div>
                </div>
                </center>
<?php 
if(isset($_POST['save'])){

  

  if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
  if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
  if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
  if(isset($_POST['delivery_date'])){$delivery_date = $_POST['delivery_date'];}
  if(isset($_POST['PO_Date'])){$PO_Date = $_POST['PO_Date'];}
  if(isset($_POST['number_of_links'])){$number_of_links = $_POST['number_of_links'];}
  if(isset($_POST['delivered_links'])){$delivered_links = $_POST['delivered_links'];}
  if(isset($_POST['Total_RC_value'])){$Total_RC_value = $_POST['Total_RC_value'];}
  if(isset($_POST['EPM_unit'])){$EPM_unit = $_POST['EPM_unit'];}
  if(isset($_POST['Transmission_media'])){$Transmission_media = $_POST['Transmission_media'];}
  if(isset($_POST['Hw_type'])){$Hw_type = $_POST['Hw_type'];}
  if(isset($_POST['Down_Payment'])){$Down_Payment = $_POST['Down_Payment'];}
  if(isset($_POST['Down_Payment_Date'])){$Down_Payment_Date = $_POST['Down_Payment_Date'];}
  if(isset($_POST['Total_NRC_value'])){$Total_NRC_value = $_POST['Total_NRC_value'];}

/////'$Project_ACC'1
if(isset($_FILES['Project_acceptance_1'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_1"]["name"],PATHINFO_EXTENSION));
$Project_ACC = strtolower($target_dir.basename(strtotime("now").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC)) {
  echo '<div id="message12" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
<br/>
    <div class="content">
       file Project_acceptance_1 already exists
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message12").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message12").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Project_acceptance_1"]["tmp_name"], $Project_ACC)) {
     "The file ". htmlspecialchars( basename( $_FILES["Project_acceptance_1"]["name"])). " has been uploaded.";
  } 

}

/////'$Project_ACC2'1
if(isset($_FILES['Project_acceptance_2'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_2"]["name"],PATHINFO_EXTENSION));
$Project_ACC2 = strtolower($target_dir.basename(strtotime("2 seconds").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC2)) {
  echo '<div id="message44" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
<br/>
    <div class="content">
       file (Project_acceptance_2) already exists
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message44").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message44").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Project_acceptance_2"]["tmp_name"], $Project_ACC2)) {
     "The file ". htmlspecialchars( basename( $_FILES["Project_acceptance_2"]["name"])). " has been uploaded.";
  } 

}

/////'$Project_ACC3'
if(isset($_FILES['Project_acceptance_3'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_3"]["name"],PATHINFO_EXTENSION));
$Project_ACC3 = strtolower($target_dir.basename(strtotime("5 seconds").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC3)) {
  echo '<div id="message3" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
      <br/>
    <div class="content">
       file (Project_acceptance_3) already exists
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message3").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message3").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Project_acceptance_3"]["tmp_name"], $Project_ACC3)) {
     "The file ". htmlspecialchars( basename( $_FILES["Project_acceptance_3"]["name"])). " has been uploaded.";
  }

}

/////'$Project_ACC4'
if(isset($_FILES['Project_acceptance_4'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_4"]["name"],PATHINFO_EXTENSION));
$Project_ACC4 = strtolower($target_dir.basename(strtotime("7 seconds").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC4)) {

  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Project_acceptance_4"]["tmp_name"], $Project_ACC4)) {
     "The file ". htmlspecialchars( basename( $_FILES["Project_acceptance_4"]["name"])). " has been uploaded.";
  } 

}

/////'$Project_ACC 5'
if(isset($_FILES['Project_acceptance_5'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_5"]["name"],PATHINFO_EXTENSION));
$Project_ACC5 = strtolower($target_dir.basename(strtotime("9 seconds").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC5)) {
  echo '<div id="message30" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
<br/>
    <div class="content">
       file already exists (Project_acceptance_5)
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message30").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message30").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Project_acceptance_5"]["tmp_name"], $Project_ACC5)) {
     "The file ". htmlspecialchars( basename( $_FILES["Project_acceptance_5"]["name"])). " has been uploaded.";
   }

}
  /*///////////**********************************
  E:/PO_file/
  ///***********************/////////// PO pdf */
if(isset($_FILES['PO_PDF_1'])){
   $target_dir = "e:/PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_1"]["name"],PATHINFO_EXTENSION));
$target_file = strtolower($target_dir.basename(strtotime("4 seconds").'.'.$imageFileType));
$uploadOk = 1;
if(empty($_FILES['PO_PDF_1'])){
  echo 'empty';
  $uploadOk = 0;
}
// Check if file already exists
if (file_exists($target_file)) {
 
  $uploadOk = 0;
}

 if (move_uploaded_file($_FILES["PO_PDF_1"]["tmp_name"], $target_file)) {
     "The file ". htmlspecialchars( basename( $_FILES["PO_PDF_1"]["name"])). " has been uploaded.";
   }

   }
    ///////////////////////////////////////////// PO pdf2
if(isset($_FILES['Presales_solution'])){
   $target_dir = "e:/PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["Presales_solution"]["name"],PATHINFO_EXTENSION));
$target_file2 = strtolower($target_dir.basename(strtotime("10 seconds").'.'.$imageFileType));
$uploadOk = 1;

if (file_exists($target_file2)) {
  echo '<div id="message550" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
<br/>
    <div class="content">
       file (Presales_solution) already exists
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message550").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message550").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
// if ($_FILES["Presales_solution"]["size"] < 1500000) {
//    echo '<div id="message55" class="overlay">
//   <div class="popup">
//     <h2> Sorry '.$s_username.' Presales_solution</h2>
//     <span class="deleteMeetingClose">&times;</span>
// <br/>
//     <div class="content">
//        your file is too large.
//     </div>
//   </div>
// </div>
// <script type="text/javascript">
//   (function() {
//   document.getElementById("message55").style.display = "none";
// });

//   $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
//     //close action
//     document.getElementById("message55").style.display = "none";
// });
// </script>';
//     //$insert_query === 0;
//  $uploadOk == 0;
// }
 if (move_uploaded_file($_FILES["Presales_solution"]["tmp_name"], $target_file2)) {
     "The file ". htmlspecialchars( basename( $_FILES["Presales_solution"]["name"])). " has been uploaded.";}
   }
    //////////////////////////////////////////////// PO pdf3
if(isset($_FILES['Marketing_approval'])){
   $target_dir = "e:/PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["Marketing_approval"]["name"],PATHINFO_EXTENSION));
$target_file3  = strtolower($target_dir.basename(strtotime("3 seconds").'.'.$imageFileType));
$uploadOk = 1;

if (file_exists($target_file3)) {
  echo '<div id="message2" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
<br/>
    <div class="content">
       file (Marketing_approval) already exists
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message2").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message2").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Marketing_approval"]["tmp_name"], $target_file3)) {
     "The file ". htmlspecialchars( basename( $_FILES["Marketing_approval"]["name"])). " has been uploaded.";}
   }
     //////////////////////////////////////////////// PO pdf4
   if(isset($_FILES['Extra_approvals'])){
   $target_dir = "e:/PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["Extra_approvals"]["name"],PATHINFO_EXTENSION));
$target_file4  = strtolower($target_dir.basename(strtotime("8 seconds").'.'.$imageFileType));
$uploadOk = 1;

if (file_exists($target_file4)) {
  echo '<div id="message23" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
<br/>
    <div class="content">
       file (Extra_approvals) already exists
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message23").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message23").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Extra_approvals"]["tmp_name"], $target_file4)) {
     "The file ". htmlspecialchars( basename( $_FILES["Extra_approvals"]["name"])). " has been uploaded.";}
   }
     //////////////////////////////////////////////// PO pdf5

if(isset($_FILES['HW_LOI'])){
   $target_dir = "e:/PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["HW_LOI"]["name"],PATHINFO_EXTENSION));
$target_file5  = strtolower($target_dir.basename(strtotime("6 seconds").'.'.$imageFileType));
$uploadOk = 1;

if (file_exists($target_file5)) {
  echo '<div id="message21" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="deleteMeetingClose">&times;</span>
<br/>
    <div class="content">
       file (HW_LOI) already exists
    </div>
  </div>
</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message21").style.display = "none";
});

  $("#overlay, .deleteMeetingCancel, .deleteMeetingClose").click(function () {
    //close action
    document.getElementById("message21").style.display = "none";
});
</script>';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["HW_LOI"]["tmp_name"], $target_file5)) {
     "The file ". htmlspecialchars( basename( $_FILES["HW_LOI"]["name"])). " has been uploaded.";}
   }


  $escaped_project = $_POST['project_name'];
  $str_project_name = str_replace("'", "`", $escaped_project);

  $escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);

       $error_query = sqlsrv_query( $con ,"SELECT ISNULL((SELECT Customer_name
  
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where Customer_name = N'$Customer_name' and project_name = '$str_project_name'),'nothing') resultt");
      $error=sqlsrv_fetch_array($error_query);
      $results= $error['resultt'];
     
  if($results !='nothing'){
echo '<script>
    swal({
    title: "Data already exists",
  icon: "error",
  })
     </script>';

  }
//   <script>
//   function myFunction() {
//   document.getElementById("mySubmit").disabled = true;
// }

// </script>
   
  if($results == 'nothing'){
   echo "<script>
   
    function myFunction() {
   document.getElementById('mySubmit').disabled = true;
 }
</script>";


  $insert_query = sqlsrv_query( $con ,"INSERT INTO  [EPMKS].[dbo].[tbl_Projects_details] 
    ([Customer_name],[project_name]
      ,[delivery_date],[PO_date],[number_of_links],[delivered_links]
      ,[Total_RC_value],[Transmission_media]
      ,[Hw_type]
      ,[Down_Payment]
      ,[Down_Payment_Date]
      ,[Total_NRC_value]
      ,[project_Summary]
      ,[PO_PDF_1],[Presales_solution],[Marketing_approval]
      ,[Extra_approvals],[HW_LOI]
      ,[Project_acceptance_1]
      ,[Project_acceptance_2]
      ,[Project_acceptance_3]
      ,[Project_acceptance_4]
      ,[Project_acceptance_5]
      ,[Creation_time],[Creator_username],[EPM_unit])

    VALUES 
    (N'$Customer_name',N'$str_project_name','$delivery_date','$PO_Date','$number_of_links',
    '$delivered_links','$Total_RC_value','$Transmission_media'
    ,N'$Hw_type'
      ,'$Down_Payment'
      ,'$Down_Payment_Date'
      ,'$Total_NRC_value'
    ,N'$str_Summary',
    '$target_file','$target_file2','$target_file3','$target_file4','$target_file5',
    '$Project_ACC','$Project_ACC2','$Project_ACC3','$Project_ACC4','$Project_ACC5',
    '$new_date','$s_username','$EPM_unit')");


  if($insert_query){
echo '<script>
    swal({
    title: "Done",
  icon: "success",
  })
     </script>';}
      }
      }
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

<script src="jQuery/jquery.min.js"></script>
<script src="bootsrab.min"></script>                       
<script type="text/javascript" src="jQuery/sweetalert.min.js"></script>

<?php
 include ("footer.html");
 ?>
