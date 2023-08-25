<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view("while", ["i" => 0])
            ->assertSeeText("The Curent Value Is 0")
            ->assertSeeText("The Curent Value Is 1")
            ->assertSeeText("The Curent Value Is 2")
            ->assertSeeText("The Curent Value Is 3")
            ->assertSeeText("The Curent Value Is 4")
            ->assertSeeText("The Curent Value Is 5")
            ->assertSeeText("The Curent Value Is 6")
            ->assertSeeText("The Curent Value Is 7")
            ->assertSeeText("The Curent Value Is 8")
            ->assertSeeText("The Curent Value Is 9");
    }
}
