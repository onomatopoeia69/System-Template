<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Mockery;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Contracts\User;
use Tests\TestCase;

class GoogleOAuthTest extends TestCase
{

    use DatabaseTransactions;
    
    /**
     * A basic feature test example.
     */

    /** @test */
    public function it_creates_a_user_and_logs_in_from_google_oauth_callback()
{
    
    $googleUser = Mockery::mock(User::class);
    $googleUser->shouldReceive('getId')->andReturn('google123');
    $googleUser->shouldReceive('getName')->andReturn('Test User');
    $googleUser->shouldReceive('getEmail')->andReturn('test@example.com');
    $googleUser->shouldReceive('getToken')->andReturn('mock-token');
    $googleUser->shouldReceive('getRefreshToken')->andReturn('mock-refresh-token');
    $googleUser->shouldReceive('expiresIn')->andReturn(3600);

   
    $googleUser->token = 'mock-token';
    $googleUser->refreshToken = 'mock-refresh-token';
    $googleUser->expiresIn = 3600;
    $googleUser->name = 'Test User';
    $googleUser->email = 'test@example.com';

    
   Socialite::shouldReceive('driver->user')->andReturn($googleUser);

   
    $response = $this->withoutMiddleware()->get('/auth/google/callback');


    $user = \App\Models\User::where('email', 'test@example.com')->first();
    $this->assertNotNull($user);

   
    $this->assertAuthenticatedAs($user, 'web');


    $response->assertRedirect('/dashboard');
}



    /** @test */
    public function it_handles_google_oauth_callback_error()
    {
        Socialite::shouldReceive('driver->user')->andThrow(new \Exception('OAuth failed'));

        $response = $this->get('/auth/google/callback');

        $response->assertRedirect(route('login'));
        $response->assertSessionHas('error', 'Google authentication failed.');
    }
}
