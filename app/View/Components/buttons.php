<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class buttons extends Component
{
    /**
     * Create a new component instance.
     */

    public $size,$color,$href;

    public function __construct($color,$size,$href=null)
    {
        $this->color = $color;
        $this->size = $size;
        $this->href =$href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons');
    }
}
