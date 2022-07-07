   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<meta charset="utf-8">
<?php
  require_once("inc/config.inc");
    if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}  
  if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
  if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
  if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
  if(isset($_POST['Q1_What_was_done_well'])){$Q1= $_POST['Q1_What_was_done_well'];}
  if(isset($_POST['Q2_What_wasnt_done_well'])){$Q2 =$_POST['Q2_What_wasnt_done_well'];}
  if(isset($_POST['Q3_Actions_taken'])){$Q3= $_POST['Q3_Actions_taken'];}
  if(isset($_POST['Q4_What_else_could_be_improved'])){$Q4 =$_POST['Q4_What_else_could_be_improved'];}

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);


 $s_username = $_SESSION['username'];
  
  $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name =N'$Customer_name' and  project_name =N'$project_name' ");
        $index = sqlsrv_fetch_array($gogo);
       $old_PO_PDF= $index["PO_PDF"];
       $Q1_What= $index["Q1_What_was_done_well"];
       $Q2_What= $index["Q2_What_wasnt_done_well"];
       $Q3_What= $index["Q3_Actions_taken"];
       $Q4_What= $index["Q4_What_else_could_be_improved"];



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
      ,'Lesson_Learned'
      ,[EPM_unit]
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where project_id ='$project_id' ");
    

$escaped_Su1 = $_POST['Q1_What_was_done_well'];
  $Q11 = str_replace("'", "`", $escaped_Su1);

  $escaped_Su2 = $_POST['Q2_What_wasnt_done_well'];
  $Q22 = str_replace("'", "`", $escaped_Su2);

  $escaped_Su3 = $_POST['Q3_Actions_taken'];
  $Q33 = str_replace("'", "`", $escaped_Su3);

  $escaped_Su4= $_POST['Q4_What_else_could_be_improved'];
  $Q44 = str_replace("'", "`", $escaped_Su4);
   ////update
    $updated =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[Q1_What_was_done_well]=N'$Q11'
      ,[Q2_What_wasnt_done_well]=N'$Q22'
      ,[Q3_Actions_taken]=N'$Q33'
      ,[Q4_What_else_could_be_improved]=N'$Q44'
      ,[Creator_username] ='$s_username'

    where project_id = '$project_id'");
    if($updated){
echo '<script>
    swal({
    title: "Update Done",
  icon: "success",
  })
     </script>'; }


?>

   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>