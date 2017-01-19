<?php

require_once 'includes/global.inc.php';

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
                <!-- <h1>You are not logged in.</h1> -->
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
          <div class="hero-image order-image col-lg-12">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-lg-6 col-md-4"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-lg-6">
            <h2 class="hero-heading">ORDERS</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar order-bar"></div>
    </section>

    <script src="js/index.min.js" charset="utf-8"></script>
  </body>
</html>

<!-- Log In Form -->
<!-- <?php if(isset($_SESSION['logged_in'])) : ?>
    <?php $user = unserialize($_SESSION['user']); ?>
    <h1>Hello, <?php echo $user->username; ?>!</h1>
    <a href="logout.php">Log Out</a> | <a href="profile.php">View Profile</a>
<?php else : ?>
    <h1>You are not logged in.</h1>
    <a href="login.php">Log In</a> | <a href="register-user.php">Register</a>
<?php endif; ?> -->
