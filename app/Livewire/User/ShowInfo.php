<?php

namespace App\Livewire\User;


use Livewire\Component;

class ShowInfo extends Component
{
    public $child;

    public function mount($child)
    {
        $this->child = $child;
    }

    public function refreshChild()
    {
        $this->child->refresh();
    }

    public function render()
    {
        return view('livewire.user.show-info');
    }
}
