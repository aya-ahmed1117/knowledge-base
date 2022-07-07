



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
  if(isset($_POST['Hw_type'])){$Hw_type = $_POST['Hw_type'];}
  if(isset($_POST['Down_Payment'])){$Down_Payment = $_POST['Down_Payment'];}
  if(isset($_POST['Down_Payment_Date'])){$Down_Payment_Date = $_POST['Down_Payment_Date'];}
  if(isset($_POST['Total_NRC_value'])){$Total_NRC_value = $_POST['Total_NRC_value'];}

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  //$date = strtotime("+42 minute", $date);
  //$new_date= date('Y-m-d H:i:s', $date);
  $new_date =date ("Y-m-d H:i:s");


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
      ,[Hw_type]
      ,[Down_Payment]
      ,[Down_Payment_Date]
      ,[Total_NRC_value]
      ,[project_Summary]
      ,[PO_PDF_1]
      ,[Presales_solution]
      ,[Marketing_approval]
      ,[Extra_approvals]
      ,[HW_LOI]
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

     // //insert 2
    $insert_two= sqlsrv_query($con,"INSERT INTO  [EPMKS].[dbo].[tbl_updated_item] ([project_id]
            ,[User_updating]
            ,[Time_of_updating]
            ,[item_updated_type])

        values ('$project_id','$s_username','$new_date','updating project')");
$escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);



 $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id = '$project_id'  ");
       while($index = sqlsrv_fetch_array($gogo)){

      $PO_PDFsss_1 =$index['PO_PDF_1'];
      $PO_PDFsss_2 =$index['Presales_solution'];
      $PO_PDFsss_3 =$index['Marketing_approval'];
      $PO_PDFsss_4 =$index['Extra_approvals'];
      $PO_PDFsss_5 =$index['HW_LOI'];

      $Project_acc1 =$index['Project_acceptance_1'];
      $Project_acc2 =$index['Project_acceptance_2'];
      $Project_acc3=$index['Project_acceptance_3'];
      $Project_acc4 =$index['Project_acceptance_4'];
      $Project_acc5 =$index['Project_acceptance_5'];

}


$PO_PDF_1 = $_FILES['PO_PDF_1']['name'];
  if($_FILES['PO_PDF_1']['name']){
  	 $target_file = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_1"]["name"],PATHINFO_EXTENSION));
$location = strtolower($target_file.basename(strtotime("now").'.'.$imageFileType));
$uploadOk = 1;

  if($location) {
   // echo'<p>File (1)</p>';
   echo '<img src="'.$location.'" height="250" width="250" />';
    move_uploaded_file($_FILES['PO_PDF_1']['tmp_name'], $location);
  }
  else {
    '<p>File (1)</p>';
   //$location == $PO_PDFsss_1;
   $uploadOk == 0;
  }
}
  ///////////////////Presales_solution**************************************
//   if(isset($_FILES['Presales_solution']['name'])){
//   $Presales_solution = $_FILES['Presales_solution']['name'];
//   if($_FILES['Presales_solution']['name']){
//     $test = explode('.', $_FILES['Presales_solution']['name']);
//     $extensionP2 = end($test);    
//     $name = basename(strtotime("2 seconds").'.'.$extensionP2);

//     $PO_PDF2 = 'PO_file/'.$name;
//     move_uploaded_file($_FILES['Presales_solution']['tmp_name'], $PO_PDF2); 
//   }
//   if($Presales_solution) {
//    echo '<p>File (2)</p>';
//    //$Presales_solution = 'not empty';
//    echo '<img src="'.$PO_PDF2.'" height="200" width="200" />';
//   }
//   else {
//    echo '<p>File (2)</p>';
//    $PO_PDF2 == $PO_PDFsss_2;
//   }
// }
if(isset($_FILES['Presales_solution']['name'])){
  	 $target_file = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["Presales_solution"]["name"],PATHINFO_EXTENSION));
$PO_PDF2 = strtolower($target_file.basename(strtotime("2 seconds").'.'.$imageFileType));
$uploadOk = 1;

  if($PO_PDF2) {
   // echo'<p>File (1)</p>';
   echo '<img src="'.$PO_PDF2.'" height="250" width="250" />';
    move_uploaded_file($_FILES['Presales_solution']['tmp_name'], $PO_PDF2);
  }
  else {
    '<p>File (1)</p>';
   //$location == $PO_PDFsss_1;
   $uploadOk == 0;
  }
}
///////////////////Marketing_approval
  if(isset($_FILES['Marketing_approval']['name'])){
  $Marketing_approval = $_FILES['Marketing_approval']['name'];
  if($_FILES['Marketing_approval']['name']){
    $test = explode('.', $_FILES['Marketing_approval']['name']);
    $extensionP3 = end($test);    
    $name = basename(strtotime("4 seconds").'.'.$extensionP3);
    $PO_PDF3 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['Marketing_approval']['tmp_name'], $PO_PDF3);  
  }
  if($Marketing_approval) {
    '<p>File (3)</p>';
   echo '<img src="'.$PO_PDF3.'" height="300" width="300" />';
  }
  else {
    '<p>File (3)</p>';
   $PO_PDF3 == $PO_PDFsss_3;
  }
}
/////***********************************************************************************\\\\\

