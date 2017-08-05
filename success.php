<?php include 'common.php';
if (!isset($_SESSION['email'])) {
header('location: index.php');
}
mysqli_query("SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Confirmed'");
echo "Your order is confirmed. Thank you for shopping with us.<a href="product.php">Click here</a> to purchase any other item"
?>
