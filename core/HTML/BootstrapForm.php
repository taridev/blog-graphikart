<?php

namespace Core\HTML;

class BootstrapForm extends Form
{

    protected function surround($html)
    {
        return '<div class="form-group">'. $html .'</div>';
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @param string $label
     * @param array $options
     * @return void
     */
    public function input($name, $label, $options = [])
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label>'. $name .'</label>';
        $value = $this->getValue($name);
        if ($type === 'textarea') {
            $input = '<textarea name="'. $name .'" class="form-control">'. $value .'</textarea>';
        } else {
            $input = '<input type="'. $type .'" name="'. $name .'" value="'. $value .'" class="form-control">';
        }
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options)
    {
        $label = '<label>'. $name .'</label>';
        $input = '<select class="form-control" name="'. $name .'">';
        foreach ($options as $k => $v) {
            $selected = ($k == $this->getValue($name)) ? ' selected' : '';
            $input .= '<option value="'. $k .'"'. $selected .'>'. $v .'</option>';
        }
        $input.= '</select>';
        return $this->surround($label . $input);
    }

    public function submit($text)
    {
        return $this->surround(
            '<button type="submit" class="btn btn-primary">'. $text .'</button>'
        );
    }
}
