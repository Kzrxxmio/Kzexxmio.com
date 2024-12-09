<?php

include "ui_framework.php";

$button = new Button("เข้ารหัสผ่าน");

$input_username = new input("text");
$input_password = new input("password");
?>

<form method="post">
    <div>Username</div>
    <div><?php echo $input_username; ?></div>

    <div style = "margin-top: 10px;">password</div>
    <div><?php echo $input_password; ?></div>

    <div style ="margin-top: 10px;"><?php echo $button; ?></div>
</form>