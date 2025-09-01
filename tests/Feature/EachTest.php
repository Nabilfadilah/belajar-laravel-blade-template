<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Abil",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Fadilah",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])
            // harus sesuai urutan
            ->assertSeeInOrder([
                ".red",
                "Abil",
                "Coding",
                "Gaming",
                "Fadilah",
                "Coding",
                "Gaming"
            ]);
    }
}
