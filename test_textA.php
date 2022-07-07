
 <?php
        //require_once("inc/config.inc");
        include("pages_home.php");
 
      $self = $_SESSION['id'];
      $role_id = $_SESSION['role_id'];
         $usernames="";
         $Customer_name="";
      if(isset($_POST['username'])){$usernames = $_POST['username'];}
      if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
      if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
        
        //$Units ="";
        $groups = "";
        $groups2 = "";
        $units="";
        $units2="";
        $project_Summary="";
      ?>

  <head>
    <script data-require="angularjs@1.3.6" data-semver="1.3.6" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.6/angular.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="behave.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </head>

</h1>
	<form method="post" enctype="multipart/form-data">

   Value: <input type="text" name="Q1_What_was_done_well"class="Q1"id="input">
   <button>Submit</button>
<br>

<p>Add a value above and click Submit to add a new list.</p>
<ul id="list">
</ul>


   <script>
$(document).ready(function(){
   $('.Q1').click(function() {
    var mylist = $('#input').val();
    $('#list').append('<li>'+mylist+'</li>');
    $('#input').val("");
     return false;
 });
});
</script>

	<div class="container">
		<div class="line-nums"><span>1</span></div>
		<textarea id="demo" name="Q1_What_was_done_well"></textarea>
	</div>

<button type="button" class="btn btn-primary " style="width: 40%;" name="save">UpdateUpdateUpdate </button>

<?php 
  if(isset($_POST['save'])){

  echo$sqltime = date ("Y-m-d H:i:s");
  echo$date = strtotime($sqltime);
  echo$date = strtotime("+42 minute", $date);
 echo $new_date= date('Y-m-d H:i:s', $date);

 echo 'done';
 $s_username = $_SESSION['username'];

  if(isset($_POST['Q1_What_was_done_well'])){$Q1= $_POST['Q1_What_was_done_well'];}
  // if(isset($_POST['Q2_What_wasnt_done_well'])){$Q2 =$_POST['Q2_What_wasnt_done_well'];}
  // if(isset($_POST['Q3_Actions_taken'])){$Q3= $_POST['Q3_Actions_taken'];}
  // if(isset($_POST['Q4_What_else_could_be_improved'])){$Q4 =$_POST['Q4_What_else_could_be_improved'];}
echo $_POST['Q1_What_was_done_well'];

   

 ////update
    $updated =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[Q1_What_was_done_well]=N'aloooooooooooooooooo', [Creation_time]='$new_date'
    ,[Creator_username]='$s_username'

    where project_id = '91'");
    echo 'done';

    echo "UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[Q1_What_was_done_well]=N'aloooooooooooooooooo', [Creation_time]='$new_date'
    ,[Creator_username]='$s_username'

    where project_id = '91'";


     $insert_query = sqlsrv_query( $con ,"INSERT INTO  [EPMKS].[dbo].[tbl_Projects_details] 
    ([Q1_What_was_done_well],[PO_PDF],[Project_acceptance],
      [Creation_time],[Creator_username])

    VALUES 
    (N'$Q1','$target_file','$Project_ACC',
    '$new_date','$s_username')");
}

    ?>

    </form>
  </body>

</html>





   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<meta charset="utf-8">
<?php
  require_once("inc/config.inc");
  
  if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}  
  if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
  if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
  if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
  if(isset($_POST['Q1_What_was_done_well'])){$Q1N= $_POST['Q1_What_was_done_well'];}
  if(isset($_POST['Q2_What_wasnt_done_well'])){$Q2N =$_POST['Q2_What_wasnt_done_well'];}
  if(isset($_POST['Q3_Actions_taken'])){$Q3N= $_POST['Q3_Actions_taken'];}
  if(isset($_POST['Q4_What_else_could_be_improved'])){$Q4N =$_POST['Q4_What_else_could_be_improved'];}

  // echo '<input type="hidden" value="' . htmlspecialchars($Q1N) . '" />'."\n";


$escaped_Su1 = $_POST['Q1_What_was_done_well'];
  $Q1 = str_replace("'", "`", $escaped_Su1);

  $escaped_Su2 = $_POST['Q2_What_wasnt_done_well'];
  $Q2 = str_replace("'", "`", $escaped_Su2);

  $escaped_Su3 = $_POST['Q3_Actions_taken'];
  $Q3 = str_replace("'", "`", $escaped_Su3);

  $escaped_Su4= $_POST['Q4_What_else_could_be_improved'];
  $Q4 = str_replace("'", "`", $escaped_Su4);

  $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name ='$Customer_name' and  project_name ='$project_name' ");
        $index = sqlsrv_fetch_array($gogo);

       $old_PO_PDF= $index["PO_PDF"];
       $Q1_What= $index["Q1_What_was_done_well"];
       $Q2_What= $index["Q2_What_wasnt_done_well"];
       $Q3_What= $index["Q3_Actions_taken"];
       $Q4_What= $index["Q4_What_else_could_be_improved"];

  ////////*******************************************/*/**/*/*/*/

// $text = trim($_POST['Q1_What_was_done_well']);
// $textAr = explode("\n", $text);
// $textAr = array_filter($textAr); // remove any extra \r chars

// foreach ($textAr as $line) {
//     // Your sql Query here with $line as the string.
//   echo $line .' a ba2a';
// } 


/*/*//*/*///*/*/*/**/*

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);


 $s_username = $_SESSION['username'];

  //        // //insert 1
  //  $insert_one= sqlsrv_query($con,"INSERT INTO  [EPMKS].[dbo].[tbl_Projects_details_update_history]

  // SELECT [Customer_name]
  //     ,[project_name]
  //     ,[delivery_date]
  //     ,[PO_date]
  //     ,[number_of_links]
  //     ,[Total_RC_value]
  //     ,[project_Summary]
  //     ,[PO_PDF]
  //     ,[Project_acceptance]
  //     ,[Q1_What_was_done_well]
  //     ,[Q2_What_wasnt_done_well]
  //     ,[Q3_Actions_taken]
  //     ,[Q4_What_else_could_be_improved]
  //     ,'$new_date'
  //     ,'$s_username'
  //     ,'Update'
  //     ,'Lesson_Learned'
  //     ,[EPM_unit]
  // FROM [EPMKS].[dbo].[tbl_Projects_details]
  // where project_id ='$project_id' ");



   ////update
    $updated =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[Q1_What_was_done_well]=N'$Q1'+_+N'$Q1_What'
      ,[Q2_What_wasnt_done_well]=N'$Q2'+_+N'$Q2_What'
      ,[Q3_Actions_taken]=N'$Q3'+_+N'$Q3_What'
      ,[Q4_What_else_could_be_improved]=N'$Q4'+_+N'$Q4_What'
      ,[Creation_time]='$new_date'

    where project_id = '$project_id'");


    echo "UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[Q1_What_was_done_well]=N'$Q1'+ _ +N'$Q1_What'
      ,[Q2_What_wasnt_done_well]=N'$Q2'+ _ +N'$Q2_What'
      ,[Q3_Actions_taken]=N'$Q3'+_+N'$Q3_What'
      ,[Q4_What_else_could_be_improved]=N'$Q4'+ _ +N'$Q4_What'
      ,[Creation_time]='$new_date'

    where project_id = '$project_id'";

    if($updated){
echo '<script>
    swal({
    title: "Update Done newww",
  icon: "success",
  })
     </script>'; }


?>

   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>