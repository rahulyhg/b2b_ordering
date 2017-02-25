<?php
  require_once 'includes/global.inc.php';
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
          <div class="hero-image products-image col-md-12 col-lg-12 col-lg-offset-0">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-md-8 col-lg-6 col-lg-offset-0"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-sm-offset-1 col-md-offset-1 col-lg-6 col-lg-offset-1">
            <h2 class="hero-heading">CLOTHING</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar products-bar"></div>
    </section>

    <!-- Clothing Category Select -->
    <section>
      <!-- ORDER CARDS -->
      <div class="container">
        <!-- CARD ROW  -->
        <div class="col-xs-12">
          <div class="row">

            <a href="products-lifestyleC.php">
              <div  class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('./assets/img/lifestyleClothing.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Products</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">Lifestyle</span>
                  </div>
                </div>
              </div>
            </a>

            <a href="#">
              <div class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('./assets/img/runningClothing.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Products</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">Running</span>
                  </div>
                </div>
              </div>
            </a>

            <a href="#">
              <div class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('./assets/img/gymClothing.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Products</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">Gym &amp; Training</span>
                  </div>
                </div>
              </div>
            </a>

            <a href="#">
              <div class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('./assets/img/allClothing.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Products</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">All clothing</span>
                  </div>
                </div>
              </div>
            </a>

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
