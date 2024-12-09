<?php
$name = "Bell"
?>

<h3>string function</h3>
<div>count: <?php echo strlen($name); ?></div>
<div>index of: <?php echo strpos($name,"e"); ?></div>
<div>Upper case: <?php echo strtoupper($name); ?></div>
<div>Lower case: <?php echo strtolower($name); ?></div>
<div>replace: <?php echo str_replace("Bell","Boom",$name); ?></div>
<div>substring: <?php echo substr($name,0,3);?></div>
