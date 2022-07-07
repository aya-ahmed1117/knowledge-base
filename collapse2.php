

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
  /* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
  position: static;
  z-index: 10; 

}


/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
/****************/
.collapsible {
  background-color: #383f88;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;

}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

        #company_name {
                position: relative;
            }

        #company_name:hover:after {
            content: '\f01a';
            font: normal normal normal 25px/1 FontAwesome;
            padding-left:2%;
            position: absolute;
        }
.btn:hover{
  background-color: orange;
}
</style>

 <!--  <a role="button" id="btnExport" value="Export to Excel"  onclick="Export()">
    <img src="images/microsoft" style="width:10%;"></a> -->
    <center>
  <img src="images/viewhistoryforprojects">
 
    <br>
    <br>
  </center>

 

      
<?php if(isset($_GET['project_id'])){$project_id = $_GET['project_id']; ?>

   <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>">
<?php 
  $selected = sqlsrv_query($con ,"SELECT *
   FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id ='$project_id' ");
   $output_query = sqlsrv_fetch_array($selected);
?>

  <div class="col-md-6">
   <div  class="modal" id="message21" style="display: block; background: rgba(0, 0, 0, 0.2);">
  <div id="myOut" class="modal-content" >
    <div style="float:right;"><span class="close closeOut " id="closeOut">×</span></div>

    <div > Project Num :<?php echo $project_id ; ?></div>
    <br>
  <button type="button" class="collapsible" id="company_name">PO</button>
    <div class="content">
      
      <?php
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

if($lastChar !== '.'){
echo'<div style="border: 1px solid lightgray;">PO_PDF_1 :
<a class="input-group-addon clip" href='.$output_query["PO_PDF_1"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}

if($lastChar == '.'){
  echo'<div  style="border: 1px solid lightgray;"></div>';
}
if($lastChar2 !== '.'){
echo'<div style="border: 1px solid lightgray;">Presales_solution :
<a class="input-group-addon clip" href='.$output_query["Presales_solution"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a></div>';}

if($lastChar2 == '.'){
  echo'<div  style="border: 1px solid lightgray;"></div>';
}

if($lastChar3 !== '.'){
echo'<div style="border: 1px solid lightgray;"> Marketing_approval :
<a class="input-group-addon clip" href='.$output_query["Marketing_approval"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}

if($lastChar3 == '.'){
  echo'<div  style="border: 1px solid lightgray;"></div>';
}

////4
if($lastChar4 !== '.'){
echo'<div  style="border: 1px solid lightgray;">Extra_approvals :
<a class="input-group-addon clip" href='.$output_query["Extra_approvals"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}

if($lastChar4 == '.'){
  echo'<div  style="border: 1px solid lightgray;"></div>';
}
////5
if($lastChar5 !== '.'){
echo'<div  style="border: 1px solid lightgray;">HW_LOI :
<a class="input-group-addon clip" href='.$output_query["HW_LOI"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i>
</a></div>';}

if($lastChar5 == '.'){
  echo'<div  style="border: 1px solid lightgray;"></div>';
}
echo '';

 ?>
 </div>
 <br><button type="button" class="collapsible" id="company_name">Project acceptance</button>
    <div class="content">
      <br>
      <?php
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
echo'<div  style="border: 1px solid lightgray;">Project_acceptance_1 : 
<a class="input-group-addon clip" href='.$output_query["Project_acceptance_1"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}

if($lastChars == '.'){
   echo'<div  style="border: 1px solid lightgray;"></div>';
}


if($lastChars2 !== '.'){
 echo'<div class="" style="border: 1px solid lightgray;">Project_acceptance_2 : 
 <a class="input-group-addon clip" href='.$output_query["Project_acceptance_2"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}
if($lastChars2 == '.'){
   echo'<div  style="border: 1px solid lightgray;"></div>';}

if($lastChars3 !== '.'){
 echo'<div  class="" style="border: 1px solid lightgray;">Project_acceptance_3 :
 <a class="input-group-addon clip" href='.$output_query["Project_acceptance_3"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}
if($lastChars3 == '.'){
   echo'<div  style="border: 1px solid lightgray;"></div>';
}
if($lastChars4 !== '.'){
 echo'<div  class="" style="border: 1px solid lightgray;">Project_acceptance_4 : 
 <a class="input-group-addon clip" href='.$output_query["Project_acceptance_4"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}
if($lastChars4 == '.'){
  echo'<div   style="border: 1px solid lightgray;"></div>';
}

if($lastChars5 !== '.'){
   echo'<div  class="" style="border: 1px solid lightgray;">Project_acceptance_5 : 
   <a class="input-group-addon clip" href='.$output_query["Project_acceptance_5"].' download><i class="fa fa-paperclip" style="font-size:20px;"></i></a></div>';}
  if($lastChars5 == '.'){
   echo'<div  style="border: 1px solid lightgray;"></div>';
}
  echo'</div><!-- collapsible-->';
?>
      <div class="swal-footer">
      <button class="swal-button  closed2">Close</button>
    </div>

      </div>
    </div>
  </div>

</form>

<?php
}
?>
<!-- 
<div id="message21" class="overlay">
  <div class="popup">
    <h2> Sorry '.$s_username.'</h2>
    <span class="closeOut">&times;</span>
<br/>
    <div class="content">
       file (HW_LOI) already exists
    </div>
  </div>
</div> -->
<script type="text/javascript">
  (function() {
  document.getElementById("message21").style.display = "none";
});

  $("#overlay,.closeOut").click(function () {
    //close action
    document.getElementById("message21").style.display = "none";
});
</script>
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
          <th >Attached</th>
                           
        </tr>
    </thead>
<tbody>

<?php

  $selected = sqlsrv_query($con ,"SELECT *
   FROM [EPMKS].[dbo].[tbl_Projects_details] ");

   while( $output_query = sqlsrv_fetch_array($selected)){
    $string = $output_query["Total_RC_value"];
    $project_id = $output_query["project_id"];
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
 //$rows .='<td> <button class="btn btn--doar" id="outBtn"  value="out">Out</button></td>';
// <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
//   Launch demo modal
// </button></td>';
  // $rows .='<td><div class="col-md-6">
  //  <a type="button" class="btn" id="inBtn" href="?project_id='.$project_id.'">
  //  Get data</a></div></td>';

   $rows .='<td style="border: 1px solid lightgray;"><a href="?project_id='.$output_query["project_id"].'" class="btn">Attached</a></td>';

       

 $rows .='</tr>';
    echo $rows;

}

?>
</tbody>
</table>
</div>
</div>

<br>

<script>
//in
var myIN = document.getElementById("myIN");
//out
var myOut = document.getElementById("myOut");
// in
var btn = document.getElementById("inBtn");
// out 
var out = document.getElementById("outBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var close = document.getElementsByClassName("closeOut")[0];
var closeddd = document.getElementsByClassName("closed")[0];

var closeddd2 = document.getElementsByClassName("closed2")[0];



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

////outtt
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == myOut) {
    myOut.style.display = "none";
  }
}
</script>
  
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
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
   
<br>
<br>
<br>
<br>

<?php 
  include("footer.html");

?>
