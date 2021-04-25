<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
		// check if user directly use GET api/auth/signup will not give 200 status
		
       $response = $this->get('api/orders/');

       $response->assertStatus(302);
    }
}
