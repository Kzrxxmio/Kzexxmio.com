<h3>Button ComPonent</h3>

<?php
class Button {
    public $text;

    public function __construct($text) {
        $this->$text = $text;
    }

    public function toString() {
        $style = "
        background-color: #ff0000;
        color: #fff;
        padding: 40px 50px;
        border-radius: 20px;
        ";
        return "<button style='{$style}'>{$this->text}</button>";
    }
}

$button = new Button("Click me");
echo $button->toString();
?>