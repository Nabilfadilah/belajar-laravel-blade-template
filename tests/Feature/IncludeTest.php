<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        // test include ke view
        $this->view("include", [])
            // harus ada tulisan ini 
            ->assertSeeText("Fadilah Stations") // karena kondisi title else, maka tampil ini
            ->assertSeeText("Selamat Datang di Website Kami")
            ->assertSeeText("Selamat Datang di Web");

        // kalau ini ada titlenya "abil"
        $this->view("include", ["title" => "Abil"])
            // harus ada tulisan ini 
            ->assertSeeText("Abil") // karena kondisi title true, maka tampil ini
            ->assertSeeText("Selamat Datang di Website Kami")
            ->assertSeeText("Selamat Datang di Web");
    }
}
