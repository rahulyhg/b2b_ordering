<?php
require_once 'includes/global.inc.php';

$error = "";
$username = "";
$password = "";

//check to see if they've submitted the login form
if(isset($_POST['submit-login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$userTools = new UserTools();
	if($userTools->login($username, $password)) {
		//successful login, redirect them to a page
		header("Location: index.php");
	} else {
		$error = "Incorrect username or password. Please try again.";
	}
}
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
          <div class="hero-image login-image col-xs-12 col-lg-12 col-lg-offset-0">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-lg-6 col-md-4"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-xs-offset-0 col-sm-offset-1 col-xs-offset-1 col-lg-6 col-lg-offset-1">
            <h2 class="hero-heading">Log in</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar login-bar"></div>
    </section>

		<?php
			if($error != "") {
		    	echo $error."<br/>";
			}
		?>

		<section class="container">
			<!-- Form Heading -->
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<h2 class="form-heading">WELCOME BACK</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="row">
						<form class="form-ctn" action="login.php" method="post">
							<div class="form-item col-xs-12">
								<label for="name">username:</label><br>
								<input class="col-xs-12" type="text" name="username" value="<?php echo $username; ?>">
							</div>

							<div class="form-item col-xs-12">
								<label for="name">password:</label><br>
								<input class="col-xs-12" type="password" name="password" value="<?php echo $password; ?>">
							</div>

							<div class="form-item col-xs-12">
								<input class="btn col-xs-12" type="submit" value="Login" name="submit-login" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
    <?php require_once 'components/footer.php'; ?>
		<script src="assets/js/index.min.js" charset="utf-8"></script>
	</body>
</html>
