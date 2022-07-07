
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
 <script src="jQuery/jquery.min.js"></script>
<script src="jQuery/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="jQuery/bootsrab.min.js"></script>

</head>
     <div style="padding: 20px;" >

  <center>
        <img src="images/updatingExistingProject">
             <form method="post" action="Update_test_attach.php" enctype="multipart/form-data">

   

 <div class="form-group">
      <div class="input-group">
       

<!--  <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>PO(PDF)</div>
     <input type="file" name="PO_file" class="former form-control PO_file" id="PO_file"
     placeholder="upload (bulk should be available)" />

      </div>
  </div>
  <br>


      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">Acceptance(PDF)</div>
        <input type="file" name="Project_acceptance" class="form-control" id="Project_acceptance"
                placeholder="Project acceptance (PDF upload) bulk should be available" />

          </div>
      </div>
           <br>   -->
           <?php 
           $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id = 17");
        $index = sqlsrv_fetch_array($gogo);

      $project_Summary = $index['project_Summary'];
      $Customer_SELECT = $index['Customer_name'];
      $delivery_date = $index['delivery_date']->format('Y-m-d');
      $PO_Date = $index['PO_date']->format('Y-m-d');
      $number_of_links = $index['number_of_links'];
      $Total_RC_value = $index['Total_RC_value'];
      $EPM_unit = $index['EPM_unit'];
      $project_id = $index['project_id'];
      ?>
           <input type="text" id="project_id" name="project_id" placeholder="project_id" class="former form-control project_id"value='<?php echo $project_id; ?>' disabled style="display: none;" >
<div style="clear: both;">
   <?php 
   if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
  $selected = sqlsrv_query($con ,"SELECT * FROM [EPMKS].[dbo].[tbl_Projects_details]");

   while($output_query = sqlsrv_fetch_array($selected)){
   $test =$output_query["project_id"];
}
   echo'<button type="button" class="btn btn-primary submit" 
value="'.$project_id.'"name="save"
data-type="'.$project_id.'" data-id="'.$project_id.'">Update</button>';
  ?>
</div>
      <!-- <div style="clear: both;">
      <button type="submit" class="btn-submit"  name="submit"
      style="width: 30%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;background: linear-gradient(to left, #383f88 1%, #713391 60%);" title="Add New Order">Add New</button>
</div> -->

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
  if(isset($_POST['Total_RC_value'])){$Total_RC_value = $_POST['Total_RC_value'];}
  if(isset($_POST['EPM_unit'])){$EPM_unit = $_POST['EPM_unit'];}

 

if(isset($_FILES['Project_acceptance'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance"]["name"],PATHINFO_EXTENSION));
$Project_ACC = strtolower($target_dir.basename(strtotime("now").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Project_acceptance"]["tmp_name"], $Project_ACC)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["Project_acceptance"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
  /////////////////////// PO pdf
if(isset($_FILES['PO_file'])){
   $target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_file"]["name"],PATHINFO_EXTENSION));
$target_file = strtolower($target_dir.basename(strtotime("now").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["PO_file"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["PO_file"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
   }
  $escaped_project = $_POST['project_name'];
  $str_project_name = str_replace("'", "`", $escaped_project);

  $escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);

   

     $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[PO_PDF] = '$target_file'
      ,[Project_acceptance] ='$Project_ACC'
      ,[Creation_time] = '$new_date'
      ,[Creator_username] = 'aya.abdelfattah'
    where project_id = '93'");
}

?>
    <span id="msg" style="color:red"></span> one <br/>
    <input type="file" id="PO_PDF_1" name="PO_PDF_1"><br/>
    <br>

    <span id="msg2" style="color:red"></span> etnen <br/>
    <input type="file" id="Project_acceptance_1" name="Project_acceptance_1"><br/>

  <script type="text/javascript" src="jQuery/jquery-3.4.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.submit').click('.project_id',function(){

     // $(document).on('change','#photo',function(){
        var property = document.getElementById('PO_PDF_1').files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
console.log(image_name);
        if(jQuery.inArray(image_extension,['gif','jpg','jpeg','pdf','png','']) == -1){
          alert("Invalid image file");
        }

        var form_data = new FormData();
        form_data.append("PO_PDF_1",property);
        ///
        var property2 = document.getElementById('Project_acceptance_1').files[0];
        var image_name2 = property2.name;
        var image_extension2 = image_name2.split('.').pop().toLowerCase();
console.log(image_extension2);

        if(jQuery.inArray(image_extension2,['gif','jpg','jpeg','pdf','png','']) == -1){
          alert("Invalid image file");
        }

        var form_data = new FormData();
        form_data.append("Project_acceptance_1",property2);
        form_data.append("PO_PDF_1",property);

        ///var allDta ='Project_acceptance_1='+form_data;//+'&Project_acceptance='+form_data2;
        $.ajax({
          url:'upload.php',
          method:'POST',
          data:form_data,
          contentType:false,
          cache:false,
          processData:false,
          beforeSend:function(data){
            console.log(form_data);
            $('#msg').html('Loading......');
          },
          success:function(data){
            console.log(data);
            $('#msg').html(data);
            $('#msg').html('done');

          }
        });
      });
    });
  //  });

  </script>

       <script type="text/javascript" src="jQuery/jquery-2.2.4.js"></script>
       <script type="text/javascript" src="jQuery/jquery-3.6.0.js"></script>
       <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
       <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
       <script src="js/table2excel.js" type="text/javascript"></script>
<script type="text/javascript">
  
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
  
