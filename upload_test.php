
<?php 
include("pages_home.php");

?>
<title>Add New Project</title>

<script type="text/javascript" src="jQuery/package/dist/sweetalert.min.js"></script>
</head>
<style> 

tr:nth-child(even) {
  background-color: lightgray;
}

.overlay:before {
  content:"";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: block;
  background: rgba(0, 0, 0, 0.6);
  position: fixed;
  z-index: 9;
}
.overlay .popup {
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: fixed;
  top: 0;
  left: 35%;
  padding: 25px;
  margin: 100px auto;
  z-index: 10;
  -webkit-transition: all 0.6s ease-in-out;
  -moz-transition: all 0.6s ease-in-out;
  transition: all 0.6s ease-in-out;
}
.overlay:target .popup {
    top: 100%;
    left: -50%;
}

@media screen and (max-width: 768px){
  .box{
    width: 70%;
  }
  .overlay .popup{
    width: 70%;
    left: 15%;
  }
}

.deleteMeetingClose {
    font-size: 1.5em;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 5px;
}
	 .grhdr {
    padding: 15px;
    height: 64px;background-color: #55608f;
    margin-top:0.1%;
  }
input ,.former{
    display: block;
    width: 50%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.former:focus{
    display: block;
    outline: 0;
    border-color: #383f88;
    box-shadow: 0 0 10px #383f88;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1pxsolid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.input-group-addon {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #495057;
    text-align: center;
    background-color: #e9ecef;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
  }

  .card-header {
    padding: 0.5rem 1rem;
    margin-bottom: 0;
    background: linear-gradient(to bottom, #8f87ba 0%, #713391 100%);
     /*#8f87ba;#713391 ;*/
    border-bottom: 1px solid rgba(0,0,0,.125);
}
.btn-submit:hover{
    border: 2px solid lightyellow;
 }
 textarea {
  width: 100%;
  min-height: 100px;
  background: url(http://i.imgur.com/2cOaJ.png) top -12px left / auto no-repeat, 
   linear-gradient(#F1F1F1 50%, #F9F9F9 50%) top left / 100% 32px;
  border: 1px solid #CCC;
  box-sizing: border-box;
  padding: 0 0 0 30px;
  resize: vertical;
  line-height: 16px;
  font-size: 13px;
}

body {
  margin: 0;
}

.overlay:before {
  content:"";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: block;
  background: rgba(0, 0, 0, 0.2);
  position: fixed;
  z-index: 9;
}
.overlay .popup {
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: fixed;
  top: 0;
  left: 35%;
  padding: 25px;
  margin: 100px auto;
  z-index: 10;
  -webkit-transition: all 0.6s ease-in-out;
  -moz-transition: all 0.6s ease-in-out;
  transition: all 0.6s ease-in-out;
}
.overlay:target .popup {
    top: 100%;
    left: -50%;
}

@media screen and (max-width: 768px){
  .box{
    width: 70%;
  }
  .overlay .popup{
    width: 70%;
    left: 15%;
  }
}

.deleteMeetingClose {
    font-size: 1.5em;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 5px;
}
</style>

<center>
 

  <img src="images/AddingNewproject">  
 
          <div class="col-md-6 floats" id="floats">
            <div class="card">
                <div class="card-header">
                
    <img src="images/pngkey.com-white-button"width="60" height="60" style="float: left;
   vertical-align: sub; bottom: 0; top: 0;"/>
   <h5 style="float: left;font-size:20px;color:white;padding:15.9px;text-align: left;
     height: 40%;width: 80%;">Please Fill The below data</h5>
    

</div>
  <div class="card-body card-block">
      <form method="post"  enctype="multipart/form-data">

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon" style="float:left;"><i class="fa fa-user"></i>
                        Customer name</div>

<input list="browser" type="search" name="Customer_name" placeholder="Select Customer_name..."class="former form-control"/> 

      
        
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              Project name</div>
              <input type="text" id="project_name" name="project_name" placeholder="project_name" class="former form-control">
          </div>
      </div>
  
  <br>


<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        PO(PDF)3</div>
     <input type="file" name="PO_PDF_3" class="former form-control" id="PO_PDF_3"/>

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

                          </form>
                        </div>
                    </div>
                </div>
                </center>
<?php 
if(isset($_POST['save'])){
  

    //////////////////////////////////////////////// PO pdf3
if(isset($_FILES['PO_PDF_3'])){
   $target_dir = "upload/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_3"]["name"],PATHINFO_EXTENSION));
$target_file3  = strtolower($target_dir.basename(strtotime("3 seconds").'.'.$imageFileType));
$uploadOk = 1;

if (empty($imageFileType)) {
  echo 'exist';
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["PO_PDF_3"]["tmp_name"], $target_file3)) {
     "The file ". htmlspecialchars( basename( $_FILES["PO_PDF_3"]["name"])). " has been uploaded.";}
   }
if(!empty($_FILES['PO_PDF_2'])){
   $target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_2"]["name"],PATHINFO_EXTENSION));
$target_file2  = strtolower($target_dir.basename(strtotime("5 seconds").'.'.$imageFileType));
 move_uploaded_file($_FILES["PO_PDF_2"]["tmp_name"], $target_file3);
     
$uploadOk = 1;
}elseif($_FILES['PO_PDF_2']['name']=='')
{
    //No file selected
    $target_file2 == $target_file3 ;
}
 
  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);
    //if($uploadOk != 0){
$admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[PO_PDF_2]= '$target_file2'
      ,[PO_PDF_3]= '$target_file3'
      ,[Creation_time]='$new_date'
      ,[Creator_username] ='$s_username'
      where project_id = 19 ");




  $insert_one = sqlsrv_query( $con , "INSERT INTO  [EPMKS].[dbo].[tbl_Files]
    ([Project_id]
      ,[File_name]
      ,[File_type]
      ,[Adding_time]
      ,[Adding_user]
      )

    VALUES 
    ('19','$target_file3','PO_PDF','$new_date','aya')");

      }
?>



<?php 
/*
if(isset($_POST['submit'])){

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);

//  // Count total files
//  $countfiles = count($_FILES['file']['name']);
 
//  // Looping all files
//  for($i=0;$i<$countfiles;$i++){
//    $filename = $_FILES['file']['name'][$i];
   
//    // Upload file
//    move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
    
//  }
// } 

 
/////'$Project_ACC'1
if(isset($_FILES['File_name'])){
    $target_dir = "upload/";
$imageFileType = strtolower(pathinfo($_FILES["File_name"]["name"],PATHINFO_EXTENSION));
$Project_ACC = strtolower($target_dir.basename(strtotime("now").'.'.$imageFileType));
$uploadOk = 1;

// Check if file already exists
if (file_exists($Project_ACC)) {
  
  $uploadOk = 0;
}
 if (move_uploaded_file($_FILES["File_name"]["tmp_name"], $Project_ACC)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["File_name"]["name"])). " has been uploaded.";
  } 

}


 $s_username = $_SESSION['username'];
$insert_one = sqlsrv_query( $con , "INSERT INTO  [EPMKS].[dbo].[tbl_Files]
    ([Project_id]
      ,[File_name]
      ,[File_type]
      ,[Adding_time]
      ,[Adding_user]
      )

    VALUES 
    ('19','$Project_ACC','PO_PDF','$new_date','aya')");

echo "INSERT INTO  [EPMKS].[dbo].[tbl_Files]
    ([Project_id]
      ,[File_name]
      ,[File_type]
      ,[Adding_time]
      ,[Adding_user]
      )

    VALUES 
    ('19','$Project_ACC','PO_PDF_1','$new_date','$s_username')";


}
*/
?>

<br>
<br>
<br>
 <script type="text/javascript" src="jQuery/jquery-2.2.4.js"></script>
  <script type="text/javascript" src="jQuery/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>

<script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
<script src="js/table2excel.js" type="text/javascript"></script>
<?php 
  include("footer.html");

?>
  
 