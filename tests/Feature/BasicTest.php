<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Box;


class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    # Test function for Box class
 public function testBoxContents()
 {
     $box = new Box(['toy']);
     $this->assertTrue($box->has('toy'));
     $this->assertTrue($box->has('ball'));
 }
}
