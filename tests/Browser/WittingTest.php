<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class WittingTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->click('#launch')
                    ->whenAvailable('.modal', function (Browser $modal) {
                        $modal->assertSee('Modal title');
                        $modal->click('#close');
                    })
                    ->assertSee('Kindle Pen');

        });
    }
}
