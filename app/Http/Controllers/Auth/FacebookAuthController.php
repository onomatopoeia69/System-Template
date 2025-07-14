<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    
    public function redirect()
    {

      return Socialite::driver('facebook')->redirect();
        
    }

    public function callback()
    {

         try {

        $user = Socialite::driver('facebook')->user();

        } catch (\Throwable $e) {

            return redirect()->route('login')->with('error', 'Facebook authentication failed.');
        }

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            
            Auth::login($existingUser);

        }else{ 

            $newUser = User::updateOrCreate([
                'email' => $user->email,
            ], [
                'name' => $user->name,
                'password' => bcrypt(Str::random(16)),
            ]);   
            
            Auth::login($newUser);
        }

        return redirect()->intended('/dashboard');
          
    }

}



