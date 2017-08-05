<? include 'common.php';
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--Jquery library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.css"></script>

<!--Latest Compiled and minified Javascript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Signup</title>
</head>
<body>
<?php include 'header.php'?>
<div class="container-fluid" style="margin-top:10%;">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
			<h2><b>SIGN UP</b></h2>
			<form action = "signup_script.php" method="POST">
				<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="NAME" required pattern="[a-zA-Z0-9]+" />
				</div>
				<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="EMAIL" required pattern="[^ @]*@[^ @]*">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="PASSWORD" required="true">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="contact" placeholder="CONTACT" required pattern="[789] [0-9]{9}">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="city" placeholder="CITY" required="true">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="address" placeholder="ADDRESS" required="true">
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>			
			</form>		
		</div>	
	</div>
</div>
<?php include 'footer.php'?>
</body>
</html>
