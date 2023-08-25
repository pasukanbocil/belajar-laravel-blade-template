<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", [
            "user" => [
                "premium" => true,
                "name" => "Dicky",
                "admin" => true
            ]

        ])
            ->assertSee("checked")
            ->assertSee("Dicky")
            ->assertDontSee("readonly");


        $this->view("form", [
            "user" => [
                "premium" => false,
                "name" => "Dicky",
                "admin" => false
            ]

        ])
            ->assertDontSee("checked")
            ->assertSee("Dicky")
            ->assertSee("readonly");
    }
}
