<?php
        include("pages_home.php");
        if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}

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
    <img src="images/microsoft" style="width:10%;"></a> -->
    <center>
  <img src="images/viewhistoryforprojects">
 
    <br>
    <br>
  </center>
  
<div style="padding:20px;">
  <p style="font-weight:bold;font-size:15px;">
    To Download this table please click Excel button
    <a role="button" id="btnExport" value="Export to Excel" onclick="Export()">       
  <img src="images/microsoft" class="zoom"  style="width:5%;"/> </a></p>

<h2 style="color:; ">Table Filter</h2>
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter"/>
    <br>
<div class="tableFixHead">
<table class="table order-table"  cellspacing="0" id="tblCustomers" >
  <thead style="color: white;font-size: 15px;border: 1px solid white; ">
    <tr> 
          <th >EPM_unit </th>
          <th >Customer name </th>
          <th >project name </th>
          <th >delivery date </th>
          <th >PO date</th>
          <th >number of links</th>
          <th >Total RC value </th>
          <th >Transmission media</th>
          <th >project Summary</th>
          <th >PO 1</th>
          <th >PO 2</th>
          <th >PO 3</th>
          <th >PO 4</th>
          <th >PO 5</th>
          <th >P.A 1</th>
          <th >P.A 2</th> 
          <th >P.A 3</th> 
          <th >P.A 4</th> 
          <th >P.A 5</th>                  
        </tr>
    </thead>
<tbody>

