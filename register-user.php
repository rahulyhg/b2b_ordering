<?php
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


<!doctype html>
<html>
  <head>
		<?php require_once 'components/head.php'; ?>
  </head>
  <body>
		<!-- HEADER -->
    <?php require_once 'components/header.php'; ?>

		<!-- HERO SECTION -->
    <section>
      <div class="container-fluid">
        <!-- HERO IMAGE -->
        <div class="row">
          <div class="hero-image profile-image col-xs-12 col-lg-12 col-lg-offset-0">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-lg-6 col-md-4"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-xs-offset-0 col-sm-offset-1 col-xs-offset-1 col-lg-6 col-lg-offset-1">
            <h2 class="hero-heading">JOIN NIKE</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar profile-bar"></div>
    </section>

		<section class="container">
			<!-- Form Heading -->
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<h2 class="form-heading">BECOME A NIKE DEALER</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="row">
						<?php echo ($error != "") ? $error : ""; ?>
						<form class="form-ctn" action="register-user.php" method="post">
							<div class="form-item col-xs-12">
								<label for="name">username:</label><br>
								<input class="col-xs-12" type="text" name="username" value="<?php echo $username; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">password:</label><br>
								<input class="col-xs-12" type="password" name="password" value="<?php echo $password; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">confirm password:</label><br>
								<input class="col-xs-12" type="password" name="password-confirm" value="<?php echo $password; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">first name:</label><br>
								<input class="col-xs-12" type="text" name="firstname" value="<?php echo $firstname; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">last name:</label><br>
								<input class="col-xs-12" type="text" name="lastname" value="<?php echo $lastname; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">company:</label><br>
								<input class="col-xs-12" type="text" name="company" value="<?php echo $company; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">address:</label><br>
								<input class="col-xs-12" type="text" name="address" value="<?php echo $address; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">e-mail:</label><br>
								<input class="col-xs-12" type="text" name="email" value="<?php echo $email; ?>">
							</div>

							<div class="form-item col-xs-12">
								<input class="btn col-xs-12" type="submit" value="Register" name="submit-form" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
