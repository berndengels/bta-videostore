<?php

namespace App\View\Components\Form\Input;

use Illuminate\View\Component;

class date extends Component
{
    public $name;
    public $value;
    public $msg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = $name;
        $this->value = $value;
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components..form.input.date');
    }
}
