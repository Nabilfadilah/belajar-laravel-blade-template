<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    // path hello
    public function testHello()
    {
        $this->get("/hello")->assertSeeText("laravel blade template");
    }

    // path world
    public function testWorld()
    {
        $this->get("/world")->assertSeeText("ini pake folder lagi di views");
    }

    // test view tanpa routing
    public function testViewWithoutRouting()
    {
        $this->view("hello", ["name" => "Laravel"])->assertSeeText("Laravel");
    }
}
