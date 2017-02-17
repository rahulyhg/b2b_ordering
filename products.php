<?php
  require_once 'includes/global.inc.php';

  $currentPage = "Products";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home | Nike Business</title>
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#333">
    <meta name="theme-color" content="#333">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.min.css">
  </head>
  <body>
    <!-- HEADER -->
    <?php require_once 'components/header.php'; ?>

    <!-- HERO SECTION -->
    <section>
      <div class="container">
        <!-- HERO IMAGE -->
        <div class="row">
          <div class="hero-image products-image col-lg-12">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-lg-6 col-md-4"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-lg-6">
            <h2 class="hero-heading">shop by</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar products-bar"></div>
    </section>

    <!-- CATEGORY SECTION -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <a href="products-shoes.php"><div class="category-container col-lg-12">
            <div class="row">
              <div class="col-lg-5 col-lg-offset-1">
                <img src="/images/shoe.jpg" alt="">
              </div>
              <div class="category-heading-ctn col-lg-5 col-lg-offset-1">
                <div class="row">
                  <div class="category-heading col-md-12">
                    <h2>lastest <br> shoes <br>
                    <img class="product-arrow" src="/images/arrow.svg" alt="">
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div></a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

    <script src="js/index.min.js" charset="utf-8"></script>
  </body>
</html>
