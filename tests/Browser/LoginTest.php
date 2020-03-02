<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\LoginPage;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        factory(User::class)->create(['email' => 'fansheng0594@163.com']);
        $this->browse(function (Browser $browser) {
            $browser->visit(new LoginPage())
                    ->signIn('fansheng0594@163.com', 'password')
                    ->assertPathIs('/')
                    ;
            $browser->assertSee('Weibo');
        });
    }
}