////Extra_approvals
 if(isset($_FILES['Extra_approvals']['name'])){
  $Extra_approvals = $_FILES['Extra_approvals']['name'];
  if($_FILES['Extra_approvals']['name']){
    $test = explode('.', $_FILES['Extra_approvals']['name']);
    $extensionP4 = end($test);    
    $name = basename(strtotime("5 seconds").'.'.$extensionP4);
    $PO_PDF4 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['Extra_approvals']['tmp_name'], $PO_PDF4);  
  }
  if($Extra_approvals) {
    '<p>File (3)</p>';
   echo '<img src="'.$PO_PDF4.'" height="300" width="300" />';
  }
  else {
    '<p>File (3)</p>';
   $PO_PDF4 == $PO_PDFsss_4;
  }
}
 ////HW_LOI
 if(isset($_FILES['HW_LOI']['name'])){
  $HW_LOI = $_FILES['HW_LOI']['name'];
  if($_FILES['HW_LOI']['name']){
    $test = explode('.', $_FILES['HW_LOI']['name']);
    $extensionP5 = end($test);    
    $name = basename(strtotime("6 seconds").'.'.$extensionP5);
    $PO_PDF5 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['HW_LOI']['tmp_name'], $PO_PDF5);  
  }
  if($HW_LOI) {
    '<p>File (3)</p>';
   echo '<img src="'.$PO_PDF5.'" height="300" width="300" />';
  }
  else {
    '<p>File (3)</p>';
   $PO_PDF5 == $PO_PDFsss_5;
  }
}
/////***********************************************************************************\\\\\

  if(isset($_FILES['Project_acceptance_1']['name'])){
  $Project_acc = $_FILES['Project_acceptance_1']['name'];
  if($_FILES['Project_acceptance_1']['name']){
    $test = explode('.', $_FILES['Project_acceptance_1']['name']);
    $extensionsP1 = end($test);    
    $name = basename(strtotime("7 seconds").'.'.$extensionsP1);

    $Project = 'Project_ACC/'.$name;
    move_uploaded_file($_FILES['Project_acceptance_1']['tmp_name'], $Project);  
  }
  if($Project_acc) {
    '<p>File (3)</p>';
   echo '<img src="'.$Project.'" height="300" width="300" />';
  }
  else {
    '<p>File (3)</p>';
   $Project == $Project_acc1;
  }
}

  if(isset($_FILES['Project_acceptance_2']['name'])){
  $Project_acc2 = $_FILES['Project_acceptance_2']['name'];
  if($_FILES['Project_acceptance_2']['name']){
    $test = explode('.', $_FILES['Project_acceptance_2']['name']);
    $extensionsP2 = end($test);    
    $name = basename(strtotime("8 seconds").'.'.$extensionsP2);

    $Project2 = 'Project_ACC/'.$name;
    move_uploaded_file($_FILES['Project_acceptance_2']['tmp_name'], $Project2);  
    $uploadOk == 1;
  }
  if($Project_acc2) {
    '<p>File (3)</p>';
   echo '<img src="'.$Project2.'" height="300" width="300" />';
   $uploadOk == 1;
  }
  else {
    '<p>File (3)</p>';
   $Project2 == $Project_acc2;
   $uploadOk == 0;
  }
}

  if(isset($_FILES['Project_acceptance_3']['name'])){

  	   $target_dir = "Project_ACC/";
$ImFileTypeP3 = strtolower(pathinfo($_FILES["Project_acceptance_3"]["name"],PATHINFO_EXTENSION));
$Project3 = strtolower($target_dir.basename(strtotime("10 seconds").'.'.$ImFileTypeP3));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project3)) {
  
  $uploadOk = 0;
}else{
 move_uploaded_file($_FILES["Project_acceptance_3"]["tmp_name"], $Project3);

$uploadOk = 1;
}
}

//   $Project_acc3 = $_FILES['Project_acceptance_3']['name'];
//   if($_FILES['Project_acceptance_3']['name']){
//     $test = explode('.', $_FILES['Project_acceptance_3']['name']);
//     $extensionsP3 = end($test);    
//     $name = basename(strtotime("9 seconds").'.'.$extensionsP3);

