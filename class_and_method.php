<h3>Class and Method</h3>
<?php
class product {
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function getInfo() {
        return "บักบ่าวท้าว: ".$this->name. " price: ".$this->price;
    }
}

$product = new product('เหล้าขาว 1', 100);
echo $product->getInfo();
?>