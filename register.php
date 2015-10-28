
<?php 

session_start();
require_once"User.php";


		// Calls user class
	$user_object = new User();
	$username = $user_object->getusername();
	$password = $user_object->getpassword();
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
			<form method="post" action="registerValidate.php">
				USERNAME<input type="text" name="username" value="<?php echo $username;?>" >
				<br/>
				PASSWORD<input type="password" name="password" value="<?php echo $password; ?>" >
					
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">@</span>
				  <input type="text" name="email" class="form-control" placeholder="E-mail Adress" aria-describedby="basic-addon1">
				</div>
				
				<p align="center"><button class="btn btn-info" type="submit" name="submit">REGISTER USER</button></p>		
			</form>
			</div>
			</div>	
			</div>
			
		</div>
	</div>

	</body>
</html>	
		