<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Categoria;

class CategoriaTest extends TestCase
{
    /**
     * Test model work
     *
     * @return void
     */
    public function testExample()
    {
        $listProduct = new Categoria(
            ['name' => 'Ropa',
             'comment' => 'La mejor ropa',
             'Orden' => 1]);

        $this->assertEquals('Ropa', $listProduct->name);
    }
}
