<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class toast extends Component
{
    /**
     * Create a new component instance.
     */

     public $id,$color,$text,$time,$slot;



    public function __construct($id,$color="success",$text="black",$time)
    {
        $this->id = $id;
        $this->color = $color;
        $this->text = $text;
        $this->time = $time; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toast');
    }
}
