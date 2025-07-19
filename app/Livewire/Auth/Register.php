<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required')]
    public $fname = '';
    #[Validate('required')]
    public $lname='';
    #[Validate('required|numeric')]
    public $phone='';
    #[Validate('required|email|unique:users,email')]
    public $email='';
    #[Validate('required')]
    public $password = '';
    #[Validate('required|same:password')]
    public $confirmPass = '';


    public function register()
    {
        
        $this->validate();

        try{

        $user = User::create([
            'name' => Str::title($this->fname).' '.Str::title($this->lname),
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        event(new Registered($user));

        $this->reset();

        Auth::login($user);
    
        return redirect()->route('users.dashboard');

        }catch(\Exception $e){

            

        }
    }

     public function redirectToGoogle()
    {
        return redirect()->route('google.redirect');
    }

    public function redirectToFacebook()
    {
        return redirect()->route('facebook.redirect');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
