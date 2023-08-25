<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LayoutTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])
            ->assertSeeText("Programer Zaman Now")
            ->assertSeeText("Selamat Datang Di Website Kami")
            ->assertSeeText("Selamat Datang Di Web");

        $this->view("include", ["title" => "Dicky"])
            ->assertSeeText("Dicky")
            ->assertSeeText("Selamat Datang Di Website Kami")
            ->assertSeeText("Selamat Datang Di Web");
    }
}
