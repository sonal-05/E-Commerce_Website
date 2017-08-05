<?php require 'common.php';
?>

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
<?php include 'header.php';
 include 'check-if-added.php';
?>

<div class="container">
	<div class="jumbotron" style="margin-top:7%; margin-left:3%;">
		<h1>Welcome to our Lifestyle Store!</h1>
		<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
			<?php if (!isset($_SESSION['email'])) { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
			Now</a></p>
			<?php
			} else {
			//We have created a function to check whether this particular product is added
			to cart or not.
			if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=
			0)
			echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
			cart</a>';
			} else {
			?>
			<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
			btn-primary">Add to cart</a>
			<?php
			}
			}
			?>
			</div>
			<div class="thumbnail">
			<?php if (!isset($_SESSION['email'])) { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
			Now</a></p>
			<?php
			} else {
			//We have created a function to check whether this particular product is added
			to cart or not.
			if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=
			0)
			echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
			cart</a>';
			} else {
			?>
			<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
			btn-primary">Add to cart</a>
			<?php
			}
			}
			?>
			</div>
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<?php if (!isset($_SESSION['email'])) { ?>
			<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
			Now</a></p>
			<?php
			} else {
			//We have created a function to check whether this particular product is added
			to cart or not.
			if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=
			0)
			echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
			cart</a>';
			} else {
			?>
			<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
			btn-primary">Add to cart</a>
			<?php
			}
			}
			?>
			</div>
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
			<div class="thumbnail">
				<?php if (!isset($_SESSION['email'])) { ?>
				<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
				Now</a></p>
				<?php
				} else {
				//We have created a function to check whether this particular product is added
				to cart or not.
				if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=
				0)
				echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
				cart</a>';
				} else {
				?>
				<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
				btn-primary">Add to cart</a>
				<?php
				}
				}
				?>
			</div>
	</div>
	
</div>
<?php include 'footer.php'?>
</body>
</html>
