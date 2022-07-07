

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
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
</style>
</head>
<body>
 <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Number1</div>
              <input type="num" id="Number of links" name="number1"class="former form-control">
          </div>
      </div>


       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Number2</div>
              <input type="num" id="Number of links" name="number2" class="former form-control">
          </div>
      </div>


<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
  $("#price1, #price2").change(function() { // input on change
    var result = parseFloat(parseInt($("#price1").val(), 10) * 100)
    / parseInt($("#price2").val(), 10);
    $('#rate').val(result||''); //shows value in "#rate"
  })
});
</script> 
</head>
<body>
<div id="price-div1"><label>price1</label><input id="price1" type="text"></div>
<div id="price-div2"><label>price2</label><input id="price2" type="text"></div>
<div id="rate-div"><label>rate</label><input id="rate" type="text">%</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
$("#Customer_name").change(function(){
var Units_ID=$(this).val();
var project =$('.project_Summary').val();

var post_id ='Customer_name='+Units_ID+'&project_Summary='+project;

      $.ajax({
        type: "POST",
        url: "upload_test.php",
        data: post_id,
        cache: false,
        success: function(cities){
         // console.log(cities);
        $("#chkveg").html(cities);
        
           } 
        });
    return false;
 });

});

</script>


<h2>Collapsibles</h2>

<p>A Collapsible:</p>
<button type="button" class="collapsible">Open Collapsible</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<p>Collapsible Set:</p>
<button type="button" class="collapsible">Open Section 1</button>
<div class="content">
  <p>Lorem ipsum dolor</p>
  <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Number of links</div>
              <input type="num" id="Number of links" name="number_of_links" placeholder="Number of links" class="former form-control">
          </div>
      </div>
</div>
<button type="button" class="collapsible">Open Section 2</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button type="button" class="collapsible">Open Section 3</button>
<div class="content">
  <p>Lorem ipsum</p>

  <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Presales solution</div>
     <input type="file" name="PO_PDF_2[]" id="PO_PDF_2" multiple class="former form-control" placeholder="upload (bulk should be available)" />

      </div>
  </div>
  <br>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Marketing approval</div>
     <input type="file" name="PO_PDF_3" class="former form-control" id="PO_PDF_3"placeholder="upload (bulk should be available)" />

      </div>
  </div>
</div>


<form  method="post" enctype="multipart/form-data">
<!-- <label for="file">Filename:</label>
<input type="file" name="file[]" id="file" multiple/> 
<br />
<label for="file">Filename:</label>
<input type="file" name="file[]" id="file" multiple/> 
<br />
 -->

<button type="button" class="collapsible">Open Collapsible</button>
<div class="content">
  <p>Lorem ipsum...</p>
</div>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon"style="float:left;"><i class="fa fa-asterisk"></i>
        PO</div>
     <input type="file" name="PO_PDF_1[]" id="PO_PDF_1" multiple class="former form-control"placeholder="upload (bulk should be available)" />

      </div>
  </div>
  <br>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Presales solution</div>
     <input type="file" name="PO_PDF_2[]" id="PO_PDF_2" multiple class="former form-control" placeholder="upload (bulk should be available)" />

      </div>
  </div>
  <br>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Marketing approval</div>
     <input type="file" name="PO_PDF_3" class="former form-control" id="PO_PDF_3"placeholder="upload (bulk should be available)" />

      </div>
  </div>
  <br>


<input type="submit" name="submit" value="Submit" />
</form>

<?php 
// if(isset($_POST['submit'])){
//  // Count total files
//  $countfiles = count($_FILES['file']['name']);
 
//  // Looping all files
//  for($i=0;$i<$countfiles;$i++){
//  	
//    $filename = $_FILES['file']['name'][$i];
   
//    // Upload file
//    move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
    
//  }
// } 
?>
project acceptence 


<?php
if(isset($_POST['submit'])){

    if(isset($_FILES['file']['tmp_name']))


    {
        // Number of uploaded files
        $num_files = count($_FILES['file']['tmp_name']);
        if($num_files <= 6){

        /** loop through the array of files ***/
        for($i=0; $i < $num_files;$i++)
        {
$target_dir = "PO_file/";
$imageFileType = strtolower(pathinfo($_FILES["PO_PDF_2"]["name"][$i],PATHINFO_EXTENSION));
$filename = strtolower($target_dir.basename(strtotime("10 seconds").'.'.$imageFileType));

            if ($_FILES["PO_PDF_2"]["size"] < 500000) {
			   echo 'your file is too large.';
			 $uploadOk = 0;
			}

   
            else
            {
            // // copy the file to the specified dir 
            // if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$_FILES['file']['name'][$i]))
            // {
            //     /*** give praise and thanks to the php gods ***/
            //     $messages[] = $_FILES['file']['name'][$i].' uploaded';
            // }
            	 if (move_uploaded_file($_FILES["PO_PDF_2"]["tmp_name"][$i], $filename)) {
 	echo 'uploaded'.$filename;
     }
                else
                {
                    /*** an error message ***/
                    $messages[] = 'Uploading '.$_FILES['file']['name'][$i].' Failed';
                }
            }
        }
    }
  }
    $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);
$insert_query = sqlsrv_query( $con ,"INSERT INTO  [EPMKS].[dbo].[tbl_Projects_details] 
    ([PO_PDF_1],[PO_PDF_2],[Creation_time],[Creator_username])

    VALUES 
    ('$target_file','$target_file2','$new_date','aya')");
 }
?>



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

</body>
</html>