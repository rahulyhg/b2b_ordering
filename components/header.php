<?php
  require_once 'includes/global.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.min.css">
  </head>
  <body>
    <header class="container-fluid">
      <div class="dropdownBackground"></div>
      <div class="row">
        <div class="logo-container col-xs-4 col-md-2 col-md-offset-1">
          <a href="index.php">
            <img class="header-logo" src="/assets/img/nike_swoosh.svg" alt="">
          </a>
        </div>
        <nav class="navigation-container col-xs-8">

          <!-- Desktop Nav
          ----------------->
          <div class="desktop-nav-container hidden-xs hidden-sm">
            <ul class="desktop-nav">
              <li class="menu-item dropdown-item">
                <a href="products.php">clothing</a>
                <div class="dropdown">
                  <ul class="dropdown-menu">
                    <a href="#"><li>Sweatshirts</li></a>
                    <a href="#"><li>Jackets</li></a>
                    <a href="#"><li>Pants &amp; Tights</li></a>
                  </ul>
                </div>
              </li>
              <li class="menu-item dropdown-item">
                <a href="#">footwear</a>
                <div class="dropdown">
                  <ul class="dropdown-menu">
                    <a href="#"><li>Lifestyle</li></a>
                    <a href="#"><li>Running</li></a>
                    <a href="#"><li>Gym &amp; Traning</li></a>
                    <a href="#"><li>Basketball</li></a>
                    <a href="#"><li>Skateboarding</li></a>
                  </ul>
                </div>
              </li>
              <li class="menu-item">
                <a href="#">sale</a>
              </li>
              <?php if(isset($_SESSION['logged_in'])) : ?>
                <li class="menu-item">
                  <a href="profile.php">profile</a>
                </li>
                <li class="menu-item">
                  <a href="logout.php">log out</a>
                </li>
                <li class="desktop-cart">
                  <a href="cart.php"><img class="cart-icon" src="/assets/img/shopping_cart.svg" alt=""></a>
                </li>
              <?php else : ?>
                <li class="menu-item">
                  <a href="register-user.php">register</a>
                </li>
                <li class="menu-item">
                  <a href="login.php">log in</a>
                </li>
              <?php endif; ?>
            </ul>
          </div>

          <!-- Mobile Nav
          ----------------->
          <div class="mobile-nav hidden-md hidden-lg">
            <img class="cart-icon" src="/assets/img/shopping_cart.svg" alt="">
            <img class="nav-icon" src="/assets/img/menu.svg" alt="">
          </div>
        </nav>
      </div>
    </header>

    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
