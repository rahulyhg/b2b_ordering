<?php
require_once 'Product.class.php'; // <--- Model
require_once 'DB.class.php';

  class ProductTools {
    // Check to see if a name exists.
    // This is called during registration to make sure all names are unique.
    public function checkExists($name) {
      $result = mysql_query("select id from products where name='$name'");
        if(mysql_num_rows($result) == 0) {
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

    // Get all products by Category
    // Returns a Product object. Takes the category as an input
    public function getByCategory($category) {
      $db = new DB();
      $result = $db->select('products', "category = $category");

      return new Product($result);
    }
  }

?>
