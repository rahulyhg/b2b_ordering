<?php
//register.php

require_once 'includes/global.inc.php';

//initialize php variables used in the form
$username = "";
$password = "";
$password_confirm = "";
$email = "";
$firstname = "";
$lastname = "";
$company = "";
$address = "";
$error = "";

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) {

	//retrieve the $_POST variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password-confirm'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	//initialize variables for form validation
	$success = true;
	$userTools = new UserTools();

	//validate that the form was filled out correctly
	//check to see if user name already exists
	if($userTools->checkUsernameExists($username)) {
	    $error .= "That username is already taken.<br/> \n\r";
	    $success = false;
	}

	//check to see if passwords match
	if($password != $password_confirm) {
	    $error .= "Passwords do not match.<br/> \n\r";
	    $success = false;
	}

	if($success) {
	    //prep the data for saving in a new user object
	    $data['username'] = $username;
	    $data['password'] = md5($password); //encrypt the password for storage
	    $data['email'] = $email;
			$data['firstname'] = $firstname;
			$data['lastname'] = $lastname;
			$data['company'] = $company;
			$data['address'] = $address;

	    //create the new user object
	    $newUser = new User($data);

	    //save the new user to the database
	    $newUser->save(true);

	    //log them in
	    $userTools->login($username, $password);

	    //redirect them to the profile page
	    header("Location: profile.php");

	}

}

//If the form wasn't submitted, or didn't validate
//then we show the registration form again
?>


<html>
<head>
	<title>Register</title>
</head>
<body>
	<?php echo ($error != "") ? $error : ""; ?>
	<form action="register-user.php" method="post">

	Username: <input type="text" value="<?php echo $username; ?>" name="username" /><br/>
	Password: <input type="password" value="<?php echo $password; ?>" name="password" /><br/>
	Password (confirm): <input type="password" value="<?php echo $password_confirm; ?>" name="password-confirm" /><br/>
	First Name: <input type="text" value="<?php echo $firstname; ?>" name="firstname" /><br/>
	Last Name: <input type="text" value="<?php echo $lastname; ?>" name="lastname" /><br/>
	Company: <input type="text" value="<?php echo $company; ?>" name="company" /><br/>
	Address: <input type="text" value="<?php echo $address; ?>" name="address" /><br/>
	E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
	<input type="submit" value="Register" name="submit-form" />

	</form>
</body>
</html>
