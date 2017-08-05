<!Doctype html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--Jquery library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.css"></script>

<!--Latest Compiled and minified Javascript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Lifestyle Store</title>

<!--CSS FILES-->
<link rel="stylesheet" href="css/index.css" type="text/css"/>
<?php 
if (!isset($_SESSION['email'])) {
header('location: index.php');
function session_destroy(){
header('location: index.php');
}
}
?>
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
				  <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Cart
					</a></li>
				  <li><a href="setting.html"><span class="glyphicon glyphicon-user"></span>&nbsp;Setting	
					</a></li>
				  <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout
					</a></li>			
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="container" style="margin-top:10%;">
	<h1 align="center">THANKYOU FOR THE ORDER!!<br><br>You have Successfully LOGOUT</h1>
</div>
<footer>
	<div class="container">
		<center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
	</div>
</footer>
</body>
</html>
