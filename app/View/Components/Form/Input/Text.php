<?php

namespace App\View\Components\Form\Input;

use Illuminate\View\View;
use App\View\Components\Form\Field;

class Text extends Field
{
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
