<?php include 'common.php';

$name = $_POST['name'];
$regex_name = "[a-zA-Z0-9]+";

if(!preg_match($regex_name, $name)) {
	echo "Incorrect Name";
}

$email = $_POST['email'];
$regex_email = "[^ @]*@[^ @]*";

if(!preg_match($regex_email, $email)) {
	echo "Incorrect Email";
}

$contact = $_POST['contact'];
$regex_contact = "[789] [0-9]{9}";

if(!preg_match($regex_contact, $contact)) {
	echo "Incorrect Contact";
}

$password = $_POST['password'];
if(strlen($password)<6)
{	echo "Password should have at-least 6 characters";
}

$con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$select_query = "SELECT id, email, first_name FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
echo $total_rows_fetched;

if(mysqli_num_rows>0)
{	echo "error email id already exist";
}
else{
	mysqli_query($con, "SELECT * FROM users");
	mysqli_query($con, "INSERT INTO users (Name, Email, contact) Values ('Sonal','sonal.bansal92@gmail.com','6475341684')");
	mysqli_close($con);
}
$_SESSION["email"] = "sonal.bansal92@gmail.com";
$_SESSION["password"] = "dhsshhdfhd";
echo "Session Variables are set.";
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>

