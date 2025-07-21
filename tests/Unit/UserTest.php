<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic unit test example.
     */

      /** @test */
    public function it_uses_user_first_name(): void
    {

         $user = User::create([
            'name' => 'John Dela Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'user',
        ]);

        $this->assertEquals('John',$user->first_name);
    }

    /** @test */
    public function it_uses_user_last_name_with_two_words()
    {

          $user = User::create([
            'name' => 'John Philip Dela Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'user',
        ]);

        $this->assertEquals('Dela Cruz',$user->last_name);

    } 

    
    /** @test */
    public function it_uses_user_last_name_with_one_word()
    {

          $user = User::create([
            'name' => 'John Philip Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'user',
        ]);

        $this->assertEquals('Cruz',$user->last_name);

    } 

    /** @test */
    public function it_check_if_the_user_email_verified()
    {

          $user = User::create([
            'name' => 'John Philip Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'user',
            'email_verified_at' => now()
        ]);

        $this->assertTrue($user->is_email_verified);

    }

     /** @test */

      public function it_check_if_the_user_email_is_not_verified()
    {

          $user = User::create([
            'name' => 'John Philip Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'user',
        ]);

        $this->assertFalse($user->is_email_verified);

    }

    
    public function it_uses_user_formatted_created_at()
    {

        $user = User::create([
            'name' => 'John Philip Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'user',
        ]);


        $this->assertEquals('July 18, 2025',$user->formatted_created_at);
    }

    /** @test */
    public function it_checks_if_the_user_is_admin()
    {

         $user = User::create([
            'name' => 'John Philip Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'admin',
        ]);

        $this->assertTrue($user->is_admin);
    }


      /** @test */
    public function it_checks_if_the_user_is_user()
    {

         $user = User::create([
            'name' => 'John Philip Cruz',
            'email' => 'juandelacruz@gmail.com',
            'password' => 'secret', 
            'role' => 'user',
        ]);

        $this->assertTrue($user->is_user);
    }

}
