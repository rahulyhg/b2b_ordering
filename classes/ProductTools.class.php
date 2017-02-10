<?php
require_once 'Product.class.php'; // <--- Model
require_once 'DB.class.php';

  class ProductTools {
    // Check to see if a name exists.
    // This is called during registration to make sure all names are unique.
    public function checkExists($name) {
      $db = new DB();
      $result = mysqli_query($db->connect(), "select id from products where name='$name'");
        if(mysqli_num_rows($result) == 0) {
          return false;
        } else {
          return true;
        }
    }

    // Get a product
    // Returns a Product object. Takes the product id as an input
    public function get($id) {
      $db = new DB();
      $result = $db->select('products', "id = $id");

      return new Product($result);
    }

    public function getByName($name) {
      $db = new DB();
      $result = $db->select('products', "name = '$name'");

      return new Product($result);
    }

    // Get all products by Category
    // Returns a Product object. Takes the category as an input
    public function getByCategory($category) {
      $resultArray = Array();
      $db = new DB();
      $result = $db->select('products', "category = '$category'");

      foreach ($result as $item) {
        $item = new Product($item);
        array_push($resultArray, $item);
      }

      return $resultArray;
    }
  }

?>
