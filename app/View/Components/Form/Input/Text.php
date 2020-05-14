<?php

namespace App\View\Components\Form\Input;

use Illuminate\View\Component;
use Illuminate\View\View;

class Text extends Component
{
    public $name;
    public $value;
    public $msg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value, $msg = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.form.input.text');
    }
}
