
<style type="text/css">
/*.row {
  
    margin-right: 0;
    margin: 0;
    top: auto;
    padding: 10px;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 5px;
    background-color: #fff;
    width: 30%;
}


 #chkveg li {
      display: list-item;
    float: left;
     margin: 0;
    cursor: pointer;
    padding: 3px;
    font-stretch: expanded;
    font-size: 17px;
}
input ,.former{
    display: block;
    width: 20%;
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
*/
  /* #chkveg{
    color: red;
    font-size: 30px;
    z-index: 1000;

   }*/
</style>
<?php
require_once("inc/config.inc");

    if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
    if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
    //if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}

      $error_noDtaa = sqlsrv_query( $con ,"SELECT ISNULL((SELECT AccountName
  
  FROM [EPMKS].[dbo].[tbl_customers]
  where AccountName = N'$Customer_name'),'no_data') resultt");
      $error_noDtata=sqlsrv_fetch_array($error_noDtaa);
      $results2= $error_noDtata['resultt'];
if($results2 =='no_data'){
  echo '<script>
    swal({
    title: "Wrong Data(Customer name not in the list)",
  icon: "warning",
  })
     </script>';

    }
// if(isset($_POST['Customer_name'])){
// $Customer_name = $_POST['Customer_name'];
// if(isset($_POST['project_name'])){
//   $project_name = $_POST['project_name'];
  $str_project_name = str_replace("'", "`", $project_name);

       $error_query = sqlsrv_query( $con ,"SELECT ISNULL((SELECT Customer_name
  
  FROM [EPMKS].[dbo].[tbl_Projects_details]
  where Customer_name = N'$Customer_name' and project_name = '$str_project_name'),'nothing') resultt");
      $error=sqlsrv_fetch_array($error_query);
      $results= $error['resultt'];
      
     if($results !='nothing'){
      echo '<script>
    swal({
    title: "Data already exists",
  icon: "error",
  })
     </script>
     <script>
     setTimeout(function(){
          window.location.href=window.location.href 
     }, 2000); </script>';
  }

 // else if($results =='nothing'){
 //      echo "Done uouo";
  
 //  }
else{
  echo '';
 /////}}
}

?>

<br>
<br>

<script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>