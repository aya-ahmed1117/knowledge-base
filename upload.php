    <?php 
     require_once("inc/config.inc");
     ?>
<!-- <form method="post" enctype="multipart/form-data" action="">


<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        PO(PDF)3</div>
     <input type="file" name="PO_PDF_1" class="former form-control" id="PO_PDF_1"/>

      </div>
  </div>
  <br>


<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        PO(PDF)2</div>
     <input type="file" name="PO_PDF_2" class="former form-control" id="PO_PDF_2"/>

      </div>
  </div>

<div style="clear: both;">
      <button type="submit" class="btn-submit"  name="save"
      style="width: 30%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;background: linear-gradient(to left, #383f88 1%, #713391 60%);" title="Add New Order">Add New</button>
</div>

                          </form> -->
                     

<?php
//   if(isset($_POST['save'])){

// if($_FILES['PO_PDF_1']['name'] != ''){
//     $test = explode('.', $_FILES['PO_PDF_1']['name']);
//     $extension = end($test);    
//     $name = basename(strtotime("now").'.'.$extension);

//     $location = 'PO_file/'.$name;
//     move_uploaded_file($_FILES['PO_PDF_1']['tmp_name'], $location);

//     echo '<img src="'.$location.'" height="200" width="200" />';
// 	}

// 	//}
// /*
// ///////2*/
// //if(isset($_FILES['Project_acceptance'])){
// if($_FILES['PO_PDF_2']['name'] != ''){
//     $test2 = explode('.', $_FILES['PO_PDF_2']['name']);
//     $extension2 = end($test2);    
//     $name2 = basename(strtotime("now").'.'.$extension2);

//     $location2 = 'Project_ACC/'.$name2;
//     move_uploaded_file($_FILES['PO_PDF_2']['tmp_name'], $location2);

//     echo '<img src="'.$location2.'" height="100" width="100" />';
// 	if($_FILES['PO_PDF_2']['name'] = ''){
//     $extension2  == 'aya';
//   }
//   }

// 	//}

//   $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
//     set[PO_PDF_1] = '$location'
//       ,[PO_PDF_2] = '$location2'
//     where project_id = 17 ");

// }
 $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id = 17  ");
       while($index = sqlsrv_fetch_array($gogo)){
   //$index = sqlsrv_fetch_array($gogo);
     $PO_PDFsss_1 =$index['PO_PDF_1'];
     $PO_PDFsss_2 =$index['PO_PDF_2'];
     $PO_PDFsss_3 =$index['PO_PDF_3'];
     $Project_acceptance_1 =$index['Project_acceptance_1'];
     $Project_acceptance_2 =$index['Project_acceptance_2'];
     $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];

}
?>
<h1 align="center">file is empty example</h1>
<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<!-- <p><input type="file" name="file" /></p> -->
     <input type="file" name="PO_PDF_1" class="former form-control" id="PO_PDF_1"/>
<p><a href="<?php echo $PO_PDFsss_1;?>"download><i class="fa fa-paperclip" style="font-size:20px;"></i>PO_PDF_1</a>
  <br/>

<br>

     <input type="file" name="PO_PDF_2" class="former form-control" id="PO_PDF_2"/>
<p><a href="<?php echo $PO_PDFsss_2;?>"download>PO_PDF_2<i class="fa fa-paperclip" style="font-size:20px;"></i></a>
  <br>
<!--   <p><button name="check">check file</button></p>
 --> 
      <input type="file" name="PO_PDF_3" class="former form-control" id="PO_PDF_3"/>
<p><a href="<?php echo $PO_PDFsss_3;?>"download>PO_PDF_3<i class="fa fa-paperclip" style="font-size:20px;"></i></a>

  <br> 
 <div style="clear: both;">
      <button type="submit" class="btn-submit"  name="submit"
     title="Add New Order">Add </button>
