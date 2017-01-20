<?php

require_once 'includes/global.inc.php';

?>

<!doctype html>
<html>
  <head>
    <title>Home | Nike Business</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- PAST ORDER SECTION-->
    <section>
      <!-- ORDER CARDS -->
      <div class="container">
        <!-- CARD ROW - STATIC ROW ONE -->
        <div class="row">
          <div class="card-ctn col-sm-3">
            <div class="row">
              <div class="card col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="card-details col-lg-12">
                  <span class="card-label">order total:</span>
                  <span class="card-detail">$1 520.65 CAD</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order placed:</span>
                  <span class="card-detail">January 4, 2017</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order number:</span>
                  <span class="card-detail">709-1264864-509</span>
                </div>
                <div class="slide-up"></div>
                <button class="btn card-btn">invoice</button>
              </div>
            </div>
          </div>
          <div class="card-ctn col-sm-3">
            <div class="row">
              <div class="card col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="card-details col-lg-12">
                  <span class="card-label">order total:</span>
                  <span class="card-detail">$1 520.65 CAD</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order placed:</span>
                  <span class="card-detail">January 4, 2017</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order number:</span>
                  <span class="card-detail">709-1264864-509</span>
                </div>
                <div class="card-details">
                  <button class="btn card-btn">invoice</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-ctn col-sm-3">
            <div class="row">
              <div class="card col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="card-details col-lg-12">
                  <span class="card-label">order total:</span>
                  <span class="card-detail">$1 520.65 CAD</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order placed:</span>
                  <span class="card-detail">January 4, 2017</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order number:</span>
                  <span class="card-detail">709-1264864-509</span>
                </div>
                <div class="card-details">
                  <button class="btn card-btn">invoice</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-ctn col-sm-3">
            <div class="row">
              <div class="card col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="card-details col-lg-12">
                  <span class="card-label">order total:</span>
                  <span class="card-detail">$1 520.65 CAD</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order placed:</span>
                  <span class="card-detail">January 4, 2017</span>
                </div>
                <div class="card-details col-lg-12">
                  <span class="card-label">order number:</span>
                  <span class="card-detail">709-1264864-509</span>
                </div>
                <div class="card-details">
                  <button class="btn card-btn">invoice</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-5 copyright-text">
            <p>All content from Nike.com - Used for Educational purposes</p>
          </div>
          <div class="col-md-2 footer-logo-ctn">
            <img class="footer-logo" src="/images/white_nike_swoosh.svg" alt="">
          </div>
          <div class="col-md-5 footer-social">
            <img class="footer-social-icon" src="/images/instagram.svg" alt="">
            <img class="footer-social-icon" src="/images/twitter.svg" alt="">
            <img class="footer-social-icon" src="/images/facebook.svg" alt="">
          </div>
        </div>
      </div>
    </footer>

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
