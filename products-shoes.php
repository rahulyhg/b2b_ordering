<?php
  require_once 'includes/global.inc.php'; // Session

  // Category Template for Shoes
  $currentCategory = "Shoes"; // Set catergory variable
  $productTools = new productTools(); // Create new instance of productTools
  $products = $productTools->getByCategory($currentCategory);

  // print("<pre>".print_r($products,true)."</pre>");
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
    <header>
      <div class="container">
        <div class="row nav-container ">
          <div class="nav-logo col-lg-2">
            <img class="logo" src="/images/nike_swoosh.svg" alt="">
          </div>
          <!-- NAVIGATION -->
          <ul class="header-nav col-lg-10">
            <a href="index.php" class="nav-item"><li>orders</li></a>
            <a href="products.php" class="nav-item current-page"><li>products</li></a>
            <a href="#" class="nav-item"><li>create order</li></a>
            <a href="#" class="nav-item"><li>invoices</li></a>
            <!-- Log In Form -->
            <?php if(isset($_SESSION['logged_in'])) : ?>
                <?php $user = unserialize($_SESSION['user']); ?>
                <!-- <h1>Hello, <?php echo $user->username; ?>!</h1> -->
                <a class="nav-item" href="profile.php"><li>Profile</li></a>
                <a class="nav-item warning" href="logout.php"><li>Log Out</li></a>
            <?php else : ?>
                <!-- <h1>You are not logged in.</h1> -->
                <a class="nav-item" href="login.php"><li>Log In</li></a>
                <a class="nav-item" href="register-user.php"><li href="register-user.php">Register</li></a>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </header>

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
