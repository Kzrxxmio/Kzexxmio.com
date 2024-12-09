<h3>List File</h3>
<?php

$arry = scandir('.');
?>


<ui>
    <?php
    foreach ($arry as $item){
        echo "<li>$item</li>";
    }
    ?>
    </ui>