<?php
  //require_once 'includes/global.inc.php';
?>
<header class="container-fluid">
  <div class="dropdownBackground"></div>
  <div class="row">
    <div class="logo-container col-xs-4 col-md-2 col-md-offset-1">
      <a href="index.php">
        <img class="header-logo" src="/assets/img/nike_swoosh.svg" alt="Nike Logo">
      </a>
    </div>
    <nav class="navigation-container col-xs-8">

      <!-- Desktop Nav
      ----------------->
      <div class="desktop-nav-container hidden-xs hidden-sm">
        <ul class="desktop-nav">
          <li class="menu-item dropdown-item">
            <a href="products-clothes.php">clothing</a>
            <div class="dropdown">
              <ul class="dropdown-menu">
                <a href="products-lifestyleC.php"><li>Lifestyle</li></a>
                <a href="#"><li>Running</li></a>
                <a href="#"><li>Gym &amp; Training</li></a>
                <a href="#"><li>All Clothing</li></a>
              </ul>
            </div>
          </li>
          <li class="menu-item dropdown-item">
            <a href="products-shoes.php">footwear</a>
            <div class="dropdown">
              <ul class="dropdown-menu">
                <a href="products-lifestyleS.php"><li>Lifestyle</li></a>
                <a href="products-runningS.php"><li>Running</li></a>
                <a href="#"><li>Gym &amp; Training</li></a>
                <a href="#"><li>All Clothing</li></a>
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
              <a href="cart.php"><img class="cart-icon" src="/assets/img/shopping_cart.svg" alt="Shopping Cart"></a>
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
        <img class="cart-icon" src="/assets/img/shopping_cart.svg" alt="Shopping Cart">
        <img class="nav-icon" src="/assets/img/menu.svg" alt="Mobile Navigation Icon">
      </div>
    </nav>
  </div>
</header>
