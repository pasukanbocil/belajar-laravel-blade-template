<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view("isset-empty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I Don't Have Any Hobbies", false);

        $this->view("isset-empty", ['name' => "Dicky"])
            ->assertSeeText("Hello, My Name Is Dicky")
            ->assertSeeText("I Don't Have Any Hobbies", false);

        $this->view("isset-empty", ['name' => "Dicky", 'hobbies' => ["coding"]])
            ->assertSeeText("Hello, My Name Is Dicky")
            ->assertDontSeeText("I Don't Have Any Hobbies", false);
    }
}
