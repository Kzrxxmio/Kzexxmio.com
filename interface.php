<h3>Interface</h3>

<?php
interface Productinterface {
    public function getInfo();
}
class Product implements Productinterface {
    public function getInfo() {
        return "product";
    }
}

$product = new Product();
echo $product->getInfo();
?>