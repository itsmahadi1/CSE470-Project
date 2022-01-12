<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function indexTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    /** @test */
    public function detailPage1Test()
    {
        $response = $this->get('/detail/1');
        $response->assertSee('Samsung A52s');
    }
    /** @test */
    public function detailPage2Test()
    {
        $response = $this->get('/detail/2');
        $response->assertSee('Samsung A72');
    }
    /** @test */
    public function addToCartTest()
    {
        $this->assertDatabaseHas('cart' ,['product_id'=>"2"]);
    }
    /** @test */
    public function cartListPageTest()
    {
        $response = $this->get('/cartlist');
        $response->assertSee('Samsung A72');
    }
    /** @test */
    public function myOrders1Test()
    {
        $this->assertDatabaseHas('orders' ,['product_id'=>"2"]);
    }
    /** @test */
    public function myOrders2Test()
    {
        $this->assertDatabaseHas('orders' ,['product_id'=>"1"]);
    }
    /** @test */
    public function myOrdersPageTest()
    {
        $response = $this->get('/myorders');
        $response->assertSee('my orders');
    }
    /** @test */
    public function orderNowPageTest()
    {
        $response = $this->get('/ordernow');
        $response->assertSee('Amount');
    }


    
}
