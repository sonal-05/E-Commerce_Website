<?php include 'common.php';
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
<link rel="stylesheet" href="css/index.css" type="text/css"/>
<title>Login</title>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle" data-target="myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">Lifestyle Store</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span>&nbsp;Signup	
					</a></li>
				  <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login
					</a></li>			
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="container" style="margin-top:10%;">
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Login</h4>					
				</div>
				<div class="text-warning">
				<p align="center"></br>Login to make a purchase</p>
				</div>
				<div class="panel-body">
					<form action="<?php $_login_submit.php ?>" method="POST">
						<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" name="email" required="true"> 							</div>
						<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" 							required="true"> 							
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Login</button>
 					</form>	</br>				
				</div>
				<div class="panel-footer">
					<p>Don't Have an account?<a href="#">Register</a></p>
				</div>				
			</div>
		</div>		

	</div>
</div>
<?php include 'footer.php'
?>
</body>
</html>
