<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StackTest extends TestCase
{
    public function testStack()
    {
        // ambil dari view stack, dan beri value array kosong
        $this->view("stack", [])
            // lihat dari urutan
            ->assertSeeInOrder([
                "third.js",
                "first.js",
                "second.js"
            ]);
    }
}
