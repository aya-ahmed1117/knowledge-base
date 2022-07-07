   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
  require_once("inc/config.inc");
  if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}  
  if(isset($_POST['project_Summary'])){$project_Summary = $_POST['project_Summary'];}
  if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
  if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
  if(isset($_POST['delivery_date'])){$delivery_date = $_POST['delivery_date'];}
  if(isset($_POST['PO_date'])){$PO_Date = $_POST['PO_date'];}
  if(isset($_POST['number_of_links'])){$number_of_links = $_POST['number_of_links'];}
  if(isset($_POST['Total_RC_value'])){$Total_RC_value = $_POST['Total_RC_value'];}
  if(isset($_POST['EPM_unit'])){$EPM_unit = $_POST['EPM_unit'];}
  if(isset($_POST['Transmission_media'])){$Transmission_media = $_POST['Transmission_media'];}

  $sqltime = date ("Y-m-d H:i:s");
  $date = strtotime($sqltime);
  $date = strtotime("+42 minute", $date);
  $new_date= date('Y-m-d H:i:s', $date);


 $s_username = $_SESSION['username'];



         // //insert 1
   $insert_one= sqlsrv_query($con,"INSERT INTO  [EPMKS].[dbo].[tbl_Projects_details_update_history]

  SELECT [Customer_name]
      ,[project_name]
      ,[delivery_date]
      ,[PO_date]
      ,[number_of_links]
      ,[Total_RC_value]
       ,[Transmission_media]
      ,[project_Summary]
      ,[PO_PDF_1]
      ,[PO_PDF_2]
      ,[PO_PDF_3]
      ,[Project_acceptance_1]
      ,[Project_acceptance_2]
      ,[Project_acceptance_3]
      ,[Project_acceptance_4]
      ,[Project_acceptance_5]
      ,[Q1_What_was_done_well]
      ,[Q2_What_wasnt_done_well]
      ,[Q3_Actions_taken]
      ,[Q4_What_else_could_be_improved]
      ,'$new_date'
      ,'$s_username'
      ,'Update'
      ,'project'
      ,[EPM_unit]
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where project_id ='$project_id' ");

     // //insert 2
    $insert_two= sqlsrv_query($con,"INSERT INTO  [EPMKS].[dbo].[tbl_updated_item] ([project_id]
            ,[User_updating]
            ,[Time_of_updating]
            ,[item_updated_type])

        values ('$project_id','$s_username','$new_date','updating project')");

      // if($insert_two){
      //   echo '<script>
      //       swal({
      //       title: "Done insert query TWO ",
      //     icon: "success",
      //     })
      //        </script>'; }

  $escaped_Summary = $_POST['project_Summary'];
  $str_Summary = str_replace("'", "`", $escaped_Summary);

   $gogo = sqlsrv_query( $con ,"SELECT  *
         FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name =N'$Customer_name' and  project_name =N'$project' ");
        $index = sqlsrv_fetch_array($gogo);
 
      $PO_PDF_1 =$index['PO_PDF_1'];
      $PO_PDF_2 =$index['PO_PDF_2'];
      $PO_PDF_3 =$index['PO_PDF_3'];
      $Project_acceptance_1 =$index['Project_acceptance_1'];
      $Project_acceptance_2 =$index['Project_acceptance_2'];
      $Project_acceptance_3 =$index['Project_acceptance_3'];
      $Project_acceptance_4 =$index['Project_acceptance_4'];
      $Project_acceptance_5 =$index['Project_acceptance_5'];

////////////////////////*********************************************************
  //PO_PDF_1
  // if($_FILES['PO_PDF_1']['name'] != ''){
  //   $test = explode('.', $_FILES['PO_PDF_1']['name']);
  //   $extension = end($test);    
  //   $name = basename(strtotime("now").'.'.$extension);

  //   $location = 'PO_file/'.$name;
  //   move_uploaded_file($_FILES['PO_PDF_1']['tmp_name'], $location);

  //   //echo  '<img src="'.$location.'" height="200" width="200" />';
  //   }
    if(isset($_FILES['PO_PDF_1'])){
       $target_dir = "PO_file/";
    $imageFileType = strtolower(pathinfo($_FILES["PO_PDF_1"]["name"],PATHINFO_EXTENSION));
    $location   = strtolower($target_dir.basename(strtotime("now").'.'.$imageFileType));
    $uploadOk == 1;
 //if(empty($location)){
    if(empty($_FILES["PO_PDF_1"])){
    $uploadOk == 0;
    echo $location == $index['PO_PDF_1'];
}
}
//PO_PDF_2
 if(isset($_FILES['PO_PDF_2']['name'])){
    $test = explode('.', $_FILES['PO_PDF_2']['name']);
    $extension2 = end($test);    
    $name = basename(strtotime("2 seconds").'.'.$extension2);

    $location2 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['PO_PDF_2']['tmp_name'], $location2);
    $uploadOk = 1;
if(empty($_FILES["PO_PDF_2"])){
    $uploadOk = 0;
    $location2 = $index['PO_PDF_2'];
}
}
//PO_PDF_3
 if(isset($_FILES['PO_PDF_3']['name'])){
    $test = explode('.', $_FILES['PO_PDF_3']['name']);
    $extension3 = end($test);    
    $name = basename(strtotime("5 seconds").'.'.$extension3);

    $location3 = 'PO_file/'.$name;
    move_uploaded_file($_FILES['PO_PDF_3']['tmp_name'], $location3);
    $uploadOk = 1;
       
        if(empty($_FILES["PO_PDF_3"]["name"])){
    $uploadOk == 0;
    echo $location3 = $PO_PDF_3;
        }
        }
////////////////////////*********************************************************

// //Project_acceptance_1
// if($_FILES['Project_acceptance_1']['name'] != ''){
//     $test2 = explode('.', $_FILES['Project_acceptance_1']['name']);
//     $extension1 = end($test2);    
//     $name2 = basename(strtotime("6 seconds").'.'.$extension1);
//     $project = 'Project_ACC/'.$name2;
//     move_uploaded_file($_FILES['Project_acceptance_1']['tmp_name'], $project);
//     }
// ///Project_acceptance_2
// if($_FILES['Project_acceptance_2']['name'] != ''){
//     $test2 = explode('.', $_FILES['Project_acceptance_2']['name']);
//     $extension2 = end($test2);    
//     $name2 = basename(strtotime("4 seconds").'.'.$extension2);
//     $project2 = 'Project_ACC/'.$name2;
//     move_uploaded_file($_FILES['Project_acceptance_2']['tmp_name'], $project2);
//     }
// ///Project_acceptance_3
// if($_FILES['Project_acceptance_3']['name'] != ''){
//     $test2 = explode('.', $_FILES['Project_acceptance_3']['name']);
//     $extension3 = end($test2);    
//     $name2 = basename(strtotime("8 seconds").'.'.$extension3);
//     $project3 = 'Project_ACC/'.$name2;
//     move_uploaded_file($_FILES['Project_acceptance_3']['tmp_name'], $project3);
//     }
// ///Project_acceptance_4
// if($_FILES['Project_acceptance_4']['name'] != ''){
//     $test2 = explode('.', $_FILES['Project_acceptance_4']['name']);
//     $extension4 = end($test2);    
//     $name2 = basename(strtotime("15 seconds").'.'.$extension4);
//     $project4 = 'Project_ACC/'.$name2;
//     move_uploaded_file($_FILES['Project_acceptance_4']['tmp_name'], $project4);
//     }
// //Project_acceptance_5
// if($_FILES['Project_acceptance_5']['name'] != ''){
//     $test2 = explode('.', $_FILES['Project_acceptance_5']['name']);
//     $extension5 = end($test2);    
//     $name2 = basename(strtotime("10 seconds").'.'.$extension5);
//     $project5 = 'Project_ACC/'.$name2;
//     move_uploaded_file($_FILES['Project_acceptance_5']['tmp_name'], $project5);
//     }
 
////update
    if($uploadOk == 1 ){
    $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_Date'
      ,[number_of_links] = '$number_of_links'
      ,[Total_RC_value] = '$Total_RC_value'
      ,[Transmission_media]='$Transmission_media'
      ,[project_Summary] = N'$str_Summary'
      ,[PO_PDF_1] = '$location'
      ,[PO_PDF_2] = '$location2'
      ,[PO_PDF_3] = '$location3'
      -- ,[Project_acceptance_1] = '$project'
      -- ,[Project_acceptance_2] = '$project2'
      -- ,[Project_acceptance_3] = '$project3'
      -- ,[Project_acceptance_4] = '$project4'
      -- ,[Project_acceptance_5] = '$project5'
      ,[Creation_time]='$new_date'

      ,[Creator_username] ='$s_username'
      ,[EPM_unit] = '$EPM_unit'

    where project_id = '$project_id'");
}
 if($uploadOk == 0){
    $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_Date'
      ,[number_of_links] = '$number_of_links'
      ,[Total_RC_value] = '$Total_RC_value'
      ,[Transmission_media]='$Transmission_media'
      ,[project_Summary] = N'$str_Summary'
      ,[PO_PDF_1] = '$PO_PDF_1'
      ,[PO_PDF_2] = '$PO_PDF_2'
      ,[PO_PDF_3] = '$PO_PDF_3'
      -- ,[Project_acceptance_1] = '$project'
      -- ,[Project_acceptance_2] = '$project2'
      -- ,[Project_acceptance_3] = '$project3'
      -- ,[Project_acceptance_4] = '$project4'
      -- ,[Project_acceptance_5] = '$project5'
      ,[Creation_time]='$new_date'

      ,[Creator_username] ='$s_username'
      ,[EPM_unit] = '$EPM_unit'

    where project_id = '$project_id'");
}


  /* ////update
    $admin_approved =sqlsrv_query( $con ,"UPDATE [EPMKS].[dbo].[tbl_Projects_details]
    set[delivery_date] = '$delivery_date'
      ,[PO_date] = '$PO_Date'
      ,[number_of_links] = '$number_of_links'
      ,[Total_RC_value] = '$Total_RC_value'
      ,[Transmission_media]='$Transmission_media'
      ,[project_Summary]      = N'$str_Summary'
      ,[PO_PDF_1]             =  CASE  
                        WHEN '$location' = '' THEN '$PO_PDF_1' 
                        ELSE  '$location'
                    END
      ,[PO_PDF_2]             =  CASE  
                        WHEN '$location2' = '' THEN '$PO_PDF_2' 
                        ELSE  '$location2'
                    END

      ,[PO_PDF_3]             =  CASE  
                        WHEN '$location3' = '' THEN '$PO_PDF_3' 
                        ELSE  '$location3'
                    END
      ,[Project_acceptance_1] = '$project'
      ,[Project_acceptance_2] = '$project2'
      ,[Project_acceptance_3] = '$project3'
      ,[Project_acceptance_4] = '$project4'
      ,[Project_acceptance_5] = '$project5'

      ,[Creator_username] ='$s_username'
      ,[EPM_unit] = '$EPM_unit'

    where project_id = '$project_id'");

*/
?>

   <script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>