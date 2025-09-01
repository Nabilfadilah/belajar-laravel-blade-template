<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InjectTest extends TestCase
{
    public function testInject()
    {
        // ambil view service injection, dan beri parameter
        $this->view("service-injection", ["name" => "Abil"])
            // hasil yg diharapkan pada parameter
            ->assertSeeText("Hello Abil");
    }
}
