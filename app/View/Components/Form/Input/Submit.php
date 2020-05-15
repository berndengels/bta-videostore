<?php

namespace App\View\Components\Form\Input;

use Illuminate\View\Component;
use Illuminate\View\View;

class Submit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components..form.input.submit');
    }
}
