<?php 

	session_start();
	if(isset($_SESSION["username"])){
		header ("location:index.php");
	}
	?>
	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Log In</title>
		
		<link href="boot/css/bootstrap.min.css" rel="stylesheet">
		<link href="styler.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container-fluid">
			<div id="header">
				<div>
					<div id="logo">
						<img src="crystal.png">PDF DocViewer
					</div>
				</div>
			</div>
			
		<div class="row">
			<div class="col-md-3 col-md-offset-4">
				
					<div class="content">
						<form method="post" action="login.php" >
							<div class="row">
	
								<?php 
									    /* Checks if the user is logged in and unchecks the session if the user is logged-in */
										if (isset($_SESSION["signinCheck"])){	
								?>	
											<p align="center"><b>	
												<?php echo $_SESSION["signinCheck"]; ?> <b></p>
												<?php unset($_SESSION["signinCheck"]);
									} ?>
									
								<?php if (isset($_SESSION["upload_error"])){	?>		
										<p align="center"><b>
										<?php	echo $_SESSION["upload_error"]; ?> <b></p>
										<?php unset($_SESSION["upload_error"]);
								}?>
		
	
								<div class="form-group col-md-10 col-md-offset-1">
										Username:
								<input type="text" name="username" placeholder="Username" class="form-control" maxlength="14"required="required">
								</div>
							</div>

						<div class="row">
							<div class="form-group col-md-10 col-md-offset-1">
								Password:
									<input type="password" name="password" placeholder="password" class="form-control" maxlength="8"required="required" />
 

							</div>
						</div>
						
						<div id="buttom">
							<button type="submit" name="submit" class="btn btn-primary">LOGIN</button> 
						</div>
					</div>
			</div>
							</form>
		</div>
			<div class="footer"></div>
	</div>
	</body>
</html>