   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
  require_once("inc/config.inc");
  if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}  
  if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
  if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
  if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
  if(isset($_POST['delivery_date'])){$delivery_date = $_POST['delivery_date'];}
  if(isset($_POST['PO_date'])){$PO_Date = $_POST['PO_date'];}
  if(isset($_POST['number_of_links'])){$number_of_links = $_POST['number_of_links'];}
  if(isset($_POST['Total_RC_value'])){$Total_RC_value = $_POST['Total_RC_value'];}
  if(isset($_POST['EPM_unit'])){$EPM_unit = $_POST['EPM_unit'];}
  if(isset($_POST['Transmission_media'])){$Transmission_media = $_POST['Transmission_media'];}

  

  $escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);


  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);


 $s_username = $_SESSION['username'];



         // //insert 1
   $insert_one= sqlsrv_query($con,"INSERT INTO  [EPMKS].[dbo].[tbl_Projects_details_update_history]

  SELECT [Customer_name]
      ,[project_name]
      ,[delivery_date]
      ,[PO_date]
      ,[number_of_links]
      ,[Total_RC_value]
       ,[Transmission_media]
      ,[project_Summary]
      ,[PO_PDF_1]
      ,[PO_PDF_2]
      ,[PO_PDF_3]
      ,[Project_acceptance_1]
      ,[Project_acceptance_2]
      ,[Project_acceptance_3]
      ,[Project_acceptance_4]
      ,[Project_acceptance_5]
      ,[Q1_What_was_done_well]
      ,[Q2_What_wasnt_done_well]
      ,[Q3_Actions_taken]
      ,[Q4_What_else_could_be_improved]
      ,'$new_date'
      ,'$s_username'
      ,'Update'
      ,'project'
      ,[EPM_unit]
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where project_id ='$project_id' ");


   if($insert_one){
echo '<script>
    swal({
    title: "Done insert query one ",
  icon: "success",
  })
     </script>'; }

     // //insert 2
    $insert_two= sqlsrv_query($con,"INSERT INTO  [EPMKS].[dbo].[tbl_updated_item] ([project_id]
            ,[User_updating]
            ,[Time_of_updating]
            ,[item_updated_type])

        values ('$project_id','$s_username','$new_date','updating project')");

      if($insert_two){
        echo '<script>
            swal({
            title: "Done insert query TWO ",
          icon: "success",
          })
             </script>'; }

  $escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);

////////////////////////*********************************************************
 
 $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name =N'$Customer_name' and  project_name =N'$project' ");
       while( $index = sqlsrv_fetch_array($gogo)){
 
      $PO_PDF_1 =$index['PO_PDF_1'];
      $PO_PDF_2 =$index['PO_PDF_2'];
      $PO_PDF_3 =$index['PO_PDF_3'];
      $Project_acceptance_1 =$index['Project_acceptance_1'];
      $Project_acceptance_2 =$index['Project_acceptance_2'];
      $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];
  }
/////'$Project_ACC'1
if(isset($_FILES['Project_acceptance_1'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_1"]["name"],PATHINFO_EXTENSION));
$Project_ACC = strtolower($target_dir.basename(strtotime("now").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (empty($_FILES['Project_acceptance_1'])) {
$Project_ACC ==$Project_acceptance_1;
  $uploadOk = 1;
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

if (empty($_FILES['Project_acceptance_2'])) {
$Project_ACC2 ==$Project_acceptance_2;
  $uploadOk = 1;
}
//
}

/////'$Project_ACC3'
if(isset($_FILES['Project_acceptance_3'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_3"]["name"],PATHINFO_EXTENSION));
$Project_ACC3 = strtolower($target_dir.basename(strtotime("5 seconds").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC3)) {
  
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

/////'$Project_ACC5'
if(isset($_FILES['Project_acceptance_5'])){
    $target_dir = "Project_ACC/";
$imageFileType = strtolower(pathinfo($_FILES["Project_acceptance_5"]["name"],PATHINFO_EXTENSION));
$Project_ACC5 = strtolower($target_dir.basename(strtotime("9 seconds").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC5)) {
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["Project_acceptance_5"]["tmp_name"], $Project_ACC5)) {
     "The file ". htmlspecialchars( basename( $_FILES["Project_acceptance_5"]["name"])). " has been uploaded.";
   }
}
  ////////////*********************************************************/////////// PO pdf
if(isset($_FILES['PO_PDF_1'])){
   $target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_1"]["name"],PATHINFO_EXTENSION));
$target_file = strtolower($target_dir.basename(strtotime("4 seconds").'.'.$imageFileType));
$uploadOk = 1;

if(empty($_FILES['PO_PDF_1'])){
  $target_file == $index['PO_PDF_1'];
}
   }
    ///////////////////////////////////////////// PO pdf2
if(isset($_FILES['PO_PDF_2'])){
   $target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_2"]["name"],PATHINFO_EXTENSION));
$target_file2 = strtolower($target_dir.basename(strtotime("10 seconds").'.'.$imageFileType));
$uploadOk = 1;

//if (file_empty($target_file2)) {
    if(empty($_FILES['PO_PDF_2'])){
  $target_file2 == $index['PO_PDF_2'];
}
 // if ($_FILES['PO_PDF_2']['size'] == 0 && $_FILES['PO_PDF_2']['error'] == 0){
 //      $target_file2 =$index['PO_PDF_2'];

 //    }
   }
    //////////////////////////////////////////////// PO pdf3
if(isset($_FILES['PO_PDF_3'])){
   $target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_3"]["name"],PATHINFO_EXTENSION));
$target_file3  = strtolower($target_dir.basename(strtotime("3 seconds").'.'.$imageFileType));
$uploadOk = 1;

    if ($_FILES['PO_PDF_3']['size'] == 0){
      $target_file3 == $index['PO_PDF_3'];
      $uploadOk = 0;

    }

   }


   ////update
    $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_Date'
      ,[number_of_links] = '$number_of_links'
      ,[Total_RC_value] = '$Total_RC_value'
      ,[Transmission_media]='$Transmission_media'
      ,[project_Summary] = N'$str_Summary'
      ,[PO_PDF_1] = '$target_file'
      ,[PO_PDF_2] = '$target_file2'
      ,[PO_PDF_3] = '$target_file3'
      ,[Project_acceptance_1] = '$Project_ACC'
      ,[Project_acceptance_2] = '$Project_ACC2'
      ,[Project_acceptance_3] = '$Project_ACC3'
      ,[Project_acceptance_4] = '$Project_ACC4'
      ,[Project_acceptance_5] = '$Project_ACC5'
      ,[Creator_username] ='$s_username'
      ,[EPM_unit] = '$EPM_unit'

    where project_id = '$project_id'");


?>

   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>