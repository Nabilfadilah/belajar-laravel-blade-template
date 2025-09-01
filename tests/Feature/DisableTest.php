<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisableTest extends TestCase
{
    // test disable
    public function testDisabledBlade()
    {
        $this->view("disbaled", ["name" => "Abil"])
            ->assertDontSeeText("Abil")
            ->assertSeeText('Hello {{ $name }}');
    }
}
