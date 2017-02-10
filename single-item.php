<?php
  require_once 'includes/global.inc.php'; // Session

  $queried_category = $_GET['category'];
  // Format String
  $queried_category = str_replace('_', ' ', $queried_category);
  $queried_category = ucwords($queried_category);

  $queried_product = $_GET['product'];
  // Format String
  $queried_product = str_replace('_', ' ', $queried_product);
  $queried_product = ucwords($queried_product);

  // Creata of product tools class
  $productTools = new ProductTools();
  // Grab product by name from DB
  $product = $productTools->getByName($queried_product);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?= "<h1>$queried_product</h1>"; ?>
    <?= "<h3>$queried_category - $product->price</h3>"; ?>
    <?= "<p>$product->description</p>"; ?>
  </body>
</html>
