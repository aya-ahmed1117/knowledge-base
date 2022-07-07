

<link rel="stylesheet" type="text/css" href="css/kpi_css.css">
<style type="text/css">
.row {
  
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

   
</style>

<?php
require_once("inc/config.inc");

    if(isset($_POST['Customer_name'])){$Customer_name = $_POST['Customer_name'];}
    if(isset($_POST['project_name'])){$project_name = $_POST['project_name'];}
    //if(isset($_POST['project_id'])){$project_id = $_POST['project_id'];}

    
if(isset($_POST['Customer_name'])){
$Customer_name = $_POST['Customer_name'];
 $sql = sqlsrv_query( $con ,"SELECT  *
   FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name like N'%$Customer_name'");

       while($row = sqlsrv_fetch_array($sql)){
  $project_id = $row['project_id'];
}


 $sql = sqlsrv_query( $con ,"SELECT  *
   FROM [EPMKS].[dbo].[tbl_Projects_details] where Customer_name like N'%$Customer_name'");
 
       while($row = sqlsrv_fetch_array($sql)){
     echo  $rows = '<div class="row"><input class="form-check-input" type="radio" id="chkveg" name="project_name[]" value="'.$row['project_name'].'" />'.$row['project_name'].'</div>';

      $project_name = $row['project_name'];
 }
}
?>

<br>
<br>


<script type="text/javascript">
    $('#chkveg').multiselect({
  //nonSelectedText: 'Select Framework',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
</script>