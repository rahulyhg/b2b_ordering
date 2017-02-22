<?php
  require_once 'includes/global.inc.php';

  // Category Template for Shoes
  $currentCategory = "Shoes"; // Set catergory variable
  $productTools = new productTools(); // Create new instance of productTools
  $products = $productTools->getByCategory($currentCategory);

  // print("<pre>".print_r($products,true)."</pre>");
?>

<!doctype html>
<html>
  <head>
    <?php require_once 'components/head.php'; ?>
  </head>
  <body>
    <!-- HEADER -->
    <?php require_once 'components/header.php'; ?>

    <main>
      <ul>
        <?php
          // display all products from category
          foreach ($products as $product) {
            // lowercase product name
            $slug = strtolower($product->name);
            // remove any spaces in product name
            $slug = str_replace(' ', '_', $slug);
            $stock = $product->stock;

            echo "<a href=\"item.php?category=$currentCategory&product=$slug\">
                    <li>".$product->name." - $".$product->price." - ".$product->category."</li>
                  </a>";
          }
        ?>
    </ul>

    </main>

  </body>
</html>
