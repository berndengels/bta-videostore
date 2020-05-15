<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\View\View;

class Field extends Component
{
    public $type;
    public $name;
    public $value;
//    public $errors = [];
    public $options;
    public $checked;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $value, $options = null, $checked = false)
    {
        $this->type     = $type;
        $this->name     = $name;
        $this->value    = $value;
        $this->options  = $options;
        $this->checked  = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.form.field');
    }
}
