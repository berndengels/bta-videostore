<?php

namespace App\View\Components\Form\Input;

use Illuminate\View\Component;

class radio extends Component
{
    public $name;
    public $value;
    public $msg;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components..form.input.radio');
    }
}
