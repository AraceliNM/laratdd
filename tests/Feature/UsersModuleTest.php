<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    public function it_loads_the_users_list_page()
    {
        $this->get('usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /** @test */
    public function it_loads_the_users_detail_page()
    {
        $this->get('usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalles del usuario: 5');
    }

    /** @test */
    public function it_loads_the_new_users_page()
    {
        $this->get('usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Creando nuevo usuario');
    }
}
