<h3>Methos And Params</h3>

<?php

class Product {
    function getInfo($name, $price) {
        return "name: ".$name. "  price:" .$price;
    }
}

$product = new Product();
echo $product->getInfo('product 1', 100);
?>