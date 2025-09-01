<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForLoopTest extends TestCase
{
    // for
    public function testFor()
    {
        $this->view("for-loop", ["limit" => 10])
            ->assertSeeText("0")
            ->assertSeeText("5")
            ->assertSeeText("9");
    }

    // foreach
    public function testForeach()
    {
        $this->view("foreach", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }

    // forelse
    public function testForelse()
    {
        $this->view("forelse", ["hobbies" => []])
            ->assertSeeText("Tidak Punya Hobby");

        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }
}
