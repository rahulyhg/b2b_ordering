<?php
  require_once 'includes/global.inc.php';

  $homeActive = '';
  $productsActive = '';
  $createOrderActive = '';
  $invoicesActive = '';
  $profileActive = '';
  $logInActive = '';

  $currentPage === "Home" ? $homeActive = "current-page" : '';
  $currentPage === "Products" ? $productsActive = "current-page" : '';
  $currentPage === "Create Order" ? $createOrderActive = "current-page" : '';
  $currentPage === "Invoices" ? $invoicesActive = "current-page" : '';
  $currentPage === "Profile" ? $profileActive = "current-page" : '';
  $currentPage === "Log In" ? $logInActive = "current-page" : '';

  if(isset($_SESSION['logged_in'])) {
    echo '
    <header>
      <div class="container">
        <div class="row nav-container ">
          <div class="nav-logo col-lg-2">
            <a href="index.php"><img class="logo" src="/images/nike_swoosh.svg" alt=""></a>
          </div>
          <!-- NAVIGATION -->
          <ul class="header-nav col-lg-10">
            <a href="index.php" class="nav-item '. $homeActive .'"><li>orders</li></a>
            <a href="products.php" class="nav-item '. $productsActive .'"><li>products</li></a>
            <a href="#" class="nav-item '. $createOrderActive .'"><li>create order</li></a>
            <a href="#" class="nav-item '. $invoicesActive .'"><li>invoices</li></a>
            <a class="nav-item '. $profileActive .'" href="profile.php"><li>Profile</li></a>
            <a class="nav-item" href="logout.php"><li>Log Out</li></a>
          </ul>
        </div>
      </div>
    </header>
    ';
  } else {
    echo '
    <header>
      <div class="container">
        <div class="row nav-container ">
          <div class="nav-logo col-lg-2">
            <a href="index.php"><img class="logo" src="/images/nike_swoosh.svg" alt=""></a>
          </div>
          <!-- NAVIGATION -->
          <ul class="header-nav col-lg-10">
            <a href="index.php" class="nav-item '. $homeActive .'"><li>orders</li></a>
            <a href="products.php" class="nav-item '. $productsActive .'"><li>products</li></a>
            <a href="#" class="nav-item '. $createOrderActive .'"><li>create order</li></a>
            <a href="#" class="nav-item '. $invoicesActive .'"><li>invoices</li></a>
            <a class="nav-item '. $logInActive .'" href="login.php"><li>Log In</li></a>
            <a class="nav-item" href="register-user.php"><li href="register-user.php">Register</li></a>
          </ul>
        </div>
      </div>
    </header>
    ';
  }
?>
