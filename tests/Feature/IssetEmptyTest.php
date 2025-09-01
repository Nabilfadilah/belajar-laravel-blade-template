<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("isset-empty", [])->assertDontSeeText("Hello");
        $this->view("isset-empty", ["name" => "Abil"])
            ->assertSeeText("Hello, my name is Abil", false)
            ->assertSeeText("I dont have hobbies", false);

        $this->view("isset-empty", ["name" => "Abil", "hobbies" => ["Coding"]])
            ->assertSeeText("Hello, my name is Abil", false)
            ->assertDontSeeText("I dont have hobbies", false);
    }
}
