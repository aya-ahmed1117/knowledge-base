
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
</style>
<body>
 
<center>
   <div id="chkveg" style="display: none;"> </div>

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

<input list="browser" type="search" id="Customer_name" name="Customer_name" placeholder="Select Customer_name..."class="former form-control Customer_name" required /> 

<datalist id="browser" name="Customer_name" class="Customer_name">

     <?php
     //
$checks = sqlsrv_query( $con ,"SELECT  [AccountNumber],[AccountName]
        FROM [EPMKS].[dbo].[tbl_customers] order by AccountName");
  while($outputs = sqlsrv_fetch_array($checks)){
        $rows = '<option ';
        $rows .= $outputs['AccountName'] ? "selected" : " ";;
        $rows .= ' value="'.$outputs['AccountName'].'">'.$outputs['AccountName'].'</option>';
  
  echo $rows;
}

  ?>
 </datalist> 
                      </div>
                  </div>
         <br>       
        
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              Project name</div>
              <input type="text" id="project_name" name="project_name" placeholder="project_name" class="former form-control project_name" required="true">
          </div>
      </div>
  
   <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i>Delivery Date</div>
              <input type="date" id="Delivery Date" name="delivery_date" placeholder="Delivery Date" class="former form-control delivery_date">
          </div>
      </div>
 
    <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i> PO Date</div>
              <input type="date" id="PO Date" name="PO_Date" placeholder="PO Date" 
              class="former form-control PO_Date">
          </div>
      </div>
      <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Number of links</div>
              <input type="number" id="Number of links" name="number_of_links" placeholder="Number of links" class="former form-control number_of_links">
          </div>
      </div>
      <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> Delivered links</div>
              <input type="number" id="delivered_links" name="delivered_links" placeholder="delivered links" class="former form-control delivered_links">
          </div>
      </div>
      <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Total RC LE</div>
              <input type="number" id="Project Summary" name="Total_RC_value" 
              placeholder="Total RC value (L.E)" min="0"   step="1" class="former form-control Total_RC_value">
          </div>
      </div>
    <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
          Trasmission media</div>
           <select name="Transmission_media"  class="former form-control Transmission_media" id="Transmission_media" 
           placeholger="Transmission_media">
              <option value="0"  selected>Select Media</option>
              <option value="4G">4G</option>
              <option value="Fiber">Fiber</option>
              <option value="Local_Loop">Local Loop</option>
              <option value="Local loop & 4G">Local loop & 4G</option>
              <option value="Wimax">Wimax</option>
            </select>
      </div>
  </div>

  <br>       
     
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              HW type</div>
              <input type="text" id="Hw_type" name="Hw_type" placeholder="Add HW type ..." class="former form-control Hw_type">
          </div>
      </div>

   <br>
      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Down Payment (EGP)</div>
              <input type="number" id="Down_Payment" name="Down_Payment" 
              placeholder="Down Payment (EGP) ..." min="0"   step="1" class="former form-control Down_Payment">
          </div>
      </div>

   <br>
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-clock-o"></i>Down-Payment Date</div>
              <input type="date" id="Down_Payment_Date" name="Down_Payment_Date"class="former form-control Down_Payment_Date">
          </div>
      </div>
 
    <br>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;">
                <i class="fa fa-asterisk"></i>
              Total NRC LE</div>
              <input type="number" id="Total_NRC_value" name="Total_NRC_value" 
              placeholder="Total NRC value (EGP) ..." min="0"   step="1" class="former form-control Total_NRC_value">
          </div>
      </div>
            <br>
    <button type="button" class="collapsible" id="company_name">PO Documents</button>
    <div class="content">
      <br>


  <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon"style="float:left;"><i class="fa fa-asterisk"></i>
        PO</div>
     <input type="file" name="PO_PDF_1" class="former form-control PO_PDF_1" id="PO_PDF_1"/>

      </div>
  </div>

  <br>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Presales solution</div>
     <input type="file" name="Presales_solution" class="former form-control Presales_solution" id="Presales_solution"/>

      </div>
  </div>
  <br>

<div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Marketing approval</div>
     <input type="file" name="Marketing_approval" class="former form-control Marketing_approval" id="Marketing_approval" />

      </div>
  </div>
 <br>
 <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        Extra_approvals</div>
     <input type="file" name="Extra_approvals" class="former form-control Extra_approvals" id="Extra_approvals" />

      </div>
  </div>
 <br>
 <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
        HW LOI</div>
     <input type="file" name="HW_LOI" class="former form-control HW_LOI" id="HW_LOI" />

      </div>
  </div>
 <br>



</div><!-- collapsible-->
  <br>
  <br>

<button type="button" class="collapsible" id="company_name">Project acceptance</button>
    <div class="content">
      <br>
  <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)1</div>
    <input type="file" name="Project_acceptance_1"class="form-control Project_acceptance_1" id="Project_acceptance_1" />

      </div>
  </div>
       <br> 

    <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)2</div>
    <input type="file" name="Project_acceptance_2"class="form-control Project_acceptance_2" id="Project_acceptance_2" />

      </div>
  </div>
       <br>
    <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)3</div>
    <input type="file" name="Project_acceptance_3"class="form-control Project_acceptance_3"id="Project_acceptance_3" />

      </div>
  </div>
       <br>

      <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)4</div>
    <input type="file" name="Project_acceptance_4"class="form-control"id="Project_acceptance_4" />

      </div>
  </div>
       <br>

      <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon" style="float:left;">Acceptance(PDF)5</div>
    <input type="file" name="Project_acceptance_5"class="form-control Project_acceptance_5"id="Project_acceptance_5" />

      </div>
  </div>
  <br>
  </div><!-- collapsible-->
  <br>
       <br>      
        
       <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i> 
              Project Summary</div>
              <!-- <input type="text" id="project_Summary" name="project_Summary" placeholder="project_Summary" class="former form-control"> -->
              <textarea rows="5" cols="40" class="project_Summary" id="project_Summary"
               name="project_Summary"></textarea>
          </div>
      </div>
        <br>

          <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" style="float:left;"><i class="fa fa-asterisk"></i>
                EPM Unit</div>
                 <select name="EPM_unit" required class="former form-control EPM_unit" id="EPM_unit" 
                 placeholger="EPM_unit">
                    <option value="0"  selected>Select Unit</option>
                    <option value="KAM">KAM</option>
                    <option value="BS">BS</option>
                    <option value="Fiber and prewimax">Fiber & prewimax</option>
                    <option value="large and MegaProject">large & Mega Project</option>
                  </select>
            </div>
        </div>
   
                  <br>

  
