<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testInheritance()
    {
        $this->view("child", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Deskripsi Header")
            ->assertSeeText("Default Header")
            ->assertDontSeeText("Default Content")
            ->assertSeeText("Ini Adalah Halaman Utama");
    }

    public function testInheritanceWithOutOveride()
    {
        $this->view("child-default", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default Content")
            ->assertDontSeeText("Deskripsi Header")
            ->assertDontSeeText("Ini Adalah Halaman Utama");
    }
}