</div>
</form>
<?php
//if(isset($_POST['check'])) {
if(isset($_POST['submit'])) {
 $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where project_id = 17  ");
       while($index = sqlsrv_fetch_array($gogo)){

     echo $PO_PDFsss_1 =$index['PO_PDF_1'];
     echo $PO_PDFsss_2 =$index['PO_PDF_2'];
     echo $PO_PDFsss_3 =$index['PO_PDF_3'];
     echo $Project_acceptance_1 =$index['Project_acceptance_1'];
     echo $Project_acceptance_2 =$index['Project_acceptance_2'];
     echo $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];

}
  // $file = $_FILES['file']['name'];
  // if($file) {
  //  echo '<p>File is not empty</p>';
  // }
  // else {
  //  echo '<p>File is empty</p>';
  // }
  // //////////////////
  /*

if($_FILES['PO_PDF_1']['name'] != ''){
    $test = explode('.', $_FILES['PO_PDF_1']['name']);
    $extension = end($test);    
    $name = basename(strtotime("now").'.'.$extension);

    $location = 'PO_file/'.$name;
    move_uploaded_file($_FILES['PO_PDF_1']['tmp_name'], $location);

    echo '<img src="'.$location.'" height="200" width="200" />';
  }*/

  $PO_PDF_1 = $_FILES['PO_PDF_1']['name'];
  if($_FILES['PO_PDF_1']['name']){
    $test = explode('.', $_FILES['PO_PDF_1']['name']);
    $extension = end($test);    
    $name = basename(strtotime("now").'.'.$extension);

    $location = 'PO_file/'.$name;
    move_uploaded_file($_FILES['PO_PDF_1']['tmp_name'], $location); 
  }
  if($PO_PDF_1) {
    echo'<p>File (1)</p>';
    echo '<img src="'.$location.'" height="250" width="250" />';
  }
  else {
    '<p>File (1)</p>';
   $location == $PO_PDFsss_1;
  }
  ///////////////////PO_PDF_2**************************************
  if(isset($_FILES['PO_PDF_2']['name'])){
  $PO_PDF_2 = $_FILES['PO_PDF_2']['name'];
  if($_FILES['PO_PDF_2']['name']){
    $test = explode('.', $_FILES['PO_PDF_2']['name']);
    $extension = end($test);    
    $name = basename(strtotime("5 seconds").'.'.$extension);

    $PO_PDF2 = 'Project_ACC/'.$name;
    move_uploaded_file($_FILES['PO_PDF_2']['tmp_name'], $PO_PDF2); 
  }
  if($PO_PDF_2) {
   echo '<p>File (2)</p>';
   //$PO_PDF_2 = 'not empty';
   echo '<img src="'.$PO_PDF2.'" height="200" width="200" />';
  }
  else {
   echo '<p>File (2)</p>';
   $PO_PDF2 == $PO_PDFsss_2;
  }
}
///////////////////PO_PDF_2**************************************
  if(isset($_FILES['PO_PDF_3']['name'])){
  $PO_PDF_2 = $_FILES['PO_PDF_3']['name'];
  if($_FILES['PO_PDF_3']['name']){
    $test = explode('.', $_FILES['PO_PDF_3']['name']);
    $extension = end($test);    
    $name = basename(strtotime("8 seconds").'.'.$extension);

    $PO_PDF3 = 'Project_ACC/'.$name;
    move_uploaded_file($_FILES['PO_PDF_3']['tmp_name'], $PO_PDF3);  
  }
  if($PO_PDF_2) {
    '<p>File (3)</p>';
   echo '<img src="'.$PO_PDF3.'" height="300" width="300" />';
  }
  else {
    '<p>File (3)</p>';
   $PO_PDF3 == $PO_PDFsss_3;
  }
}
   $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set [PO_PDF_1] =  CASE  
        WHEN '$location' = '' THEN '$PO_PDFsss_1' 
        ELSE  '$location'
    END
      ,[PO_PDF_2]=  CASE  
        WHEN '$PO_PDF2' = '' THEN '$PO_PDFsss_2' 
        ELSE  '$PO_PDF2'
    END
      ,[PO_PDF_3]=  CASE  
            WHEN '$PO_PDF3' = '' THEN '$PO_PDFsss_3' 
            ELSE  '$PO_PDF3'
        END
    where project_id = 17 ");

}
?>