<?php

namespace Core\HTML;

class Form
{
    private $data;
    public $surround = 'p';

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    protected function surround($html)
    {
        return '<'. $this->surround .'>'. $html .'</'. $this->surround .'>';
    }

    protected function getValue($index)
    {
        if (is_object($this->data)) {
            return isset($this->data->$index) ? $this->data->$index : null;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<input type="'. $type .'" name="'. $name .'" value="'. $name .'" value="'. $this->getValue($name) .'">'
        );
    }

    public function password($name)
    {
        return $this->surround(
            '<input type="password" name="'. $name .'" value="'. $name .'" value="'. $this->getValue($name) .'">'
        );
    }

    public function submit($text)
    {
        return $this->surround(
            '<button type="submit">'. $text .'</button>'
        );
    }
}
