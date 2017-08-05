<?php include 'common.php';

if (!isset($_SESSION['email'])) {
header('location: index.php');
}

$len1 = strlen("new password");
$len2 = strlen("retype new password");
if($len1 == $len2)
{	echo "same";
}
else{
	echo "error";
}
$select_query = "SELECT password FROM users";
if($newpassword == $retypepassword)
{	mysqli_query("UPDATE INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')");
}
else{
	echo "error";
}
?>
