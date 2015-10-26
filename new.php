<?php
session_start();

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign In</title>

    <!-- Bootstrap -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
	<link href="styler.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="col-md-3 col-md-offset-4">
		<div class="title">
			PDFDoc Viewer
		</div>




<div class="contenting">
<div class="row">

<p align="center"><b>Change Password</b></p>
<?php if(isset($_SESSION["passError"])){ ?>

<p align="center"><b> <?php echo $_SESSION["passError"];?></b><p>

<?php unset($_SESSION["passError"]);

} ?>
<!-- Form that accepts the username and password from the User-->	
<form method="post" action="setpassword.php" >
<div class="form-group col-md-10 col-md-offset-1">
 <input type="password" name="password" placeholder="password" class="form-control" required="required" />
 </div>
</div>


<div class="row">
			<div class="form-group col-md-10 col-md-offset-1">
 <input type="password" name="password2" placeholder="confirm password" class="form-control" required="required" />
 </div>
</div>
 
<div class="buttons">
<button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>  
</form>
 </div>	

 </div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/js/bootstrap.min.js"></script>

</body>
</html>