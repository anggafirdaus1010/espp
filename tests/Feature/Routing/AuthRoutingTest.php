<?php

namespace Tests\Feature\Routing;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthRoutingTest extends TestCase
{
    public function testLoginRoute()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
    }

    public function testRegisterRoute() {
        $response = $this->get('/register');
        $response->assertStatus(404);
    }

    public function testRedirectToDashboardAfterLogin() {
        $user = factory(User::class)->create();
        $response = $this->post('login', [
            'email' => $user->email,
            'password' => 'password'
        ]);
        $response->assertStatus(302);
        $response->assertRedirect(route('home.dashboard'));
    }
}
