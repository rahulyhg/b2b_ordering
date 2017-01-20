<?php
// PHP CODE HERE
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

    <!-- ITEM -->
    <section>
      <div class="container">
        <div class="row">
          <div class="item-image col-lg-4 col-lg-offset-1">
            <!-- Main product image -->
            <div class="row">
              <img class="image col-lg-12 col-md-12" src="/images/parka_main.jpg" alt="">
            </div>
            <!-- Secondary product images -->
            <div class="row">
              <img class="secondary-images col-lg-6" src="/images/parka_secondary.jpg" alt="">
              <img class="secondary-images col-lg-6" src="/images/parka_secondary.jpg" alt="">
            </div>
          </div>

          <div class="item-content col-lg-6">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                  <!-- HEADING -->
                  <div class="product-heading col-sm-12">
                    <h2>nike sportswear tech fleece</h2>
                  </div>
                  <!-- PRICE -->
                  <div class="product-price col-sm-12">
                    <p><span class="bold">$150</span> - Free shipping and hassle free returns</p>
                  </div>
                  <!-- DESCRIPTION -->
                  <div class="product-description col-sm-8">
                    <p>With a thicker, 3mm construction, the Nike Sportswear Tech Fleece Men's Parka combines cold weather comfort and urban utility</p>
                  </div>
                  <!-- CALLOUT -->
                  <div class="callout col-sm-10">
                    <p>premium warmth.<br>enhanced coverage.</p>
                  </div>
                  <!-- ORDER  -->
                  <div class="col-sm-10">
                    <form class="order-form row">
                      <div class="col-sm-3">
                        <select class="" name="" id="">
                          <option value="0">size</option>
                          <option value="">small</option>
                          <option value="">medium</option>
                          <option value="">large</option>
                          <option value="">x-large</option>
                        </select>
                      </div>

                      <div class="col-sm-3 col-sm-offset-1">
                        <select class="qty-select" class="" name="" id="">
                          <option value="0">QTY</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <button class="btn --red order-btn col-sm-12">add to order</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
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
