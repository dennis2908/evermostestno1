<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
		// Check if someone directly use GET api/carts, it will not give 200 status.
		
        $response = $this->get('/api/carts');
		
		$response->assertStatus(405);
    }
}
