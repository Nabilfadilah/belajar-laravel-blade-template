<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition", [
            // tambah data user
            "user" => [
                "name" => "Abil",
                "owner" => true
            ]
        ])
            // harus ada text ini
            ->assertSeeText("Selamat Datang Owner")
            ->assertSeeText("Selamat Datang Abil");

        $this->view("include-condition", [
            // tambah data user
            "user" => [
                "name" => "Abil",
                "owner" => false
            ]
        ])
            // harus tidak ada text ini   
            ->assertDontSeeText("Selamat Datang Owner")
            // harus ada text ini
            ->assertSeeText("Selamat Datang Abil");
    }
}
