<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testError()
    {
        // variabel assosiatif array, error yg memiliki field name dan password, dan errornya
        $errors = [
            "name" => "Name is required",
            "password" => "Password is required"
        ];

        // menampilkan error
        $this->withViewErrors($errors)
            ->view("error", []) // dari file error
            // yang diharapkan
            ->assertSeeText("Name is required")
            ->assertSeeText("Password is required");
    }
}
