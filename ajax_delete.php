

<?php 
	require_once("inc/config.inc");

if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);

 $s_username = $_SESSION['username'];
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
      ,'Delete'
      ,'project'
      ,[EPM_unit]
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where project_id ='$project_id' ");

$deleted_Q = sqlsrv_query( $con ,"DELETE from [EPMKS].[dbo].[tbl_Projects_details]
 where project_id = '$project_id'");


if($deleted_Q){
echo '<script>
    swal({
    title: "Deleted Done",
  icon: "success",
  })
     </script>';}
?>
<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/my_table.css">
<tbody >
<?php
if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
  $selected = sqlsrv_query($con ,"SELECT * FROM [EPMKS].[dbo].[tbl_Projects_details]");

   while( $output_query = sqlsrv_fetch_array($selected)){
  
$rows  ="<tr>";
$rows .='<td class="hovers project_id" style="border: 1px solid lightgray;" name="project_id" >'.$output_query['project_id'].'</td> ';
$rows .='<td class="hovers" style="border: 1px solid lightgray;">'.$output_query["delivery_date"]->format('Y-m-d').'</td>';
$rows .='<td class="hovers" style="border: 1px solid lightgray;">'.$output_query["Customer_name"].'</td>';
$rows .='<td class="hovers" style="border: 1px solid lightgray;">'.$output_query["project_name"].'</td>';
$rows .='<td class="hovers" style="border: 1px solid lightgray;">'.$output_query["PO_date"]->format('Y-m-d').'</td>';
$rows .='<td class="hovers" style="border: 1px solid lightgray;">'.$output_query["Project_acceptance"].'</td>';
$rows .='<td  class="hovers" style="border: 1px solid lightgray;">'.$output_query["project_Summary"].'</td>';
$rows .='<td class="hovers" style="border: 1px solid lightgray;">
'.$output_query["Creation_time"]->format('Y-m-d H:i:s').'</td>';
$rows .='<td class="hovers" style="border: 1px solid lightgray;">'.$output_query["Creator_username"].'</td>';
$rows .='<td><button type="button" class="btn btn-primary submit" 
value="'.$output_query["project_id"].'"
data-type="'.$output_query["project_id"].'" data-id="'.$output_query["project_id"].'">delete</button></td>';
  $rows .='</tr>';
     $rows;
}
?>
</tbody>
 -->
