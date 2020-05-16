<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

abstract class Field extends Component
{
    public $name;
    public $value;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value, $options = null)
    {
        $this->name     = $name;
        $this->value    = $value;
        $this->options  = $options;
    }

    abstract public function render();
}
