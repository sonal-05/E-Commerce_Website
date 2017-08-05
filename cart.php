
<?php include 'common.php';?>
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
<?php include'header.php' ?>

<div class="container">
	<table class="table table-striped table-hover" style="margin-top:10%;">
		<tbody>
			<tr>
			    <th>Item Number</th>
			    <th>Item Name</th>
			    <th>Price</th>
			    <th></th>
			</tr>
			<tr>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			</tr>
			<tr>
			    <td></td>
			    <td>Total</td>
			    <td>Rs.0</td>
			    <td><a href="success.html"><button type="submit" class="btn btn-primary" action="login.php" method="POST" >Confirm Order</button></a></td>				
			</tr>
		</tbody>	
	</table>
</div>
 
<?php
$id = $_GET['user_id'];
$select_query = "SELECT id, email, first_name FROM users_product";

if(mysqli_num_rows == 0)
{
	echo "Add items to the cart first";	
}
else{
	while($sum==0)
	{
	$sum = $sum + $price;
	$id = 1;
	$new_id = append(', ', $id);<a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>
	$id = $id + 1;
	$count = 1;
	}
	$total = $sum;<a href='success.php?id={$row['id']}' class='success'>Successful</a>	
}
?>
<?php include 'footer.php'; ?>
</body>
</html>
