<?php

namespace App\View\Components\Form\Input;

use Illuminate\View\Component;
use Illuminate\View\View;

class Select extends Component
{
    public $name;
    public $value;
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

    public function isSelected($option)
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components..form.input.select');
    }
}
