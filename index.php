<?php
  require_once 'includes/global.inc.php';
  $currentPage = 'Home';
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
      <div class="container">
        <!-- HERO IMAGE -->
        <div class="row">
          <div class="hero-image order-image col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-0">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-md-4 col-md-offset-1 col-lg-6 col-lg-offset-0"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-md-offset-1 col-lg-6 col-lg-offset-0">
            <h2 class="hero-heading">NEW RELEASES</h2>
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
        <!-- CARD ROW  -->
        <div class="col-xs-12">
          <div class="row">

            <a href="item.php?category=sweaters&product=NIKE DESTROYER">
              <div  class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('/assets/img/featured3.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Product</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">NIKE DESTROYER</span>
                  </div>
                </div>
              </div>
            </a>

            <a href="item.php?category=Jackets&product=NIKE IMPOSSIBLY LIGHT">
              <div class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('/assets/img/featured2.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Product</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">NIKE IMPOSSIBLY LIGHT</span>
                  </div>
                </div>
              </div>
            </a>

            <a href="item.php?category=Sweaters&product=Nike THERMA MAX">
              <div class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('/assets/img/featured1.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Product</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">Nike THERMA MAX</span>
                  </div>
                </div>
              </div>
            </a>

            <a href="item.php?category=Pants &amp; Tights&product=NIKE ZONAL STRENGTH">
              <div class="card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0">
                <div class="card col-xs-12" style="background-image:url('/assets/img/featured4.jpg')">
                  <!-- Rollover -->
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Product</button>
                  </div>
                  <!-- Card Title  -->
                  <div class="card-title">
                    <span class="title-text">NIKE ZONAL STRENGTH</span>
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

    <script src="js/index.min.js" charset="utf-8"></script>
  </body>
</html>
