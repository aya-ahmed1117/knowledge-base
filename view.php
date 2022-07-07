
<?php
 include("pages_home.php");
 
?>
<title>View</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/kpi_css.css">
</head> 
<style type="text/css">
.zoom{
	text-align: center;
}
 .zoom:hover{
    transform: scale(1.0);
    background-color: antiquewhite;
    color: black;
  }
.tableFixHead thead th 
    { 
      background-color:  #240747;  
    
    }
</style>
 <!--  <a role="button" id="btnExport" value="Export to Excel"  onclick="Export()">
    <img src="imades/microsoft" style="width:10%;"></a> -->
    <center>
  <img src="images/per_project">
 
    <br>
    <br>

<div style="padding:20px;" class="col-7">

<h2 style="color:; ">Table Filter</h2>
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter"/>
    <br>
    <br>
<div class="tableFixHead">
<table class="table order-table" cellspacing="0" id="tblCustomers" >
  <thead style="color: white;font-size: 15px;border: 1px solid white; background-color:#240747; ">
    <tr>
          <th>Customer name </th>
          <th>project name </th>
          <th>EPM Unit</th>
          <th>Data</th>             
        </tr>
    </thead>
<tbody>

<?php 

  ////if($_SESSION['role_id'] == 1){
   
	$check = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details]  ");
    while( $output= sqlsrv_fetch_array($check)){
  $p_id = $output['project_id'];
  $rows="<tr>";
  $rows.='<td class="zoom"style="border: 1px solid lightgray; width:15%;">'.$output["Customer_name"].'</td>';
  $rows.= '<td class="zoom"style="border: 1px solid lightgray;width:15%;">'.$output['project_name'].'</td>';
  $rows.='<td class="zoom"style="border: 1px solid lightgray;width:15%;">'.$output['EPM_unit'].'</td>';
  //background: linear-gradient(to left, #713391 1%, #383f88 60%)55608f
  $rows.="<td style='border: 1px solid lightgray;background-color:#240747;width:10%;text-align: center;'>
  <a style='color:white;font-size:15px;font-weight: bold;'href='all_view.php?p_id=".$p_id."'>Get data</a></td>";

  $rows.="</tr>";
  echo $rows;}?>
							</tbody>
						</table>
					</div>
				</div>	
		</center>			
	
<script src="js/table-filter.js"></script>
<?php
    include ("footer.html");
 ?>