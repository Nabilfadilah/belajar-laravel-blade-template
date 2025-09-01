<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{

    public function testIfStatement()
    {
        $this->view("if", ["hobbies" => []])->assertSeeText("I dont have any hobbies!", false);
        $this->view("if", ["hobbies" => ["Coding"]])->assertSeeText("I have one hobby");
        $this->view("if", ["hobbies" => ["hobbies", "Gaming"]])->assertSeeText("I dont have multiple hobbies!");
    }
}
