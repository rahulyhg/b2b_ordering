<?php
  require_once 'includes/global.inc.php';
  $currentPage = '';


    $queried_category = $_GET['category'];
    // Format String
    $queried_category = str_replace('_', ' ', $queried_category);
    $queried_category = ucwords($queried_category);

    $queried_product = $_GET['product'];
    // Format String
    $queried_product = str_replace('_', ' ', $queried_product);
    $queried_product = ucwords($queried_product);

    $stock = $_GET['stock'];

    // Creata of product tools class
    $productTools = new ProductTools();
    // Grab product by name from DB
    $product = $productTools->getByName($queried_product);
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

    <!-- Product Container
    ----------------------->
    <main>
      <div class="container">
        <div class="row">

          <!-- Product Image -->
          <div class="product-image col-xs-12 col-md-6 col-md-offset-0">
            <img src=<?= "$product->image" ?> alt="">
          </div>

          <!-- Product Infomation
          ----------------------->
          <div class="product-info-container col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">

            <!-- Product Title -->
            <div class="row">
              <div class="product-heading col-xs-12">
                <h2><?= $queried_product ?></h2>
              </div>
            </div>

            <!-- Product Stock -->
            <div class="row">
              <div class="product-stock col-xs-12">
                <p><span class="bold">Current Stock:</span> <?= $stock; ?></p>
              </div>
            </div>

            <!-- Product Price -->
            <div class="row">
              <div class="product-price col-xs-12">
                <p><span class="bold"><?="$".$product->price ?></span> - Free shipping and hassle free returns</p>
              </div>
            </div>

            <!-- Product About -->
            <div class="row">
              <div class="product-description col-xs-12">
                <p><?= $product->description ?></p>
              </div>
            </div>

            <!-- Product Callout -->
            <div class="row">
              <div class="product-callout col-xs-12">
                <p>premium warmth.<br>enhanced coverage.</p>
              </div>
            </div>

            <!-- Product Size Select -->
            <div class="row">
              <select class="product-select col-xs-12" name="">
                <option value="">Size</option>
                <option value="">Extra Small</option>
                <option value="">Small</option>
                <option value="">Medium</option>
              </select>
            </div>

            <!-- Product Quantity -->
            <div class="row">
              <select class="product-select col-xs-12" name="">
                <option value="">Quantity</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
              </select>
            </div>

            <!-- Product Buy Button -->
            <div class="row">
              <button class="product-btn btn --red col-xs-12" type="button" name="button">Buy Now</button>
            </div>
          </div>
        </div>


      </div>
    </main>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

    <script src="js/index.min.js" charset="utf-8"></script>
  </body>
</html>
