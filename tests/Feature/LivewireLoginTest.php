<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireLoginTest extends TestCase
{

      use DatabaseTransactions;
    /**
     * A basic feature test example.
     */
    
    public function test_user_can_login_with_correct_credentials()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password123'),
        ]);

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'password123')
            ->call('inputLogin')
            ->assertRedirect('/dashboard');

        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_wrong_credentials()
    {
         $user = User::factory()->create();

          Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'wrongpass')
            ->call('inputLogin')
            ->assertHasErrors(['email']);

    }

    public function test_user_is_throttled_after_many_attempts()
    {
       $user = User::factory()->create();

       $component=Livewire::test('auth.login')
        ->set('email',$user->email)
        ->set('password','passwords');

        for($i=0; $i<5; $i++)
        {
            $component->call('inputLogin');
        }

        $component->call('inputLogin')
        ->assertSet('cooldown', fn ($value) => $value > 0);

    }




}
