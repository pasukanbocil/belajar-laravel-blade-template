<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceInjectionTest extends TestCase
{
    public function testInjec()
    {
        $this->view("service-injection", ["name" => "Dicky"])
            ->assertSeeText("Hello Dicky");
    }
}
