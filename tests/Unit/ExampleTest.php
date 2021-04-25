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
       // $response =  $this->json('POST', '/api/auth/login', ['email' => 'mhmd@gmail.com','password' => '1234'])
		//->seeStatusCode(200)->decodeResponseJson()->seeJson(['created' => '1']);
		$response = $this->json('POST', '/api/auth/login', ['email' => 'mhmd@gmail.com','password' => '1234'])->assertJson(['message' => "Unauthorized"]);
		//print_r($response->seeJson());
		
    }
}
