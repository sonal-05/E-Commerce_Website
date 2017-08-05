<?php require 'common.php';
	$id = $_GET["id"]
	
	mysqli_query("INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')");

?>
