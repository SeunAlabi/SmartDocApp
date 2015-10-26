<?php 
session_start();
if(isset($_SESSION["username"])){
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styler.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<div class="out" >



  

<div class="col-md-0 col-md-offset-10" >
<?php if(isset($_SESSION["username"]))
{
if($_SESSION["role"] ==1)
{
?>



<a href="register.php">REGISTER USER</a>
<?php } } ?>
<a href="new.php"> RESET PASSWORD </a>	
 <a href="signout.php"> SIGN OUT </a></div>


</div>
  
	<div class="col-md-3 col-md-offset-4">
	<div class="title">
		PDFDoc Viewer
	</div>

	<div class="contenting">

	<!-- Form accepts the the Document Id and the file to be uploaded -->
	<form method="post" action="upload.php" enctype="multipart/form-data">
	<div class="row">
		<div class="form-group col-md-10 col-md-offset-1">
	<input type="text" name="fileId" class="form-control" placeholder="Document ID" maxlength="10" required="required">
		</div>
	<div>


	<div class="row">
		<div class="pope">
			<div class="form-group col-md-10 col-md-offset-1">
	<input type="file" name="fileToUpload" id="fileToUpload" class="form-controlt" required="required"/>
			</div>
		</div>
	</div>
		
		
	<div class="row">
		<div class="form-group col-md-6 col-md-offset-4">
	<button type="submit" name="submit" class="btn btn-primary">Upload</button>
		</div>
	
</div>
</form>	
			
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/js/bootstrap.min.js"></script>
  </body>
<?php }
else {
	header("location:signin.php");
						//	 return;
}
?>
</html>