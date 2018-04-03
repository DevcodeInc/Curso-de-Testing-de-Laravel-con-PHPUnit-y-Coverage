<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Categoria;

class CategoriasTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {

            $Categorias = Categoria::all();

            foreach ($Categorias as $Categoria) {
                $browser->visit('/')
                    ->click('a[id=categorias]')
                    ->assertSee($Categoria->name);
            }

            // Con una mejor performance
            /*
                $browser->visit('/')
                    ->click('a[id=categorias]');

                foreach ($Categorias as $Categoria) {
                    $browser->assertSee($Categoria->name);      ← no produce warning
                    $browser->waitForText($Categoria->name);    ← produce warning
                }
            */
        });
    }
}
