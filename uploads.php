<!DOCTYPE html>
<html>
<head>
	<title>ImageUpload</title>
</head>
<body>
	<form action="uploads.php" method="post" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username">
		<br>
		<label>UploadImage</label>
		<input type="file" name='myfile'>
		<br/>
		<input type="submit" value="upload">
	</form>
</body>
</html>
  
  <?php
	$user=$_POST['username'];
	$image=$_FILES['myfile'];
	echo "Hello $user <br/>";
	echo "File Name<b>::</b> ".$image['name'];

	move_uploaded_file($image['tmp_name'],"E:/PO_file/".$image['name']);
	//here the "photos" folder is in same folder as the upload.php, 
	//otherwise complete url has to be mentioned

	if(isset($_FILES['image']))
                {
                    $img_name = $_FILES['image']['name'];      //getting user uploaded name
                    $img_type = $_FILES['image']['type'];       //getting user uploaded img type
                    $tmp_name = $_FILES['image']['tmp_name'];   //this temporary name is used to save/move file in our folder.
                    
                    // let's explode image and get the last name(extension) like jpg, png
                    $img_explode = explode(".",$img_name);
                    $img_ext = end($img_explode);   //here we get the extension of an user uploaded img file

                    $extension= ['png','jpeg','jpg','gif'];
                    $filename = $_FILES['image']['name'];
function uploadFiles($filename){
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $filetmp = $_FILES['avatar']['tmp_name'];
    $target = $path.basename($filename);
    $upload = move_uploaded_file($filetmp,$target);

    if(!$upload){
      	$errors[] = 2;
    } 
}
}
//  $image = 'E:/PO_file/image.jpg';
// header('Content-Type: image/jpeg');
// readfile($image);
	?>