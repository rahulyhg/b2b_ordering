<?php
  require_once 'includes/global.inc.php';

  // initalize php variables used in the form
  $name = "";
  $price = "";
  $category = "";
  $error = "";

  if(isset($_POST['submit-form'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    // Initalize variables for form validation
    $success = true;
    $productTools = new ProductTools();

    if($productTools->checkExists($name)) {
      $error .= "That product name is already taken. <br/> \n\r";
      $success = false;
    }

    if($success) {
      // Prepare the data for saving in a new product object
      $data['name'] = $name;
      $data['price'] = $price;
      $data['category'] = $category;

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
    <meta charset="utf-8">
    <title>Register Product | Nike Business</title>
  </head>
  <body>
    <?php echo ($error != "") ? $error : ""; ?>

    <form action="register-product.php" method="post">
      Name: <input type="text" name="name" value="<?php echo $name; ?>"> <br>
      Price: <input type="text" name="price" value="<?php echo $price; ?>"> <br>
      Category:
      <select name="category">
        <option value="Shoes">Shoes</option>
        <option value="Sweaters">Sweaters</option>
        <option value="Jackets">Jackets</option>
      </select> <br>
      <input type="submit" name="submit-form" value="Register Product">
    </form>

  </body>
</html>
