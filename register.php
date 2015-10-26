
<?php 

session_start();
require_once"connection.php";
require_once"User.php";
require_once"UserDao.php";


		// Calls the register, Connection and RegisterDao classes
	$user_object = new User();
	
	$con= new Connection();
	$connection = $con->getConnection(); 

	$UserDao_object = new UserDao($connection);
	$UserDao_object->registerUser($user_object);

	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Info</title>

    <!-- Bootstrap -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
	<link href="styler.css" rel="stylesheet">

  </head>
  <body>
  
    <div class="col-md-3 col-md-offset-4">
	<div class="title">
				PDFDoc Viewer
	</div>
		<!-- Displays the automatically generated Username and Password of the User -->
	<div class="contenting">
		<div class="row">
		
			<div class="alert alert-success" role="alert"> USERNAME:<?php echo $user_object->getusername()."<br/>";?> </span></div>
			<div class="alert alert-info" role="alert"> PASSWORD:<?php echo $user_object->getpassword()."<br/>"; ?></div>
		</div>
		<p align="center"><button class="btn btn-primary"><a href="signin.php">HOME </a></button></p>
	</div>
	</div>

	</body>
</html>	
		