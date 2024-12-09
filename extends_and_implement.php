<h3>Extends and emplement</h3>

<?php
interface Productinterface {
    public function getInfo();
}

class ParentClass {
    public function getInfo() {
    return "parent class";
    }
}

class Product extends ParentClass implements Productinterface {
    public function gerInfo() {
        return "product";
    }
}

$product = new Product();
echo $product->getInfo();
?>