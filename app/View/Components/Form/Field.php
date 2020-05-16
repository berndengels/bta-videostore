<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

abstract class Field extends Component
{
    public $name;
    public $value;
    public $options;
    public $checked;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value, $options = null, $checked = false)
    {
        $this->name     = $name;
        $this->value    = $value;
        $this->options  = $options;
        $this->checked  = $checked;
    }

    abstract public function render();
}
