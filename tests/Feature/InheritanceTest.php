<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testInheritance()
    {
        // ambil view child
        $this->view("child", [])
            // hasil yang diharapkan
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Deskripsi Header")
            ->assertDontSeeText("Default Content")
            ->assertSeeText("Ini adalah halaman utama");
    }

    public function testInheritanceWithoutOverride()
    {
        // ambil view child default
        $this->view("child-default", [])
            // hasil yang diharapkan
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default Content")
            ->assertDontSeeText("Deskripsi Header")
            ->assertDontSeeText("Ini adalah halaman utama");
    }
}
