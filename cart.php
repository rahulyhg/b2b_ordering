<?php
  require_once 'includes/global.inc.php';

  $cart = new Cart();

  if(isset($_POST['empty-cart'])) {
    $cart->emptyCart();
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

    <main class="container">

      <!-- Form Heading -->
      <div class="row">
        <!-- Cart Container
        ------------------->
        <ul class="cart-container col-xs-10 col-xs-offset-1">

          <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
              <h2 class="form-heading">YOUR CART:</h2>

              <form class="empty-cart-form" action="cart.php" method="post">
                <input class="btn" type="submit" name="empty-cart" value="Empty Cart">
              </form>

            </div>
          </div>

          <!-- Cart Items -->
          <?php if (isset($_SESSION['cart']) && $_SESSION['cart'] > 0) :
            foreach ($_SESSION['cart'] as $item) :
              $name = $item['product']->name;
              $quantity = $item['quantity'];
              $image =  $item['product']->image;
              $price =  $item['product']->price;
          ?>

          <a href="item.php?category=category&product=<?= $name ?>">
            <li class="cart-item col-xs-12 col-md-8 col-md-offset-2">
              <!-- Item Name -->
              <div class="row">
                <div class="cart-item-name col-xs-12"><?= $name ?></div>
              </div>
              <!-- Item Image -->
              <div class="row">
                <div class="cart-item-image col-xs-12" style="background-image:url(<?= "./".$image ?>);">
                  <div class="card-rollover">
                    <button class="card-rollover-btn btn --red" type="button" name="button">View Product</button>
                  </div>
                </div>
              </row>
              <!-- Item Info - Price & Quantity -->
              <div class="row">
                <div class="col-xs-6 cart-info-container">
                  <div class="cart-info-heading">Quantity</div>
                  <div class="cart-info"><?= strval($quantity); ?></div>
                </div>
                <div class="col-xs-6 cart-info-container">
                  <div class="cart-info-heading">Price</div>
                  <div class="cart-info">$<?= strval($price); ?></div>
                </div>
              </div>
            </li>
          </a>

          <?php endforeach; else: ?>
            <li class="empty-cart-text col-xs-12 col-md-8 col-md-offset-2">
              <p>There seems to be no products in your cart</p>
            </li>
          <?php endif; ?>

        </ul>
      </div>
    </main>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>
    <script src="assets/js/index.min.js" charset="utf-8"></script>
  </body>
</html>
