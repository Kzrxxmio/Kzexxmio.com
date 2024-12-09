<h3>Casting Object</h3>

<?php
class Product {
    public $name;
    public $price;

    public function __toString() {
        return "Name: {$this->name}  Price: {$this->price}";
    }
}

class Product2 {
    public $name;
    public $price;
}

$Product = new Product();
$Product->name = "Realme";
$Product->price = "5600";

$array = (array) $Product;
print_r($array);
echo '<br />';

echo (string) $Product;
echo '<br />';

$Product2 = new Product2();
$Product2 = (object) $array;// Casting array ไปใน object 
print_r($Product2);
?>