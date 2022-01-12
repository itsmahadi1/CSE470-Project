<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function loginTest()
    {
        $this->assertDatabaseHas('users' ,[
            'email'=>"mahadi@gmail.com"
        ]);
    }
    /** @test */
    public function loginPageTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    /** @test */
    public function registerPageTest()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}
