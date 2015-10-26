<?php
session_start();
require_once "uploadclass.php";
require_once "uploadDAO.php";
//require_once "connection.php";

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Info</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
       

</head><!--/head-->

<body>

   

	<br/>

    <section id="feature" class="transparent-bg">
        <div class="container">
        <div class="center wow fadeInDown"> 
            <div class="row">
			<div class="col-md-4 col-md-offset-4">
			
	
	
<?php

$fileId= $_POST["fileId"];
$filename=$fileId.".pdf";

/* accepts/gets Username*/
	if(isset($_POST["submit"])) {
			if(isset($_SESSION["username"]))
			{
			$uploadDAO = new uploadDAO();		
			$uploadDAO->moveToDirectory($filename);//copies file to specified directory
			//$uploadclass = new uploadclass($fileId, $filename);
			//$uploadDAO->uploadFile($uploadclass);
			}
			else{
				/* Checks if the user is logged in*/
				$_SESSION["upload_error"] = "Log in to upload the file";
				header("location:signin.php");
							 return;
			}
	}

?>

<html>
<br/>
<br/>
<a href="index.php">BACK </a>
</html>
















<!--$error="";
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
	mkdir($target_dir);
}
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$target_file = $target_dir . $filename;
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo $FileType; return;
$file_name = basename($_FILES["fileToUpload"]["name"]);
//$randomId= uniqid();
if(isset($_POST["submit"])) {

	
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}



if($FileType != "pdf")  {
    echo "Sorry, only PDF files are allowed.";
	return;
    $uploadOk = 0;
}


   /*  $upload = new uploadclass($fileId,$target_file);
	$con= new Connection();
	$connection= $con->getConnection(); 
	$uploadDAO= new uploadDAO($connection);
	$uploadDAO->uploadFile($upload);
	*/
	
	/*$connection=  new mysqli("localhost", "root", "", "file");
	$query = "insert into files values(null,'$fileId','$target_file')";
	$result = $connection->query($query) or die(mysqli_error($connection));
    // echo "successful";*/


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	//if($result){
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
		 <script>
	   $(document).ready(function(){
		alert("FILE UPLOADED!!!");
		}) 
	  </script>
	  

   < ?php       
 //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded as.". $filename; 
		
   } else {
       $error.="Sorry, there was an error uploading your file.";
	   $_SESSION["upload_error"]=$error;
	   header("location:index.php");
	   return;
    }
	//}
}

}-->