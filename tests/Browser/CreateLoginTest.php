<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://greynia.ddns.net')
                ->WaitForText('Login Account', 1)
                ->type('email', '001234@gmail.com')
                ->type('password', '00000000')
                ->press('login')
                ->WaitForText('管理')
                ->assertSee('管理');
        });
    }
}