//     $Project3 = 'Project_ACC/'.$name;
//     move_uploaded_file($_FILES['Project_acceptance_3']['tmp_name'], $Project3); 
//     $uploadOk == 1; 
//   }
//   if($Project_acc3) {
//     '<p>File (3)</p>';
//    echo '<img src="'.$Project3.'" height="300" width="300" />';
//    $uploadOk == 1;
//   }
//   else {
//     '<p>File (3)</p>';
//    $Project3 == $Project_acc3;
//    $uploadOk == 0;
//   }
// }

  if(isset($_FILES['Project_acceptance_4']['name'])){
  $Project_acc4 = $_FILES['Project_acceptance_4']['name'];
  if($_FILES['Project_acceptance_4']['name']){
    $test = explode('.', $_FILES['Project_acceptance_4']['name']);
    $extension = end($test);    
    $name = basename(strtotime("11 seconds").'.'.$extension);

    $Project4 = 'Project_ACC/'.$name;
    move_uploaded_file($_FILES['Project_acceptance_4']['tmp_name'], $Project4);  
  }
  if($Project_acc4) {
    '<p>File (3)</p>';
   echo '<img src="'.$Project4.'" height="300" width="300" />';
  }
  else {
    '<p>File (3)</p>';
   $Project4 == $Project_acc4;
  }
}

  if(isset($_FILES['Project_acceptance_5']['name'])){
  $Project_acc5 = $_FILES['Project_acceptance_5']['name'];
  if($_FILES['Project_acceptance_5']['name']){
    $test = explode('.', $_FILES['Project_acceptance_5']['name']);
    $extensionP5 = end($test);    
    $name = basename(strtotime("3 seconds").'.'.$extensionP5);

    $Project5 = 'Project_ACC/'.$name;
    move_uploaded_file($_FILES['Project_acceptance_5']['tmp_name'], $Project5); 
    $uploadOk == 1; 
  }
  if($Project_acc5) {
    '<p>File (3)</p>';
   echo '<img src="'.$Project5.'" height="300" width="300" />';
   $uploadOk == 1;
  }
  else {
    '<p>File (3)</p>';
   $Project5 == $Project_acc5;
   $uploadOk == 0;
  }
}

$admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_Date'
      ,[number_of_links] = '$number_of_links'
      ,[Total_RC_value] = '$Total_RC_value'
      ,[Transmission_media]='$Transmission_media'
      ,[Hw_type] = N'$Hw_type'
      ,[Down_Payment] = '$Down_Payment'
      ,[Down_Payment_Date] = '$Down_Payment_Date'
      ,[Total_NRC_value] = '$Total_NRC_value'
      ,[project_Summary] = N'$str_Summary'
      ,[PO_PDF_1] =  CASE WHEN '$location' = '' THEN '$PO_PDFsss_1' 
        ELSE  '$location' END
      ,[Presales_solution]=  CASE  WHEN '$PO_PDF2' = '' THEN '$PO_PDFsss_2' 
        ELSE  '$PO_PDF2'  END
      ,[Marketing_approval]=  CASE WHEN '$PO_PDF3' = '' THEN '$PO_PDFsss_3' 
         ELSE  '$PO_PDF3' END
      ,[Extra_approvals]=  CASE WHEN '$PO_PDF4' = '' THEN '$PO_PDFsss_4' 
       ELSE  '$PO_PDF4' END
      ,[HW_LOI]=  CASE WHEN '$PO_PDF5' = '' THEN '$PO_PDFsss_5' 
       ELSE  '$PO_PDF5' END
      ,[Project_acceptance_1] = CASE  WHEN '$Project' = '' THEN '$Project_acc1' 
          ELSE  '$Project'  END
      ,[Project_acceptance_2]=  CASE  WHEN '$Project2' = '' THEN '$Project_acc2' 
          ELSE  '$Project2'  END
      ,[Project_acceptance_3]=  CASE WHEN '$Project3' = '' THEN '$Project_acc3' 
          ELSE  '$Project3'  END
      ,[Project_acceptance_4]=  CASE  WHEN '$Project4' = '' THEN '$Project_acc4' 
          ELSE  '$Project4'  END
      ,[Project_acceptance_5]=  CASE WHEN '$Project5' = '' THEN '$Project_acc5' 
          ELSE  '$Project5'  END
      ,[Creation_time]='$new_date'
      ,[Creator_username] ='$s_username'
      ,[EPM_unit] = '$EPM_unit'

    where project_id = '$project_id'");


  $insert_one = sqlsrv_query( $con , "INSERT INTO  [EPMKS].[dbo].[tbl_Files]
    ([Project_id]
      ,[File_name]
      ,[File_type]
      ,[Adding_time]
      ,[Adding_user]
      )

    VALUES 
    ('$project_id','$location','$Project','$new_date','$s_username')");
