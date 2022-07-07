<title>DELETE </title>
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
<script type="text/javascript" src="jQuery/package/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="jQuery/jquery-3.6.0.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/kpi_css.css">
</head>
<?php
        include("pages_home.php");
         if($_SESSION['username'] == ''){ header("location: index.php"); }
          if(isset($_GET['logout'])){ session_destroy(); header("location: index.php"); }

        if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
        $s_username = $_SESSION['username'];

          if(($_SESSION['username'] == 'maha.magdy') ||
 ($_SESSION['username'] == 'muhmoud.saleh') || ($_SESSION['username'] == 'x_test') ){


?>
	
<style type="text/css">
  .zoom:hover{
    transform: scale(1.0);
    background-color: antiquewhite;
    color: black;
  }
</style>

 <input type="text" value="" class="form-control project_id" name="project_id"  disabled="true" style="display:none;" />
<div style="padding:20px;">
  <center>

  <img src="images/DeleteExisitingProject">
  <h2 style="color:; ">Table Filter</h2>
    <input type="search" class="light-table-filter"data-table="order-table"placeholder="Filter"/>
    <br>
    <br>
<div class="tableFixHead">
<table class="table order-table"  cellspacing="0" id="tblCustomers" >
  <thead style="color: white;font-size: 15px;background-color:#55608f;border: 1px solid white; ">
    <tr>   
          <th >project_id </th>
          <th >Customer_name </th>
          <th >project_name </th>
          <th >delivery_date</th>
          <th >PO_date</th>
          <th >number_of_links</th>
          <th >Total_RC_value </th>
          <th >project_Summary </th>
          <th >Creation_time </th>
<!--           <th > Creator_username</th>  
 -->      
          <th > EPM_unit</th> 
          <th >Delete</th>       
        </tr>
    </thead>
<tbody  id="logBoard">
<?php
if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}
  $selected = sqlsrv_query($con ,"SELECT * FROM [EPMKS].[dbo].[tbl_Projects_details] ");

   while( $output_query = sqlsrv_fetch_array($selected)){
  
$rows  ="<tr data-rowid='{$output_query['project_id']}'>";
$rows .='<td class=" project_id" style="border: 1px solid lightgray;" name="project_id" >'.$output_query['project_id'].'</td> ';
$rows .='<td class=""style="border:1pxsolid lightgray;">'.$output_query["Customer_name"].'</td>';
$rows .='<td class="zoom" style="border:1px solid lightgray;">'.$output_query["project_name"].'</td>';
if($output_query["delivery_date"]->format('Y-m-d') == '1900-01-01'){
  $rows .='<td class="zoom" style="border: 1px solid lightgray;"></td>';
}else{
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["delivery_date"]->format('Y-m-d').'</td>';}
if($output_query["PO_date"]->format('Y-m-d') == '1900-01-01'){
  $rows .='<td class="zoom" style="border: 1px solid lightgray;"></td>';
}else{
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["PO_date"]->format('Y-m-d').'</td>';}
$rows .='<td class="zoom"style="border:1px solid lightgray;">'.$output_query["number_of_links"].'</td>';
$rows .='<td class="zoom"style="border:1px solid lightgray;">'.$output_query["Total_RC_value"].'</td>';
$rows .='<td class="zoom"style="border:1px solid lightgray;">'.$output_query["project_Summary"].'</td>';
$rows .='<td class="zoom" style="border: 1px solid lightgray;">
'.$output_query["Creation_time"]->format('Y-m-d H:i:s').'</td>';
$rows .='<td class="zoom" style="border: 1px solid lightgray;">'.$output_query["EPM_unit"].'</td>';
// $rows .='<td class="hovers" style="border: 1px solid lightgray;" name="project_id" >
// <span class="delete" data-id="'.$output_query["project_id"].'">Delete</span></td>';
$rows .='<td><button type="button" class="btn btn-primary submit" 
value="'.$output_query["project_id"].'"
data-type="'.$output_query["project_id"].'" data-id="'.$output_query["project_id"].'">Delete</button></td>';

  $rows .='</tr>';
     echo$rows;
}
?>
</tbody>
</table>
</div>
</div>
</center>
</div>
<script src="js/table-filter.js"></script>

 <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
 	$('.submit').click('.project_id',function(){
 	  //var project_id = elem.data('project_id');   
      var project_id = $(this).val();
   event.preventDefault();

   $.ajax({
    url: 'ajax_delete.php',
    type: 'POST',
	  data:'project_id='+project_id,  
	  cache: false,
    success: function(data){ 
      swal({ title: "Deleted... :)", icon: "success",});
      //$('#logBoard').html(data);
    	//console.log(data);
   
      //swal({ title: "Done ... :)", icon: "success",});
      $("tr[data-rowid='" + project_id +"']").fadeOut();
     	 
    }, error: function(err){
      swal({ title: "Error", icon: "warning",});

          console.log(err);
        }
  });
return false;
 
 	});
 });


	</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 


?>


<br>
<br>
<br>
<br>

<?php 
  include("footer.html");
}
 else{
echo '
<style>
.modal-content {
  background-color: #fefefe;
  margin: 90px auto;
  padding: 8px;
  border: 1px solid #888;
  width: 25%;
  position: static;
  z-index: 10; 

}
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
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
div {
  margin-bottom: 5px;
  padding: 4px 2px;
}

.danger {
  /*background-color: #ffdddd;*/
  border-left: 6px solid #f44336;
}

.success {
  background-color: #ddffdd;
  border-left: 6px solid #04AA6D;
}

.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}
.dark{
  background-color:#00000091;
  border-left: 6px solid #f44336;
  color: white;

}

.warning {
  background-color: #ffffcc;
  border-left: 6px solid #ffeb3b;
}
</style>
<div >
   <div  class="modal" id="message21" style="display: block; background: rgba(0, 0, 0, 0.2);">
     <div id="myOut" class="modal-content danger" >
      <div style="float:right;"><span class="close closeOut " id="closeOut">×</span></div>
      <center>
      <i class="fa fa-warning" style="font-size:50px;color:#ff9900d1;"></i>
      </center>
<br>
    <div class="dark">
      <br>
    <h5> Sorry '.$s_username.':</h5></div>
    <div class="content">
    <h6 style="color:gray;">You are not allowd to Delete ... </h6>
   
      </div>
   </div>
</div>

</div>
<script type="text/javascript">
  (function() {
  document.getElementById("message21").style.display = "none";
});

  $("#overlay,.closeOut").click(function () {
    document.getElementById("message21").style.display = "none";
});
</script>';
echo '

<div class="warning">
<br>
  <p><strong>Warning <samp>!</strong><samp></samp> If you need
to delete a project please refer to (maha.magdy) or (mahmoud.saleh) to proceed</p>
  <br>
  <a href="home.php" class="btn btn-info">Back home</a>
</div>';

        }

?>
