<?php
function check_if_added_to_cart($item_id)
{
	echo $_SESSION['user_id'];
	SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart';	
}
require 'common.php';

if(mysqli_num_rows>0)
{
	return 1;
}
else
{
	return 0;
}

