<?php
  require_once 'includes/global.inc.php';
  $currentPage = '';

  $url_string = 'item.php?category=' . $_GET['category'] . '&product=' . $_GET['product'];

  $queried_category = $_GET['category'];
  // Format String
  $queried_category = str_replace('_', ' ', $queried_category);
  $queried_category = ucwords($queried_category);

  $queried_product = $_GET['product'];
  // Format String
  $queried_product = str_replace('_', ' ', $queried_product);
  $queried_product = ucwords($queried_product);

  // Create an instance product tools class
  $productTools = new ProductTools();
  // Grab product by name from DB
  $product = $productTools->getByName($queried_product);

  if(isset($_POST['add-to-cart'])) {
    $cart = new Cart();

    // $stock = $product->stock;
    $quantity = $_POST['quantity'];
    $cart->add($product,$quantity);

  }
?>

<!doctype html>
<html>
  <head>
    <?php require_once 'components/head.php'; ?>
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
            <img src=<?= "./$product->image" ?> alt="<?= $product->name ?>">
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
                <p><span class="bold">Current Stock:</span> <?= $product->stock; ?></p>
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

            <!-- FORM STARTS HERE
            ----------------------->
            <?php // TODO: Add if to check stock level ?>
            <form class="" action="<?php echo $url_string; ?>" method="post">
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
                <select class="product-select col-xs-12" name="quantity">
                  <option value="">Quantity</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                  <option value="30">30</option>
                  <option value="40">50</option>
                  <option value="50">50</option>
                  <option value="60">60</option>
                  <option value="70">70</option>
                  <option value="80">80</option>
                  <option value="90">90</option>
                  <option value="100">100</option>
                </select>
              </div>

              <!-- Product Buy Button -->
              <div class="row">
                <button class="product-btn btn --red col-xs-12" type="submit" name="add-to-cart">Add to Cart</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>
    <?php require_once 'components/slide-nav.php'; ?>
    <script src="assets/js/index.min.js" charset="utf-8"></script>
  </body>
</html>
