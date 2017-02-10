<?php
require_once 'ProductTools.class.php'; // <-- Controller
require_once 'DB.class.php';

// Model
class Product {
  public $id;
  public $name;
  public $price;
  public $category;
  public $description;
  public $image;
  public $stock;

  // Constructor is called whenever a new object is created.
  // Takes an associative array with the DB row as an agrument
  public function __construct($data) {
    $this->id = (isset($data['id'])) ? $data['id'] : "";
    $this->name = (isset($data['name'])) ? $data['name'] : "";
    $this->price = (isset($data['price'])) ? $data['price'] : "";
    $this->category = (isset($data['category'])) ? $data['category'] : "";
    $this->description = (isset($data['description'])) ? $data['description'] : "";
    $this->image = (isset($data['image'])) ? $data['image'] : "";
    $this->stock = (isset($data['stock'])) ? $data['stock'] : "";
  }

  public function save($isNew = false) {
    // create new db object
    $db = new DB();

    // if product is exists
    if(!$isNew) {
      $data = array(
        "name" => "'$this->name'",
        "price" => "'$this->price'",
        "category" => "'$this->category'",
        "description" => "'$this->description'",
        "image" => "'$this->image'",
        "stock" => "'$this->stock'"
      );

      $db->update($data, 'products', 'id = '.$this->$id);
    } else {
      // if the product is being created for the first time
      $data = array (
        "name" => "'$this->name'",
        "price" => "'$this->price'",
        "category" => "'$this->category'",
        "description" => "'$this->description'",
        "image" => "'$this->image'",
        "stock" => "'$this->stock'"
      );

      $this->id = $db->insert($data, 'products');
    }

    return true;
  }
}

?>
