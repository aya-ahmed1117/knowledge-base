




<?php

$filename = basename($_GET['file']);
// Specify file path.
$path = 'E:/PO_file'; // '/uplods/'
$download_file =  $path.$filename;
// ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "zip"
// && $imageFileType != "gif" && $imageFileType != "csv" && $imageFileType != "xlsx" && $imageFileType != "pdf" 
// && $imageFileType != "msg")

if(!empty($filename)){
    // Check file is exists on given path.
    //if(file_exists($download_file)){
// header("Content-Type: image/png");	
// header("Cache-Control: public");
// header("Content-Description: File Transfer");
// header("Content-Transfer-Encoding: binary");
header('Content-Disposition: attachment; filename="'.$filename.'"');  
      readfile($download_file); 
      exit;
    // }
    // else
    // {
    //   echo 'File does not exists on given path';
    // }
 }


		// $file = basename($_GET['file']);
		// $file = 'PO_file/'.$file;

		// if(!file_exists($file)){ // file does not exist
		//     die('file not found');
		// } else {
		//     header("Cache-Control: public");
		//     header("Content-Description: File Transfer");
		//     header("Content-Disposition: attachment; filename=$file");
		//     header("Content-Type: application/zip");
		//     header("Content-Transfer-Encoding: binary");

		//     // read the file from disk
		//     readfile($file);
		// }
		
?>
<?php
/*
//Database class with PDO (MySQL/MariaDB)
//require_once("database.php"); //If you need this, write to office@predl.cc i'll send you the db class
include("inc/config.inc");
//Connect to database
		// $database = new Database();
		// $pdo = $database->dbConnection();

//Get ID from GET (better POST but for easy debug...)
// if (isset($_GET["project_id"])) {
// 	$id=(int)$_GET["project_id"];
// } else {
//   echo "Wrong input";
//   exit;
// }

//Prepare PDO SQL
 //$q = $pdo->prepare("SELECT * FROM `table_with_image` WHERE `id`=:p_id");
  $selected = sqlsrv_query($con ,"SELECT * FROM [EPMKS].[dbo].[tbl_Projects_details] ");
  while( $output_query = sqlsrv_fetch_array($selected)){

// //Add some data
// $q->bindparam(":p_id", $id); //Filter user input, no sanitize necessary here

// //Do the db query
// $q->execute();

// //If something found (always only 1 record!)
  //if ($selected->rowCount() == 1) {
  
//   	//Get the content of the record into $row
// 	$row = $q->fetch(PDO::FETCH_ASSOC); //Everything with id=$id should be in record buffer
  	
  	//This is the image blob mysql item  
  	$image = $output_query['PO_PDF_1'];
  	
  	//Clean disconnect
  	//$database->disconnect();
    
  	//Now start the header, caution: do not output any other header or other data!
  	header("Content-type: image/jpeg");
    header('Content-Disposition: attachment; filename="table_with_image_image'.$id.'.jpg"');
    header("Content-Transfer-Encoding: binary"); 
    header('Expires: 0');
    header('Pragma: no-cache');
    header("Content-Length: ".strlen($image));
    //Output plain image from db
	echo $image;
}*/
// } else {
//   //Nothing found with that id, output some error
//   $database->disconnect();
//   echo "No image found";
// }

// //No output and exceution further this point
// exit();
// ?>