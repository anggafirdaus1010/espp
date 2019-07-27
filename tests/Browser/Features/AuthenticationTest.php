<?php

namespace Tests\Browser\Features;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthenticationTest extends DuskTestCase
{
    public function testLoginFeature()
    {
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(route('site.root'))
                    ->click('@login-url')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->click('@login-button')
                    ->assertSee($user->name)
                    ->assertRouteIs('home.dashboard');
        });
    }
}
