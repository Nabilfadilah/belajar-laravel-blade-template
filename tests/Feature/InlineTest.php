<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineTest extends TestCase
{
    public function testInline()
    {
        // Memanggil fungsi Blade::render() untuk merender template blade secara langsung (inline),
        // tanpa harus membuat file blade terpisah.
        // Argumen pertama: 'Hello {{$name}}' → string blade template.
        // Argumen kedua: ['name' => 'Abil'] → data yang akan dipassing ke template.
        $response = Blade::render('Hello {{$name}}', ['name' => 'Abil']);

        // Mengecek apakah hasil render sesuai ekspektasi.
        // self::assertEquals("Hello Abil", $response);
        // → Membandingkan hasil $response dengan string "Hello Abil".
        // Jika sama, berarti test berhasil.
        self::assertEquals("Hello Abil", $response);
    }
}
