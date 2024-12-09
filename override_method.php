<h3>Override Method</h3>

<?php
class ParentClass {
    public function getInfo() {
        return "Parent class";
    }
}

class Product extends ParentClass {
    public function getInfo() {
        return "product class";
    }
        
}

$product = new Product();
echo $product->getInfo();
?>