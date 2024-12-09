<h3>object and array </h3>

<?php
class product {
    public $name;
    public $price;
}

$p1 = new product();
$p1->name = 'Product 1';
$p1->price = 100;

$p2 = new product();
$p2->name = 'Product 2';
$p2->price = 200;

$p3 = new product();
$p3->name = 'Product 3';
$p3->price = 300;

$products = [$p1, $p2, $p3];

?>

<Table border ="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach ($products as $product) { ?>
        <tr>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
        </tr>
        <?php } ?>
</table>