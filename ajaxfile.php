
<style type="text/css">
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}</style>

<?php 
  $selected = sqlsrv_query($con ,"SELECT *
   FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id ='$project_id' ");
   $output_query = sqlsrv_fetch_array($selected);
  ?>
  <div class="col-md-6">
   <div  class="modal" style="display: block;">
  <div id="myOut" class="modal-content" >
    <div style="float:right;"><span class="close closeOut" id="closeOut">×</span></div>

    id num :<?php echo $project_id;?>
    
  <button type="button" class="collapsible" id="company_name">PO</button>
    <div class="content">
      <br>
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
?>
</div><br><button type="button" class="collapsible" id="company_name">Project acceptance</button>
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
  echo'';
?>
</div><!-- collapsible-->
      <div class="swal-footer">
      <button class="swal-button  closed2">Close</button>
    </div>

      </div>
    </div>
  </div>