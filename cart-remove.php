<?php include 'common.php';
$_SESSION["id"] = "1";
$_SESSION["user_id"] = "1";

if(mysqli_query($con, "DELETE FROM users WITH id and userid"))
{
	echo "Deleted Successfully";
}
else{
	<a href="cart.php"></a>
}
?>
