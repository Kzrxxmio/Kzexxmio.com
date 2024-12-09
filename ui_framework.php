<?php

class Button {
    public $text;

    public function __construct($txt) {
        $this->text = $txt;
    }

    public function __toString() {
        $style = "
        background-color: #ff0000;
        color: #fff;
        padding: 40px 50px;
        border-radius: 20px;
        ";
        return "<button style='{$style}'>{$this->text}</button>";
    }
}
class input {
    public $type = 'text';

    public function __construct($type) {
        $this->type = $type;
    }

    public function __toString() {
        $style = "
        border: 1px solid #ccc;
        padding: 5px;
        ";

        return "<input type ='{$this->type}'  style='{$style}'>";
    }
}

?>