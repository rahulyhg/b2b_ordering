<?php

require_once 'includes/global.inc.php';

//check to see if they're logged in
if(!isset($_SESSION['logged_in'])) {
	header("Location: login.php");
}

//get the user object from the session
$user = unserialize($_SESSION['user']);

//initialize php variables used in the form
$firstname = $user->firstname;
$lastname = $user->lastname;
$company = $user->company;
$address = $user->address;
$email = $user->email;
$message = "";

//check to see that the form has been submitted
if(isset($_POST['submit-settings'])) {

	//retrieve the $_POST variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	$user->email = $email;
	$user->firstname = $firstname;
	$user->lastname = $lastname;
	$user->company = $company;
	$user->address = $address;
	$user->save();

	$message = "Settings Saved<br/>";
}

//If the form wasn't submitted, or didn't validate
//then we show the registration form again
?>

<!doctype html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<?php echo $message; ?>

	<form action="profile.php" method="post">

	E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
	First Name: <input type="text" value="<?php echo $firstname; ?>" name="firstname" /><br/>
	Last Name: <input type="text" value="<?php echo $lastname; ?>" name="lastname" /><br/>
	Company: <input type="text" value="<?php echo $company; ?>" name="company" /><br/>
	Address: <input type="text" value="<?php echo $address; ?>" name="address" /><br/>
	E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
	<input type="submit" value="Update" name="submit-settings" />


	</form>
</body>
</html>
