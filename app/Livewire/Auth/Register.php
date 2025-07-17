<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required')]
    public $fname = '';
    public $mname= '';
    #[Validate('required')]
    public $lname='';
    #[Validate('required|numeric')]
    public $phone='';
    #[Validate('required|email')]
    public $email='';


    public function register()
    {
        
        $this->validate();

        $user = User::create([
            'name' => $this->fname,
            'email' => $this->email,
            'password' => bcrypt('password'),
        ]);

        event(new Registered($user));

        $this->reset();
        
    }




    public function render()
    {
        return view('livewire.auth.register');
    }
}
