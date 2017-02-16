<?php
  require_once 'includes/global.inc.php';
  $currentPage = 'Home';
?>

<!doctype html>
<html>
  <head>
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

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

    <script src="js/index.min.js" charset="utf-8"></script>
  </body>
</html>
