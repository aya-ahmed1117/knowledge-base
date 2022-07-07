<?php
        include("pages_home.php");
        if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
        if(isset($_GET['p_id'])){$p_id = $_GET['p_id'];} 
  

?>
	<title>History </title>

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/kpi_css.css">
</head>

<style type="text/css">
  .zoom:hover{
    transform: scale(1.3);
    background-color: antiquewhite;
    color: black;
  }
  .tableFixHead{
    height: auto;
    overflow-x: auto;
  }
</style>
 <!--  <a role="button" id="btnExport" value="Export to Excel"  onclick="Export()">
    <img src="imades/microsoft" style="width:10%;"></a> -->
    <center>
  <img src="images/viewhistoryforprojects">
 
    <br>
    <br>
  </center>
<div style="padding:20px;">

<h2 style="color:; ">Table Filter</h2>
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter"/>
    <br>
    <br>

<div class="tableFixHead">
<table class="table order-table"  cellspacing="0" id="tblCustomers" >
  <thead style="color: white;font-size: 15px;border: 1px solid white; ">
    <tr> 
          <th >project id </th>
          <th >Customer name </th>
          <th >project name </th>
          <th >delivery date </th>
          <th >PO date</th>
          <th >number of links</th>
          <th >Total RC value </th>
          <th>Transmission media</th>
          <th >project Summary</th>
          <th >PO 1</th>
          <th >PO 2</th>
          <th >PO 3</th>
          <th >P.A 1</th>
          <th >P.A 2</th> 
          <th >P.A 3</th> 
          <th >P.A 4</th> 
          <th >P.A 5</th>                  
        </tr>
    </thead>
<tbody>

<?php
// if(isset($_GET['p_id'])){
//   $p_id = $_GET['p_id'];
// } 
  // where project_id='$p_id'
  $selected = sqlsrv_query($con ,"SELECT *
   FROM [EPMKS].[dbo].[tbl_Projects_details]");

   while( $output_query = sqlsrv_fetch_array($selected)){
    $string = $output_query["Total_RC_value"];
$cur = number_format($string,0);
$x =  "$cur EGP";
    $project_SummaryRow = $output_query['project_Summary'];
$rows  ='<tr>';
$rows .='<td class=""style="border: 1px solid lightgray;">'.$output_query["project_id"].'</td>';
$rows .='<td class=""style="border:1px solid lightgray;">'.$output_query["Customer_name"].'</td>';
$rows .='<td class="zoom " style="border: 1px solid lightgray;">'.$output_query["project_name"].'</td>';
if($output_query["delivery_date"]->format('Y-m-d') == '1900-01-01'){
  $rows .='<td class="zoom" style="border: 1px solid lightgray;"></td>';
}else{
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["delivery_date"]->format('Y-m-d').'</td>';}
if($output_query["PO_date"]->format('Y-m-d') == '1900-01-01'){
  $rows .='<td class="zoom" style="border: 1px solid lightgray;"></td>';
}else{
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["PO_date"]->format('Y-m-d').'</td>';}
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["number_of_links"].'</td>';
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$x.'</td>';
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["Transmission_media"].'</td>';
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["project_Summary"].'</td>';
$string = $output_query["PO_PDF_1"];
$lastChar = substr($string, -1);

$string2 = $output_query["PO_PDF_2"];
$lastChar2 = substr($string2, -1);

$string3 = $output_query["PO_PDF_3"];
$lastChar3 = substr($string3, -1);

//if(($output_query["PO_PDF"] !== "PO_file/") && ($output_query["PO_PDF"] !== "null")){
if($lastChar !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href='.$output_query["PO_PDF_1"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a></td>';}

if($lastChar == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}

//if(($output_query["PO_PDF"] !== "PO_file/") && ($output_query["PO_PDF"] !== "null")){
if($lastChar2 !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href='.$output_query["PO_PDF_2"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a></td>';}

if($lastChar2 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}


//if(($output_query["PO_PDF"] !== "PO_file/") && ($output_query["PO_PDF"] !== "null")){
if($lastChar3 !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href='.$output_query["PO_PDF_3"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a></td>';}

if($lastChar3 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}
////////////////Project_acceptance PA
$strings = $output_query["Project_acceptance_1"];
$lastChars = substr($strings, -1);

$strings2 = $output_query["Project_acceptance_2"];
$lastChars2 = substr($strings2, -1);

$strings3 = $output_query["Project_acceptance_3"];
$lastChars3 = substr($strings3, -1);

$strings4 = $output_query["Project_acceptance_4"];
$lastChars4 = substr($strings4, -1);

$strings5 = $output_query["Project_acceptance_5"];
$lastChars5 = substr($strings5, -1);


if($lastChars !== '.'){
$rows .='<td style="border: 1px solid lightgray;"><a class="input-group-addon clip" href='.$output_query["Project_acceptance_1"].' download><i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i></a></td>';}

if($lastChars == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}


if($lastChars2 !== '.'){
$rows .='<td class="" style="border: 1px solid lightgray;width:2%;"><a class="input-group-addon clip" href='.$output_query["Project_acceptance_2"].' download><i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i></a></td>';}
if($lastChars2 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';}

if($lastChars3 !== '.'){
$rows .='<td class="" style="border: 1px solid lightgray;width:2%;"><a class="input-group-addon clip" href='.$output_query["Project_acceptance_3"].' download><i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i></a></td>';}
if($lastChars3 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}
if($lastChars4 !== '.'){
$rows .='<td class="" style="border: 1px solid lightgray;width:2%;"><a class="input-group-addon clip" href='.$output_query["Project_acceptance_4"].' download><i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i></a></td>';}
if($lastChars4 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}

if($lastChars5 !== '.'){
  $rows .='<td class="" style="border: 1px solid lightgray;width:2%;"><a class="input-group-addon clip" href='.$output_query["Project_acceptance_5"].' download><i class="fa fa-paperclip" style="font-size:20px;margin:0;"></i></a></td>';}
  if($lastChars5 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}



  $rows .='</tr>';
    echo $rows;

}

?>
</tbody>
</table>
</div>
</div>

<script src="js/table-filter.js"></script>

<br>
<br>
<br>
<br>

<?php 
  include("footer.html");

?>
