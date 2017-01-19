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
    <title>Home | Nike Business</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.min.css">
  </head>
  <body>
		<!-- HEADER -->
    <header>
      <div class="container">
        <div class="row nav-container ">
          <div class="nav-logo col-lg-2">
            <img class="logo" src="/images/nike_swoosh.svg" alt="">
          </div>
					<!-- NAVIGATION -->
          <ul class="header-nav col-lg-10">
            <a href="index.php" class="nav-item"><li>orders</li></a>
            <a href="#" class="nav-item"><li>products</li></a>
            <a href="#" class="nav-item"><li>create order</li></a>
            <a href="#" class="nav-item"><li>invoices</li></a>
            <!-- Log In Form -->
            <?php if(isset($_SESSION['logged_in'])) : ?>
                <?php $user = unserialize($_SESSION['user']); ?>
                <!-- <h1>Hello, <?php echo $user->username; ?>!</h1> -->
                <a class="nav-item" href="profile.php"><li>Profile</li></a>
                <a class="nav-item" href="logout.php"><li>Log Out</li></a>
            <?php else : ?>
                <a class="nav-item" href="login.php"><li>Log In</li></a>
                <a class="nav-item" href="register-user.php"><li href="register-user.php">Register</li></a>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </header>

		<!-- HERO SECTION -->
    <section>
      <div class="container">
        <!-- HERO IMAGE -->
        <div class="row">
          <div class="hero-image profile-image col-lg-12">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-lg-6 col-md-4"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-lg-6">
            <h2 class="hero-heading">PROFILE</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar profile-bar"></div>
    </section>

    <script src="js/index.min.js" charset="utf-8"></script>
  </body>
</html>

	<!-- <?php echo $message; ?> -->
	<!-- <form action="profile.php" method="post">
	E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
	First Name: <input type="text" value="<?php echo $firstname; ?>" name="firstname" /><br/>
	Last Name: <input type="text" value="<?php echo $lastname; ?>" name="lastname" /><br/>
	Company: <input type="text" value="<?php echo $company; ?>" name="company" /><br/>
	Address: <input type="text" value="<?php echo $address; ?>" name="address" /><br/>
	E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
	<input type="submit" value="Update" name="submit-settings" />
	</form> -->
