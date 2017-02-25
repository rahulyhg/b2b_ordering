<?php
  require_once 'includes/global.inc.php';

  // initalize php variables used in the form
  $name = "";
  $price = "";
  $category = "";
  $description = "";
  $image = "";
  $path = "";
  $stock = "";
  $error = "";

  if(isset($_POST['submit-form'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    // Image Variables
    $image = $_FILES['image'];
    $image_ext = pathinfo($image['name'])['extension'];
    $imagename = 'product_'.str_replace(' ','_',$name) . '.' . $image_ext;
    $path = 'assets/img/'.basename(strtolower($imagename));

    // Initalize variables for form validation
    $success = true;
    $productTools = new ProductTools();

    if($productTools->checkExists($name)) {
      $error .= "That product name is already taken. <br/> \n\r";
      $success = false;
    }

    // Move uploaded file to our own directory
    if(!move_uploaded_file($image['tmp_name'], $path)) {
      $success = false;
    }

    if($success) {
      // Prepare the data for saving in a new product object
      $data['name'] = $name;
      $data['price'] = $price;
      $data['category'] = $category;
      $data['description'] = $description;
      $data['image'] = $path;
      $data['stock'] = $stock;

      // create the new product to the database
      $newProduct = new Product($data);

      // save the new product to the database
      $newProduct->save(true);

      // Redirect them to the profile page
      header("Location: register-product.php");
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'components/head.php'; ?>
  </head>
  <body>
    <!-- HEADER -->
    <?php require_once 'components/header.php'; ?>

    <?php echo ($error != "") ? $error : ""; ?>

    <div class="container">
      <!-- Form Heading -->
      <div class="form-ctn col-xs-12 col-md-6 col-md-offset-3">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="form-heading">Register product</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <form action="register-product.php" method="post" enctype="multipart/form-data">
                <div class="form-item col-xs-12">
                  <label for="name">Product Name:</label><br>
                  <input id="name" class="col-xs-12" type="text" name="name" value="<?php echo $name; ?>">
                </div>

                <div class="form-item col-xs-12">
                  <label for="price">product price:</label><br>
                  <input id="price" class="col-xs-12" type="text" name="price" value="<?php echo $price; ?>">
                </div>

                <div class="form-item col-xs-12">
                  <label for="category">product category:</label><br>
                  <select id="category" class="col-xs-12" name="category">
                    <option value="Lifestyle-Shoes">Lifestyle-Shoes</option>
                    <option value="Running-Shoes">Running-Shoes</option>
                    <option value="Training-Shoes">Training-Shoes</option>
                    <option value="Lifestyle-Clothing">Lifestyle-Clothing</option>
                    <option value="Running-Clothing">Running-Clothing</option>
                    <option value="Training-Clothing">Training-Clothing</option>
                  </select>
                </div>

                <div class="form-item col-xs-12">
                  <label for="stock">product stock:</label><br>
                  <select id="stock" class="col-xs-12" name="stock">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                  </select>
                </div>

                <div class="form-item col-xs-12">
                  <label for="image">product image:</label><br>
                  <input class="col-xs-12" id="image" type="file" name="image"><br>
                </div>

                <div class="form-item col-xs-12">
                  <label for="description">product description:</label><br>
                  <textarea class="col-xs-12" name="description" placeholder="" value="<?php echo $description; ?>"></textarea> <br>
                </div>

                <div class="form-item col-xs-12">
                  <input class="btn btn-hover-black col-xs-12" type="submit" value="Register Product" name="submit-form" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>
    <?php require_once 'components/slide-nav.php'; ?>
    <script src="assets/js/index.min.js" charset="utf-8"></script>
  </body>
</html>