<?php

  $selected = sqlsrv_query($con ,"SELECT * FROM [EPMKS].[dbo].[tbl_Projects_details] ");

   while( $output_query = sqlsrv_fetch_array($selected)){
    $string = $output_query["Total_RC_value"];
$cur = number_format($string,0);
$x =  "$cur EGP";
    $project_SummaryRow = $output_query['project_Summary'];
$rows  ='<tr>';
$rows .='<td class=""style="border: 1px solid lightgray;">'.$output_query["EPM_unit"].'</td>';
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
$rows .='<td class="" style="border: 1px solid lightgray;">'.$output_query["project_Summary"].'</td>';
$string = $output_query["PO_PDF_1"];
$lastChar = substr($string, -1);

$string2 = $output_query["Presales_solution"];
$lastChar2 = substr($string2, -1);

$string3 = $output_query["Marketing_approval"];
$lastChar3 = substr($string3, -1);

$string4 = $output_query["Extra_approvals"];
$lastChar4 = substr($string4, -1);

$string5 = $output_query["HW_LOI"];
$lastChar5 = substr($string5, -1);

// $dir = "E:/PO_file/";

//   $allFiles = scandir($dir);
//   //$files = array_diff($allFiles, array('.', '..')); // To remove . and .. 

// foreach($allFiles as $file){
     // "<a href='download.php?file=".$file."'>".$file."</a><br>";

//if(($output_query["PO_PDF"] !== "PO_file/") && ($output_query["PO_PDF"] !== "null")){
if($lastChar !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href=download.php?file='.$output_query["PO_PDF_1"].' ><i class="fa fa-paperclip" style="font-size:20px;"></i>
  <img src="'.$output_query["PO_PDF_1"].'" style="width:50px;">

</a></td>';}

if($lastChar == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}

//if(($output_query["PO_PDF"] !== "PO_file/") && ($output_query["PO_PDF"] !== "null")){
if($lastChar2 !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href='.$output_query["Presales_solution"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
  <img src="'.$output_query["Presales_solution"].'" style="width:50px;">

</a></td>';}

if($lastChar2 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}


//if(($output_query["PO_PDF"] !== "PO_file/") && ($output_query["PO_PDF"] !== "null")){
if($lastChar3 !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href='.$output_query["Marketing_approval"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
  <img src="'.$output_query["Marketing_approval"].'" style="width:50px;">

</a></td>';}

if($lastChar3 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}

////4
if($lastChar4 !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href='.$output_query["Extra_approvals"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
  <img src="'.$output_query["Extra_approvals"].'" style="width:50px;">

</a></td>';}

if($lastChar4 == '.'){
  $rows .='<td  style="border: 1px solid lightgray;"></td>';
}
////5
if($lastChar5 !== '.'){
$rows .='<td style="border: 1px solid lightgray;">
<a class="input-group-addon clip" href='.$output_query["HW_LOI"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
  <img src="'.$output_query["HW_LOI"].'" style="width:50px;">
</a></td>';}

if($lastChar5 == '.'){
  $rows .='<td style="border: 1px solid lightgray;"></td>';
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
<br>
<p style="font-weight:bold;font-size:16px;">
    To Download this table please click Excel button
    <a role="button" id="btnExport" value="Export to Excel" onclick="Export()">       
  <img src="images/microsoft" class="zoom"  style="width:5%;"/> </a></p>
  </div>
<script src="js/table-filter.js"></script>
<script src="js/table2excel.js" type="text/javascript"></script>
<script type="text/javascript">
        function Export() {
            $("#tblCustomers").table2excel({
                filename: "history_view.xls"
            });
        }
    </script>

    <?php
//     //$string5 = $output_query["HW_LOI"];
// if(isset($_GET['HW_LOI']))
// {
//     $var_1 = $_GET['HW_LOI'];
// //    $file = $var_1;

// $dir = "../E/"; // trailing slash is important
// $file = $dir . $var_1;

// if (file_exists($file))
//     {
//     header('Content-Description: File Transfer');
//     header('Content-Type: application/octet-stream');
//     header('Content-Disposition: attachment; filename='.basename($file));
//     header('Expires: 0');
//     header('Cache-Control: must-revalidate');
//     header('Pragma: public');
//     header('Content-Length: ' . filesize($file));
//     ob_clean();
//     flush();
//     readfile($file);
//     exit;
//     }
// } //- the missing closing brace
?>
<br>
<br>
<br>
<br>
<?php

function htmlpath($relative_path) {
    $realpath=realpath($relative_path);
    $htmlpath=str_replace($_SERVER['DOCUMENT_ROOT'],'',$realpath);
    return $htmlpath;
}

echo '<img src="',htmlpath('./E:/PO_file/dashboard.png'),'" border=1>';

?>
<img src="file://E:/PO_file/dashboard.png" width="200"  />
<script type="text/javascript"> 
  $(function(){
    
            $('#fiad').change( function(event) {
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $("img").fadeIn("fast").attr('src',tmppath);

            });
  });  
  </script>
<?php

 '<a href="../E:/PO_file/dashboard.png" download="w3logo"><br>
  <img src=".../E:/PO_file/dashboard.png"  width="104" height="142">
</a>';

$dir = "E:/PO_file/";

  $allFiles = scandir($dir);
  //$files = array_diff($allFiles, array('.', '..')); // To remove . and .. 
  // <img src='E:/PO_file/".$file."'  width='104' height='142'>

foreach($allFiles as $file){
     echo "<a href='download.php?file=".$file."'>".$file."</a><br>";
     
}


    // if ($handle = opendir('e:/PO_file/')) {
    //     while (false !== ($entry = readdir($handle))) {
    //         if ($entry != "." && $entry != "..") {
    //             echo "<a href='download.php?file=".$entry."'>".$entry."</a><br>";
    //         }
    //     }
    //     closedir($handle);
    // }

    // // Fetch the file info.
    // $filePath = '../images/icon-256x256.png';

    // if(file_exists($filePath)) {
    //     $fileName = basename($filePath);
    //     $fileSize = filesize($filePath);

    //     // Output headers.
    //     header("Cache-Control: private");
    //     header("Content-Type: application/stream");
    //     header("Content-Length: ".$fileSize);
    //     header("Content-Disposition: attachment; filename=".$fileName);

    //     // Output file.
    //     readfile ($filePath);                   
    //     exit();
    // }
    // else {
    //     die('The provided file path is not valid.');
    // }

?>

<?php 
  include("footer.html");

?>
