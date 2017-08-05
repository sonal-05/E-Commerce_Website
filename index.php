<?php require 'common.php';?>
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
</head>
<body>
<div class="header">
	<?php require 'header.php';
	?>	
</div>
<!--header ends-->
<div id="banner_image" style="background-image:url('images/banner.jpeg');">
	<div class="container">
		<div id="banner_content">
			<a href="products.html"><button type="submit" class="btn btn-danger btn-lg active">Shop Now</button></a>
		</div>
	</div>
</div>
<!--Contents end her-->
<?php require 'footer.php'
?>
</body>
</html>
