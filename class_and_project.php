<h3>Class and project</h3>

<?php
// การสรร้างคลาส
class Product {
    public $name;
    public $price;
}

// การสร้างวัตถุ
$product = new Product();
$product->name = 'Product 1';
$product->price = 100;

$product2 = new Product();
$product2->name = 'Product 2';
$product2->price = 200;


echo $product->name;
echo '<br />';
echo $product->price;

echo $product2->name;
echo '<br />';
echo $product2->price;


?>