<div style="clear: both;">

   <style type="text/css">
  .btn-primary:hover{
  width: 50%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;background: linear-gradient(to left, #383f88 1%, #713391 60%);
}
</style>
   <button style="width: 50%;padding: 10px;font-size: 15px;"
type="submit"
id="submit"name="save" value="Add data" class="btn btn-primary submit">Add New</button>

    <!--   <button type="submit" class="btn-submit submit" id="submit"name="save"
      style="width: 30%;padding: 10px;color: #fff;font-size: 15px; border-radius: 20px 20px 20px 20px;background: linear-gradient(to left, #383f88 1%, #713391 60%);"
       title="Add New Order">Add New</button> -->
</div>

                          </form>
                        </div>
                    </div>
                </div>
                </center>
<script type="text/javascript">
  
   $(document).ready(function(){
  //  $('#Customer_name, #project_name').change(function() {
    $('#Customer_name , #project_name').on('change',function(){
    var Customer_name = $('.Customer_name').val();///$(this).val();
    var project_name = $('.project_name').val();//$(this).val();

    var post_id ='Customer_name='+Customer_name+'&project_name='+project_name;

event.preventDefault();
if(Customer_name != '' && project_name != ''){
          $.ajax({
            type: "POST",
            url: "validate.php",
            data: post_id,
            cache: false,
            success: function(data){
           // console.log(data);
           // console.log(post_id);
          $("#chkveg").html(data);
            
               } 
            });
        return false;
      }
     });

    });
    
</script>


                <script>

$(document).ready(function(){
  $('.submit').click(function(){
     // var project_id = $(this).val();
      
      var Customer_name = $('.Customer_name').val();
      var project_name = $('.project_name').val();
      var delivery_date = $('.delivery_date').val();
      var delivered_links = $('.delivered_links').val();    
      var PO_Date= $('.PO_Date').val();
      var number_of_links= $('.number_of_links').val();
      var Total_RC_value = $('.Total_RC_value').val();
      var EPM_unit= $('.EPM_unit').val();
      var Transmission_media= $('.Transmission_media').val();
      var Hw_type = $('.Hw_type').val();
      var Down_Payment = $('.Down_Payment').val();
      var Down_Payment_Date = $('.Down_Payment_Date').val();
      var Total_NRC_value = $('.Total_NRC_value').val();
    var submit = document.getElementById('submit');
      var propert = document.getElementById('PO_PDF_1').files[0];
      var propert2 = document.getElementById('Presales_solution').files[0];
      var propert3 = document.getElementById('Marketing_approval').files[0];
      var propert4 = document.getElementById('Extra_approvals').files[0];
      var propert5 = document.getElementById('HW_LOI').files[0];
      var property2 = document.getElementById('Project_acceptance_1').files[0];
      var project2 = document.getElementById('Project_acceptance_2').files[0];
      var project3 = document.getElementById('Project_acceptance_3').files[0];
      var project4 = document.getElementById('Project_acceptance_4').files[0];
      var project5 = document.getElementById('Project_acceptance_5').files[0];
      var project =$('.project_Summary').val();

// var dataString ='project_Summary='+project+'&Customer_name='+Customer_name+'&project_name='+project_name+'&delivery_date='+delivery_date+'&delivered_links='+delivered_links+'&PO_Date='+PO_Date+'&number_of_links='+number_of_links+'&Total_RC_value='+Total_RC_value+'&EPM_unit='+EPM_unit+'&Transmission_media='+Transmission_media+'&Hw_type='+Hw_type+'&Down_Payment='+Down_Payment+'&Down_Payment_Date='+Down_Payment_Date+'&Total_NRC_value='+Total_NRC_value+'&PO_PDF_1='+propert+'&Presales_solution='+propert2+'&Marketing_approval='+propert3+'&Extra_approvals='+propert4+'&HW_LOI='+propert5
event.preventDefault();
      var formData = new FormData();
      formData.append("PO_PDF_1",propert);
      formData.append("Presales_solution",propert2);
      formData.append("Marketing_approval",propert3);
      formData.append("Extra_approvals",propert4);
      formData.append("HW_LOI",propert5);
      formData.append("Project_acceptance_1",property2);
      formData.append("Project_acceptance_2",project2);
      formData.append("Project_acceptance_3",project3);
      formData.append("Project_acceptance_4",project4);
      formData.append("Project_acceptance_5",project5);
      formData.append("delivery_date",delivery_date);
      formData.append("PO_Date",PO_Date);
      formData.append("project_Summary",project);
      formData.append("Customer_name",Customer_name);
      formData.append("project_name",project_name);
      formData.append("number_of_links",number_of_links);
      formData.append("delivered_links",delivered_links);
      formData.append("Total_RC_value",Total_RC_value);
      formData.append("EPM_unit",EPM_unit);
      formData.append("Transmission_media",Transmission_media);
      formData.append("Hw_type",Hw_type);
      formData.append("Down_Payment",Down_Payment);
      formData.append("Down_Payment_Date",Down_Payment_Date);
      formData.append("Total_NRC_value",Total_NRC_value);
      formData.append("project_id",$(this).val());
    //  if(!Customer_name){
        if(Customer_name == '' || project_name == ''){
            //$('.submit').html("<strong class='text-danger'>*** Please enter all details</strong>");
            swal({ title: "*** Please enter all details", icon: "warning",});
        }
// //         console.log(validate);

// if(validate != 'nothing'){
//        $('.submit').html("<strong class='text-danger'>Data already exists</strong>");

//     console.log(validate);
//         }
//     if(validate == 'nothing'){ 
   if(Customer_name != '' && project_name != ''){ 
    
   $.ajax({
    url: 'ajax_adding.php',
    type: 'POST',
    data:formData,  
    contentType:false,
    cache:false,
    processData:false,

    beforeSend:function(data){

    $('#submit').html('Loading...');
    $('#submit').prop('disabled', true);
          },
   // success: function(data){ 
      success: function (data) {
   //console.log(data);
   swal({ title: "Done... :)", icon: "success",});
  setTimeout(function(){
         window.location.href=window.location.href 
    }, 3000); 
    $('#submit').html('done...');
   
    }, 
    error: function(data){
      swal({ title: "Error", icon: "warning",});

          //console.log(err);
        }
      });
    return false;
   }
      });

     });
     
  </script>
<?php
// }
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

<script src="jQuery/jquery.min.js"></script>
<script src="bootsrab.min"></script>                       
<script type="text/javascript" src="jQuery/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
 include ("footer.html");
 ?>
