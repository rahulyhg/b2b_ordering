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
    <meta charset="utf-8">
    <title>Register Product | Nike Business</title>
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#333">
    <meta name="theme-color" content="#333">
  </head>
  <body>
    <?php echo ($error != "") ? $error : ""; ?>

    <form action="register-product.php" method="post" enctype="multipart/form-data">
      Name: <input type="text" name="name" value="<?php echo $name; ?>"> <br>
      Price: <input type="text" name="price" value="<?php echo $price; ?>"> <br>
      Category:
      <select name="category">
        <option value="Lifestyle-Shoes">Lifestyle-Shoes</option>
        <option value="Running-Shoes">Running-Shoes</option>
        <option value="Training-Shoes">Training-Shoes</option>
        <option value="Lifestyle-Clothing">Lifestyle-Clothing</option>
        <option value="Running-Clothing">Running-Clothing</option>
        <option value="Training-Clothing">Training-Clothing</option>
      </select> <br>
      Description:<br>
      <textarea name="description" value="<?php echo $description; ?>"></textarea> <br>
      Image:<br>
      <input type="file" name="image"><br>
      Stock: <br>
      <select name="stock">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select><br>
      <input type="submit" name="submit-form" value="Register Product">
    </form>

  </body>
</html>
