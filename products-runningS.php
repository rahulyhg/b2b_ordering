<?php
  require_once 'includes/global.inc.php';

  // Category Template for Shoes
  $currentCategory = "Running-Shoes"; // Set catergory variable
  $productTools = new productTools(); // Create new instance of productTools
  $products = $productTools->getByCategory($currentCategory);
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
      <div class="container">
        <!-- CARD ROW  -->
        <div class="col-xs-12">
          <div class="row">
            <?php
              // display all products from category
              foreach ($products as $product) {
                // lowercase product name
                $slug = strtolower($product->name);
                // remove any spaces in product name
                $slug = str_replace(' ', '_', $slug);
                $stock = $product->stock;

                echo "<a href=\"item.php?category=$currentCategory&product=$slug\">
                  <div  class=\"card-container col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0\">
                    <div class=\"card col-xs-12\" style=\"background-image:url('$product->image')\">
                      <!-- Rollover -->
                      <div class=\"card-rollover\">
                        <button class=\"card-rollover-btn btn --red\" type=\"button\" name=\"button\">View Product</button>
                      </div>

                      <div class=\"card-title\">
                        <span class=\"title-text\">$product->name</span>
                      </div>
                    </div>
                  </div>
                </a>";
              }
            ?>

          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

  </body>
</html>
