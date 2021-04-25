<?php

namespace Tests\Unit;

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
        // Check if user directly use POST /api/auth/login will give message 'Unauthorized'.
		$response = $this->json('POST', '/api/auth/login', ['email' => 'mhmd@gmail.com','password' => '1234'])->assertJson(['message' => "Unauthorized"]);
		
    }
}
