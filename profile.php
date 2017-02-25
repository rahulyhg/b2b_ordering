<?php
require_once 'includes/global.inc.php';
$currentPage = "Profile";

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
            <h2 class="hero-heading">PROFILE</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar profile-bar"></div>
    </section>

		<!-- PROFILE UPDATE FORM -->
		<section>
			<div class="container">
				<div class="row">
					<!-- USER PROFILE FORM -->
					<div class="form-ctn col-xs-12 col-md-6 col-md-offset-3">

						<!-- Form Heading -->
						<div class="row">
							<div class="col-xs-12">
								<h2 class="form-heading">update profile</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<form action="profile.php" method="post">
										<div class="form-item col-xs-12">
											<label for="name">first name:</label><br>
											<input class="col-xs-12" type="text" name="firstname" value="<?php echo $firstname; ?>">
										</div>

										<div class="form-item col-xs-12">
											<label for="name">last name:</label><br>
											<input class="col-xs-12" type="text" name="lastname" value="<?php echo $lastname; ?>">
										</div>

										<div class="form-item col-xs-12">
											<label for="name">e-mail:</label><br>
											<input class="col-xs-12" type="text" name="email" value="<?php echo $email; ?>">
										</div>

										<div class="form-item col-xs-12">
											<label for="name">company:</label><br>
											<input class="col-xs-12" type="text" name="company" value="<?php echo $company; ?>">
										</div>

										<div class="form-item col-xs-12">
											<label for="name">company address:</label><br>
											<input class="col-xs-12" type="text" name="address" value="<?php echo $address; ?>">
										</div>

										<div class="form-item col-xs-12">
											<input class="btn col-xs-12" type="submit" value="Update" name="submit-settings" />
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
    <?php require_once 'components/footer.php'; ?>
		<?php require_once 'components/slide-nav.php'; ?>
    <script src="assets/js/index.min.js" charset="utf-8"></script>
  </body>
</html>
