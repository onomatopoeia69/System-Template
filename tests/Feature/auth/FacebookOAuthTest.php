<?php

namespace Tests\Feature\auth;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Laravel\Socialite\Facades\Socialite;
use Mockery;
use Tests\TestCase;

class FacebookOAuthTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic feature test example.
     */
 

    /** @test */
    public function it_creates_a_user_and_logs_in_from_facebook_oauth_callback()
    {

        $fbUser = Mockery::mock(ProviderUser::class);
        $fbUser->shouldReceive('getId')->andReturn('fb123');
        $fbUser->shouldReceive('getName')->andReturn('Test User');
        $fbUser->shouldReceive('getEmail')->andReturn('test@example.com');
        $fbUser->shouldReceive('getAvatar')->andReturn('http://example.com/avatar.jpg');
        $fbUser->shouldReceive('getToken')->andReturn('mock-token');
        $fbUser->shouldReceive('expiresIn')->andReturn(3600);

        $fbUser->token = 'mock-token';
        $fbUser->refreshToken = 'mock-refresh-token';
        $fbUser->expiresIn = 3600;
        $fbUser->name = 'Test User';
        $fbUser->email = 'test@example.com';


       Socialite::shouldReceive('driver->user')->andReturn($fbUser);

    
        $response = $this->withoutMiddleware()->get('/auth/facebook/callback');


        $user = User::where('email', 'test@example.com')->first();
        $this->assertNotNull($user);

    
        $this->assertAuthenticatedAs($user, 'web');


        $response->assertRedirect('/dashboard');
    }

     /** @test */
    public function it_handles_facebook_oauth_callback_error()
    {
        Socialite::shouldReceive('driver->user')->andThrow(new \Exception('OAuth failed'));

        $response = $this->get('/auth/facebook/callback');

        $response->assertRedirect(route('home.index'));
        $response->assertSessionHas('error', 'Facebook authentication failed.');
    }

     /** @test */
    public function users_email_automatically_verified_email()
    {

        $fbUser = Mockery::mock(ProviderUser::class);
        $fbUser->shouldReceive('getId')->andReturn('fb123');
        $fbUser->shouldReceive('getName')->andReturn('Test User');
        $fbUser->shouldReceive('getEmail')->andReturn('test@example.com');
        $fbUser->shouldReceive('getAvatar')->andReturn('http://example.com/avatar.jpg');
        $fbUser->shouldReceive('getToken')->andReturn('mock-token');
        $fbUser->shouldReceive('expiresIn')->andReturn(3600);

        $fbUser->token = 'mock-token';
        $fbUser->refreshToken = 'mock-refresh-token';
        $fbUser->expiresIn = 3600;
        $fbUser->name = 'Test User';
        $fbUser->email = 'test@example.com';


        Socialite::shouldReceive('driver->user')->andReturn($fbUser);

        $response = $this->get('/auth/facebook/callback');

        $user = User::where('email', 'test@example.com')->first();

        $this->assertNotNull($user);

        $this->assertNotNull($user->email_verified_at);
     
        $this->assertAuthenticatedAs($user);
    }
        
}
