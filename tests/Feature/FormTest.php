<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Abil",
            "admin" => true
        ]])
            // yang diharapkan checkbox nya
            ->assertSee("checked")
            ->assertSee("Abil")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Abil",
            "admin" => false
        ]])
            // yang diharapkan checkbox nya
            ->assertDontSee("checked")
            ->assertSee("Abil")
            ->assertSee("readonly");
    }
}
