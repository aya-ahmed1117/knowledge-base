


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


  $escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);

   $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name =N'$Customer_name' and  project_name =N'$project' ");
       // while(
            $index = sqlsrv_fetch_array($gogo);//){
 
      $PO_PDF_1 =$index['PO_PDF_1'];
      $PO_PDF_2 =$index['PO_PDF_2'];
      $PO_PDF_3 =$index['PO_PDF_3'];
      $Project_acceptance_1 =$index['Project_acceptance_1'];
      $Project_acceptance_2 =$index['Project_acceptance_2'];
      $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];

if(isset($_FILES['PO_PDF_1'])){
   $target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_1"]["name"],PATHINFO_EXTENSION));
$target_file = strtolower($target_dir.basename(strtotime("4 seconds").'.'.$imageFileType));
$uploadOk = 1;}
    if ($_FILES['PO_PDF_1']['size'] == 0 && $_FILES['PO_PDF_1']['error'] == 0){
  echo $target_file = $index['PO_PDF_1'];
   }

    $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_Date'
      ,[number_of_links] = '$number_of_links'
      ,[Total_RC_value] = '$Total_RC_value'
      ,[Transmission_media]='$Transmission_media'
      ,[project_Summary] = N'$str_Summary'

      ,[PO_PDF_1]= '$target_file'
   
      ,[Creator_username] ='$s_username'
      ,[EPM_unit] = '$EPM_unit'
      ,[Creation_time]='$new_date'

    where project_id = '$project_id'");

?>