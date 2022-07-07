

  <link rel="stylesheet" type="text/css" href="css/kpi_css.css">
  <?php
  require_once("inc/config.inc");

  
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


  $escaped_project = $_POST['project_name'];
  $str_project_name = str_replace("'", "`", $escaped_project);

  $escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);

  $sqltime = date ("Y-m-d H:i:s");
  // $date = strtotime($sqltime);
  // $date = strtotime("+42 minute", $date);
  // $new_date= date('Y-m-d H:i:s', $date);
  $new_date= date ("Y-m-d H:i:s");
 $s_username = $_SESSION['username'];


$str_project = str_replace("'", "`", $project_name);

       $error_query = sqlsrv_query( $con ,"SELECT ISNULL((SELECT Customer_name
  
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where Customer_name = N'$Customer_name' and project_name = '$str_project'),'nothing') resultt");
      $error=sqlsrv_fetch_array($error_query);
      $results= $error['resultt'];

      
     
  if($results !='nothing'){
    echo '<div id="chkveg">'.$results.' uouo</div><br>';
     echo "Data already exists";

  }
  if($results =='nothing'){
    echo' ( no data exists )';
  }

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

  ////////// PO pdf 
if(isset($_FILES['PO_PDF_1'])){
   $target_dir = "PO_file/";
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
   $target_dir = "PO_file/";
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

 if (move_uploaded_file($_FILES["Presales_solution"]["tmp_name"], $target_file2)) {
     "The file ". htmlspecialchars( basename( $_FILES["Presales_solution"]["name"])). " has been uploaded.";}
   }
    //////////////////////////////////////////////// PO pdf3
if(isset($_FILES['Marketing_approval'])){
   $target_dir = "PO_file/";
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
   $target_dir = "PO_file/";
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
   $target_dir = "PO_file/";
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


 $str_project_name = str_replace("'", "`", $project_name);

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
     </script>
     <script>
     setTimeout(function(){
          window.location.href=window.location.href 
     }, 2000); </script>';
  }
  if($results == 'nothing'){
    //sqlsrv_query( $con ,
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
    title: "Done ya uouo",
  icon: "succes",
  })
     </script>
     <script>
     setTimeout(function(){
         window.location.href=window.location.href 
    }, 5000); 
    </script>';
  }
}

?>

<br>
<br>
<script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- <script type="text/javascript">
    $('#chkveg').multiselect({
  //nonSelectedText: 'Select Framework',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
</script> -->