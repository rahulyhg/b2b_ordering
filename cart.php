<?php

require_once 'includes/global.inc.php';

$cart = new Cart();

if(isset($_POST['empty-cart'])) {
  $cart->emptyCart();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if (isset($_SESSION['cart']) && $_SESSION['cart'] > 0) :
      foreach ($_SESSION['cart'] as $item) :
        $name = $item['product']->name;
        $quantity = $item['quantity']; ?>

        <?= $name ?>
        <?= $quantity; ?>

    <?php endforeach; else: ?>
      <?= "There seems to be no products in your cart";  ?>
    <?php endif; ?>

    <form class="" action="cart.php" method="post">
      <input type="submit" name="empty-cart" value="Empty Cart">
    </form>
  </body>
</html>
